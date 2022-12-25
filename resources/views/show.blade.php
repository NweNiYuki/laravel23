@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <div class="container">
                        <h2>Home Page</h2>
                        <div>
                            <a href="/todo/create"><button class="btn btn-success">Create</button></a>
                        </div>

                        @foreach($data as $value)
                        <a href="/todo/{{ $value->id}}"> <li>{{ $value->naem }}</li></a>
                        <hr>
                        @endforeach
                    </div> --}}

                    <div class="container">
                        <!-- On rows -->
                   
                    
                
                <table class="table">
                 <a href="/todo/create"> <button class="btn btn-primary">Add new</button>
                  <caption>2023 Sweet Heart</caption>
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">TITLE</th>
                      <th scope="col">CONTENT</th>
                      <th scope="col">REASON</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($todo as $list)
                    <tr>
                      
                      <th scope="row">{{ $list->id }}</th>
                      <td>{{ $list->title }}</td>
                      <td>{{ $list->content }}</td>
                      <td>{{ $list->reason }}</td>
                
                      <form method="post" action="/todo/{{$list->id}}">
                
                            @csrf
                            @method("DELETE")
                      <td>
                        <button class="btn btn-info">DEL</button>
                      
                        <a href="/todo/{{$list->id}}/edit" class="btn btn-info">EDIT</a>
                      </td>
                      </form>
                     
                     
                    </tr>
                     @endforeach
                  </tbody>
                </table>
                
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
