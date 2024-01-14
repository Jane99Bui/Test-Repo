<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prduct extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'mota',
        'gia',
        'image',
    ];
}
