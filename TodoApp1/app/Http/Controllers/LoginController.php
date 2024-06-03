<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function welcome(){
        $tasks = Task::all();
        return view ('welcome', ['tasks' => $tasks]);
        

    }
}
