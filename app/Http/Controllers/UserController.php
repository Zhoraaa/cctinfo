<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Регистрация
    public function reg(Request $raw_data)
    {
        return view('reg');
    }
}