<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan_package extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_package',
        'package',
    ];

    public static function createLoanPackage()
    {
        $latestCode = self::orderBy('kode_package', 'desc')->value('kode_package');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'P' . $formattedCodeNumber;
    }

    public function detail_loan()
    {
        return $this->belongsTo(detail_loan_transactions::class, 'kode_package', 'kode_package');
    }
}