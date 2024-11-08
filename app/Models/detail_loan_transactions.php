<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_loan_transactions extends Model
{
    use HasFactory;
    protected $table = 'detail_loan_transactions';
    protected $fillable = [
        'id',
        'id_loan',
        'id_book',
        'id_package',
        'return_status',
        'receipt_date',
        'monetary_fine',
    ];
    public function loanTransaction()
    {
        return $this->belongsTo(loan_transactions::class, 'id_loan', 'code_loan');
    }
    public function loanPackage()
    {
        return $this->belongsTo(loan_package::class, 'id_package', 'kode_package');
    }
    public function book()
    {
        return $this->belongsTo(books::class, 'id_book', 'kode_book');
    }
}
