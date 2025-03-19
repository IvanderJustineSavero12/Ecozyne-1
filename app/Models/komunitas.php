<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class komunitas extends Model
{
    use HasFactory;

    protected $table = 'komunitas';
    protected $primaryKey = 'id_komunitas';

    protected $fillable = [
        'id_user',
        'nama',
        'no_telp',
        'alamat',
        'kecamatan',
    ];

}
