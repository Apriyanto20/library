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
    public function loan_transactions()
    {
        return $this->hasMany(loan_transactions::class, 'code_loan', 'code_loan');
    }
    public function loan_package()
    {
        return $this->hasMany(loan_package::class, 'id_package', 'id');
    }
    public function books()
    {
        return $this->hasMany(books::class, 'id_book', 'id');
    }
}