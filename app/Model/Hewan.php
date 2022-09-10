<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = 'hewan';
    protected $fillable = [
        'nama', 'jumlah_kaki'
    ];
}
