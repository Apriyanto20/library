<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    protected $fillable = [
        'kode_fakultas',
        'fakultas',
    ];

    public static function createFakultas()
    {
        $latestCode = self::orderBy('kode_fakultas', 'desc')->value('kode_fakultas');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'F' . $formattedCodeNumber;
    }

    // public function major()
    // {
    //     return $this->belongsTo(major::class, 'id', 'kode_fakultas');
    // }
    public function books()
    {
        return $this->belongsTo(books::class, 'kode_fakultas', 'kode_fakultas');
    }

    public function major()
    {
        return $this->hasMany(major::class, 'kode_major');
    }
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_fakultas', 'kode_fakultas');
    }
}