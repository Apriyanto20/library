<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sources extends Model
{
    use HasFactory;
    protected $table = 'sources';
    protected $fillable = [
        'kode_source',
        'source',
    ];

    public static function createSource()
    {
        $latestCode = self::orderBy('kode_source', 'desc')->value('kode_source');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'S' . $formattedCodeNumber;
    }

    public function source()
    {
        return $this->belongsTo(sources::class, 'kode_source', 'kode_source');
    }

    public function books()
    {
        return $this->belongsTo(books::class, 'kode_source', 'kode_source');
    }
}