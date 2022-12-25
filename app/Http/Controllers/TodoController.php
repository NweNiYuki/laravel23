<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd(auth()->user()->name);
        $todo = Todo::where('user_id', auth()->id())->get();   
        return view ('show', compact('todo'));
    }

    public function create()
    {
        
       return view('create');
    }

    public function store(Request $request)
    {
        $validateData = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'reason' => 'required', 
        ]);
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->content = $request->content;
        // $todo->reason = $request->reason;

        Todo::create($validateData + ['user_id' => auth()->id()]);
        return redirect('todo')->with('message', 'Created Successfully');

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
        $todo = Todo::find($id);
        if ($todo->user_id != auth()->id()) {
            abort(403);
        } 
        return view('edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = request()->title;
        $todo->content = request()->content;
        $todo->reason = request()->reason;

        $todo->save();

        return redirect('todo')->with('message', 'Updated Successfully');  
     }

     public function destroy(Todo $todo)
    {

        $todo->delete();
        return redirect('todo');
    }


}
