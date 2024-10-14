<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    protected $fillable = [
        'id',
        'name',
    ];

    public function major()
    {
        return $this->belongsTo(major::class, 'id', 'id_fakultas');
    }
    public function books()
    {
        return $this->belongsTo(books::class, 'id', 'id_fakultas');
    }
}