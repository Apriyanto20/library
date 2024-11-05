<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
    use HasFactory;
    protected $table = 'clases';
    protected $fillable = [
        'kode_kelas',
        'kode_major',
        'kelas',

    ];

    public static function createKelas()
    {
        $latestCode = self::orderBy('kode_kelas', 'desc')->value('kode_kelas');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'K' . $formattedCodeNumber;
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_kelas', 'kode_kelas');
    }
    public function major()
    {
        return $this->belongsTo(major::class, 'kode_major', 'kode_major');
    }
}