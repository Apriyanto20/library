<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasAPIController extends Controller
{
    public function get_all()
    {
        $fakultas = fakultas::all();
        return response()->json([
            'fakultas' => $fakultas,
        ]);
    }
}