<?php

namespace App\Http\Controllers;

use App\Models\loan_package;
use Illuminate\Http\Request;

class LoanPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_package = loan_package::createLoanPackage();
        return view('pages.package.index', compact('kode_package'));
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
            'kode_package'      => $request->input('kode_package'),
            'package'      => $request->input('package')
        ];

        loan_package::create($data);
        // return response([
        //     'status' => 'Success',
        //     'message' => 'Data Tersimpan'
        // ], 200);
        return redirect()->route('package.index');
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