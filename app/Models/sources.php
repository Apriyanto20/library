<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sources extends Model
{
    use HasFactory;
    protected $table = 'sources';
    protected $fillable = [
        'id',
        'source',
    ];

    public function source()
    {
        return $this->belongsTo(sources::class, 'id', 'id_source');
    }
}