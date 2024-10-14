<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'id',
        'tittle',
        'author',
        'publisher',
        'place_of_publicaton',
        'publication_year',
        'id_fakultas',
        'id_genre',
        'id_source',
        'bookshelf',
    ];

    public function detail_loan()
    {
        return $this->belongsTo(detail_loan_transactions::class, 'id', 'id_book');
    }

    public function fakultas()
    {
        return $this->hasMany(fakultas::class, 'id_fakultas', 'id');
    }
    public function genres()
    {
        return $this->hasMany(genres::class, 'id_genre', 'id');
    }
    public function source()
    {
        return $this->hasMany(sources::class, 'id_source', 'id');
    }
}