<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
    use HasFactory;
    protected $table = 'clases';
    protected $fillable = [
        'id',
        'name',
        'id_major',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'id_kelas');
    }
    public function major()
    {
        return $this->hasMany(major::class, 'id_major', 'id');
    }
}