<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'id',
        'name',
        'id_fakultas',
    ];

    public function clases()
    {
        return $this->belongsTo(User::class, 'id', 'id_major');
    }
    public function fakultas()
    {
        return $this->hasMany(fakultas::class, 'id_fakultas', 'id');
    }
}