<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'kode_book',
        'tittle',
        'author',
        'publisher',
        'place_of_publicaton',
        'publication_year',
        'kode_fakultas',
        'kode_genre',
        'kode_source',
        'bookshelf',
    ];

    public static function createBooks()
    {
        $latestCode = self::orderBy('kode_book', 'desc')->value('kode_book');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'B' . $formattedCodeNumber;
    }

    public function detail_loan()
    {
        return $this->belongsTo(detail_loan_transactions::class, 'id', 'kode_book');
    }

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class, 'kode_fakultas', 'kode_fakultas');
    }
    public function genres()
    {
        return $this->belongsTo(genres::class, 'kode_genre', 'kode_genre');
    }
    public function sources()
    {
        return $this->belongsTo(sources::class, 'kode_source', 'kode_source');
    }
}