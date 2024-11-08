<?php

namespace App\Http\Controllers;

use App\Models\loan_transactions;
use Illuminate\Http\Request;

class LoantransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanTransaction = loan_transactions::all();
        return view('pages.loanTransactions.index')->with([
            'loanTransaction' => $loanTransaction,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $loanTransaction = loan_transactions::all();
        return view('pages.loanTransactions.create')->with([
            // 'loanTransaction' => $loanTransaction,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loanTransaction = loan_transactions::all();
        return view('pages.loanTransactions.show')->with([
            'loanTransaction' => $loanTransaction,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $loanTransactionDetail = loan_transactions::where('id_loan', $id)->get();
        return view('pages.loanTransactions.show')->with([
            'loanTransactionDetail' => $loanTransactionDetail,
        ]);
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
