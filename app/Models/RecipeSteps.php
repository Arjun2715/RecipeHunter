<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeSteps extends Model
{
    use HasFactory;
    protected $fillable = [
        'recipe_id','description','order_step'
    ];
    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
}
