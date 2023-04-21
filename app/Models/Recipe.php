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
        'description',
        'nutrition_facts',
        'image',
        'prep_time',
        'cook_time',
        'servings'
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function ratingMean()
    {
        return $this->ratings()->avg('rating');
    }
    public function ingredients(){
        return $this->hasMany(RecipeIngredient::class);
    }
    public function steps(){
        return $this->hasMany(RecipeSteps::class);
    }

    public function categories(){
        return $this->hasMany(RecipeCategory::class);
    }

    public function cuisines(){
        return $this->hasMany(RecipeCuisine::class);
    }
}
