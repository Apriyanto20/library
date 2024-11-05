<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;
    protected $table = 'genres';
    protected $fillable = [
        'kode_genre',
        'genre',
    ];

    public static function createGenre()
    {
        $latestCode = self::orderBy('kode_genre', 'desc')->value('kode_genre');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'G' . $formattedCodeNumber;
    }

    public function books()
    {
        return $this->belongsTo(books::class, 'kode_genre', 'kode_genre');
    }
}