<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    //
    public function originsList()
    {
        $origins = Origin::where('evolution', null)->get(['name', 'index'])->all();

        return view('races', ['origins' => $origins, 'powers']);
    }

    public function originsListAPI(Request $request)
    {
        $originID = $request->input('race_index');

        if (!$originID) {
            return response()->json(['error' => 'race_index parameter is required'], 400);
        }

        $origin = Origin::where('index', $originID)->first();

        if (!$origin) {
            return response()->json(['error' => 'Origin not found'], 404);
        }

        return response()->json([
            'origin' => $origin,
            'powers' => $origin->powers ? $origin->powers->toArray() : null,
            'evolutions' => $origin->evolutions ? $origin->evolutions->toArray() : null
        ]);
    }
}
