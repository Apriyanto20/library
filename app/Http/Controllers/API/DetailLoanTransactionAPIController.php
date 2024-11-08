<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\detail_loan_transactions;
use Illuminate\Http\Request;

class DetailLoanTransactionAPIController extends Controller
{
    public function get_all()
    {
        $detailloanTransactions = detail_loan_transactions::with(['book','loanPackage'])->get();
        return response()->json([
            'detailloanTransactions' => $detailloanTransactions,
        ]);
    }
}
