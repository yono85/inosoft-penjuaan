<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connectinon = 'mongodb';
    protected $table = 'kendaraans';
    protected $fillable = [
        'kategori',
        'tahun',
        'warna',
        'harga'
    ];

    protected $hidden = [];
}
