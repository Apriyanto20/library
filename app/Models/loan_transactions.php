<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan_transactions extends Model
{
    use HasFactory;
    protected $table = 'loan_transactions';
    protected $fillable = [
        'id',
        'code_loan',
        'id_user',
        'loan_date',
        'return_date',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function detail_loan()
    {
        return $this->hasMany(detail_loan_transactions::class, 'code_loan');
    }


}
