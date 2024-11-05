<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\major;
use Illuminate\Http\Request;

class MajorAPIController extends Controller
{
    public function get_all()
    {
        $major = major::with(['fakultas'])->get();
        return response()->json([
            'major' => $major,
        ]);
    }
}