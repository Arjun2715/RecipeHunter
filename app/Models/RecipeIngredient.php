<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    use HasFactory;
    protected $fillable = ['recipe_id','name','quantity'];
    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public function scopeNameDoesNotIncludeNumber($query)
    {
        return $query->whereRaw('REGEXP_REPLACE(name, "[^0-9½]", "") REGEXP "^[^0-9]*$"');
    }
}
