<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_fakultas = fakultas::createFakultas();
        return view('pages.fakultas.index', compact('kode_fakultas'));
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
            'kode_fakultas'      => $request->input('kode_fakultas'),
            'fakultas'      => $request->input('fakultas')
        ];

        fakultas::create($data);
        // return response([
        //     'status' => 'Success',
        //     'message' => 'Data Tersimpan'
        // ], 200);
        return redirect()->route('fakultas.index');
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
        $data = [
            'kode_fakultas'      => $request->input('kode_fakultas'),
            'fakultas'      => $request->input('fakultas')
        ];
        $status = fakultas::findOrFail($id);
        $status->update($data);
        // return response([
        //     'status' => 'Success',
        //     'message' => 'Data Terupdate'
        // ], 200);
        return redirect()
            ->route('fakultas.index')
            ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fakultas = fakultas::findOrFail($id);
        $fakultas->delete();
        return response([
            'status' => 'Success',
            'message' => 'Data Terhapus'
        ], 200);
        // return back()->with('message_delete', 'Data Fakultas Sudah dihapus');
    }
}