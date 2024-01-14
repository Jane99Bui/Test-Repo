<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taikhoan extends Model
{
    use HasFactory;
    protected $table = 'taikhoans';
    protected $fillable = [
        'name',
        'email',
        'password',
       
    ];
}
