<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\major;
use App\Models\clases;
use App\Models\fakultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nim = Mahasiswa::createMahasiswa();
        $fakultas = fakultas::all();
        $major = major::all();
        $kelas = clases::all();
        return view('pages.mahasiswa.index', compact('nim'))->with([
            'fakultas'   => $fakultas,
            'major'   => $major,
            'kelas'   => $kelas
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
            'nim' => $request->input('nim'),
            'name' => $request->input('nama'),
            'kode_kelas' => $request->input('kode_kelas'),
            'address' => $request->input('address'),
            'place_of_birth' => $request->input('place_of_birth'),
            'date_birth' => $request->input('date_birth'),
            'gender' => $request->input('gender'),
            'phone' => $request->input('no_hp'),
        ];

        $dataUser = [
            'name' => $request->input('nama'),
            'email' => $request->input('nim'),
            'password' => Hash::make($request->input('nim')),
            'role' => 'User'
        ];

        Mahasiswa::create($data);
        User::create($dataUser);

        return back()->with('message_add', 'Data ditambahkan');
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
