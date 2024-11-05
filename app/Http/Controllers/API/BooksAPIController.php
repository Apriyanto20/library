<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;

class BooksAPIController extends Controller
{
    public function get_all()
    {
        $book = books::with(['fakultas', 'genres', 'sources'])->get();
        return response()->json([
            'book' => $book,
        ]);
    }
}