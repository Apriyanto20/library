<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\fakultas;
use App\Models\genres;
use App\Models\sources;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = books::createBooks();
        $fakultas = fakultas::all();
        $genres = genres::all();
        $sources = sources::all();
        return view('pages.books.index', compact('book'))->with([
            'fakultas'      => $fakultas,
            'genres'        => $genres,
            'sources'       => $sources
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode_book' => $request->input('kode_book'),
            'tittle' => $request->input('major'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'place_of_publication' => $request->input('place_of_publication'),
            'publication_year' => $request->input('publication_year'),
            'kode_fakultas' => $request->input('fakultas'),
            'kode_genre' => $request->input('genre'),
            'kode_source' => $request->input('source'),
            'bookshelf' => $request->input('bookshelf'),
            'synopsis' => $request->input('synopsis'),
            'ebook' => $request->input('ebook'),
            'books_status' => $request->input('books_status'),
        ];

        books::create($data);
        return redirect()->route('books.index')->with('message', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailBook = books::where('id', $id)->first();
        return view('pages.books.show')->with([
            'detailBook' => $detailBook
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
