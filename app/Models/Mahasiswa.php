<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'kode',
        'kode_kelas',
        'address',
        'place_of_birth',
        'date_birth',
        'gender',
        'phone',
    ];

    public static function createMahasiswa()
    {
        $latestCode = self::orderBy('nim', 'desc')->value('nim');
        $latestCodeNumber = intval(substr($latestCode, 3));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'MHS' . $formattedCodeNumber;
    }

    public function loan_transactions()
    {
        return $this->belongsTo(loan_transactions::class, 'id', 'id_user');
    }

    public function kelas()
    {
        return $this->belongsTo(clases::class, 'kode_kelas', 'kode_kelas');
    }

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class, 'kode_fakultas', 'kode_fakultas');
    }
    public function major()
    {
        return $this->belongsTo(major::class, 'kode_major', 'kode_major');
    }
}
