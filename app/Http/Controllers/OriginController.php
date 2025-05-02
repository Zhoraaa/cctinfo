<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    public function originsList()
    {
        // Получаем только базовые расы (без эволюций) с нужными полями
        $origins = Origin::whereNull('parent')
            ->select(['name', 'index'])
            ->get();

        return view('races', ['origins' => $origins]);
    }

    public function originsListAPI(Request $request)
    {
        $originID = $request->input('race_index');

        if (!$originID) {
            return response()->json(['error' => 'Параметр race_index не определён'], 400);
        }

        $origin = Origin::where('index', $originID)
            ->with(['powers', 'evolutions.powers'])
            ->first();

        if (!$origin) {
            return response()->json(['error' => 'Раса не найдена'], 404);
        }

        return response()->json([
            'origin' => $origin
        ]);
    }
}