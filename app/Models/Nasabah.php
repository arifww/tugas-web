<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'nama',
        'namabelakang',
        'alamat',
        'telepon',
        'avatar',
    ];
}