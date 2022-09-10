<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'nama', 
        'tahun_terbit', 
        'penulis_id'
    ];
}
