<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\genres;
use Illuminate\Http\Request;

class GenreAPIController extends Controller
{
    public function get_all()
    {
        $genre = genres::all();
        return response()->json([
            'genre' => $genre,
        ]);
    }
}