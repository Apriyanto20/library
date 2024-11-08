<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\detail_loan_transactions;
use App\Models\loan_transactions;
use Illuminate\Http\Request;

class LoanTransactionAPIController extends Controller
{
    public function get_all()
    {
        $loanTransactions = loan_transactions::with(['users'])->get();
        return response()->json([
            'loanTransactions' => $loanTransactions,
        ]);
    }

    public function get_where($id)
    {
        $detail = detail_loan_transactions::with(['loanTransaction', 'book', 'loanPackage'])->where('id_loan', $id)->get();

        return response()->json([
            'detail' => $detail,
        ]);
    }
}
