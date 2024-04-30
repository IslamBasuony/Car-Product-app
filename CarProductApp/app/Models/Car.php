<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'id',
        'name',
        'price',
        'manufacturing_year',
        'color',
        'category',
        'condition',
        'body',
        'image',
    ];
}
