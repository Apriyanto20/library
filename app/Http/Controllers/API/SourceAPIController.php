<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\sources;
use Illuminate\Http\Request;

class SourceAPIController extends Controller
{
    public function get_all()
    {
        $source = sources::all();
        return response()->json([
            'source' => $source,
        ]);
    }
}