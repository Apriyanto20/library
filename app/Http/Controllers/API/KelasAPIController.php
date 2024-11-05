<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\clases;
use Illuminate\Http\Request;

class KelasAPIController extends Controller
{
    public function get_all()
    {
        $kelas = clases::with(['major'])->get();
        return response()->json([
            'kelas' => $kelas,
        ]);
    }
}