<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use App\Models\major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_major = major::createMajor();
        $fakultas = fakultas::all();
        return view('pages.major.index', compact('kode_major'))->with([
            'fakultas'   => $fakultas
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
            'kode_major' => $request->input('kode_major'),
            'kode_fakultas' => $request->input('fakultas'),
            'major' => $request->input('major'),
        ];

        major::create($data);
        return redirect()->route('major.index')->with('message', 'Berhasil Menambahkan Data');
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