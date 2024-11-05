<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\loan_package;
use Illuminate\Http\Request;

class LoanPackageAPIController extends Controller
{
    public function get_all()
    {
        $loan_package = loan_package::all();
        return response()->json([
            'loan_package' => $loan_package,
        ]);
    }
}