<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan_package extends Model
{
    use HasFactory;
    protected $table = 'loan_package';
    protected $fillable = [
        'id',
        'package',
    ];

    public function detail_loan()
    {
        return $this->belongsTo(detail_loan_transactions::class, 'id', 'id_package');
    }
}