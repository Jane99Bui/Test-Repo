<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sp extends Model
{
    use HasFactory;
    protected $table = 'Sp';

    protected $fillable = [
        'name',
        'image',
    ];
}
