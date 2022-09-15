<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function path(){
        return view('pathway');
    }

    public function warehouse(){
        return view('wh.wh-index');
    }
}
