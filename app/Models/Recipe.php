<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
    protected $appends = ['tags'];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function ratingMean()
    {
        return $this->ratings()->avg('rating');
    }
    public function ingredients()
    {
        return $this->hasMany(RecipeIngredient::class);
    }
    public function steps()
    {
        return $this->hasMany(RecipeSteps::class);
    }


    public function cuisines()
    {
        return $this->hasMany(RecipeCuisine::class);
    }


    public function recipeCategories()
    {
        return $this->hasMany(RecipeCategory::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipe_categories');
    }

    public function getTagsAttribute()
    {
        return $this->categories()->limit(3)->pluck('name')->toArray();
    }



    public static function createRecipe($data){

        $recipe = Recipe::create($data);

        foreach ($data['categories'] as $category) {
            $category_id = Category::where('name', '=', $category)->first();
            if (!$category_id) {
                $category_id = Category::create([
                    'name' => $category
                ]);
            }
            $recipe->recipeCategories()->create([
                'category_id' => $category_id->id,
            ]);
        }

        foreach ($data['cuisines'] as $cuisine) {
            $cuisine_id = Cuisine::where('name', '=', $cuisine)->first();
            if (!$cuisine_id) {
                $cuisine_id = Cuisine::create([
                    'name' => $cuisine
                ]);
            }

            $recipe->cuisines()->create([
                'cuisine_id' => $cuisine_id->id,
            ]);
        }


        foreach ($data['ingredients'] as $ingredientData) {
            $recipe->ingredients()->create([
                'name' => $ingredientData['name'],
                'quantity' => $ingredientData['quantity'],
            ]);
        }

        foreach ($data['steps'] as $stepData) {
            $recipe->steps()->create([
                'description' => $stepData['description'],
                'order_step' => $stepData['order_step'],
            ]);
        }
        return $recipe;
    }

    public function saveImageInDatabase(){
        $response = Http::get($this->image);
        $contents = $response->getBody();
        Storage::put('public/images/recipes/'.$this->id.'/image.jpg', $contents);
        $newUrl = '/storage/images/recipes/'.$this->id.'/image.jpg';
        $this->image = $newUrl;
        $this->save();
    }
    public static function getCategory($category_id, $number)
    {
        $category = Category::find($category_id);
             $recipes = Recipe::whereHas('categories', function ($query) use ($category) {
                $query->where('category_id', $category->id);
            })->limit($number)->get();
            return $recipes;
    }
}
