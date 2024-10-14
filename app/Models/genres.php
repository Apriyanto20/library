<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;
    protected $table = 'genres';
    protected $fillable = [
        'id',
        'genre',
    ];

    public function books()
    {
        return $this->belongsTo(books::class, 'id', 'id_genre');
    }
}