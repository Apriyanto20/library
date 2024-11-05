<?php

namespace App\Http\Controllers;

use App\Models\genres;
use App\Models\sources;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_source = sources::createSource();
        return view('pages.source.index', compact('kode_source'));
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
            'kode_source'      => $request->input('kode_source'),
            'source'      => $request->input('source')
        ];

        sources::create($data);
        // return response([
        //     'status' => 'Success',
        //     'message' => 'Data Tersimpan'
        // ], 200);
        return redirect()->route('source.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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