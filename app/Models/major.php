<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'kode_major',
        'kode_fakultas',
        'major',
    ];

    public static function createMajor()
    {
        $latestCode = self::orderBy('kode_major', 'desc')->value('kode_major');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'M' . $formattedCodeNumber;
    }

    // public function fakultas()
    // {
    //     return $this->hasMany(fakultas::class, 'kode_fakultas', 'fakultas');
    // }
    public function fakultas()
    {
        return $this->belongsTo(fakultas::class, 'kode_fakultas', 'kode_fakultas');
    }

    // public function major()
    // {
    //     return $this->hasMany(major::class, 'kode_major');
    // }
    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_major');
    }
}