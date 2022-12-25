<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    
    protected $fillable = ['title','content','reason','user_id'];

}
