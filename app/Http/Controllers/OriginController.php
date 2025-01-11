<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    //
    public function originsList() {
        $origins = Origin::where('evolution', null)->get()->all();

        return view('races', ['origins' => $origins, 'powers']);
    }
}
