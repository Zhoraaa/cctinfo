<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller 
{
    // Отладочные методы
    public function insertedData(Request $request) {
        dd($request->all());
        return 0;
    }
}
