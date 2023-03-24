<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'author',
        'title',
        'category_id',
        'cuisine_id',
        'diet_id',
        'description',
        'nutrition_facts',
        'image'
    ];

}
