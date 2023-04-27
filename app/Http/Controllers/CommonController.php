<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
{


    public function saveImagesInDatabase(){
        $recipes = Recipe::all();
        foreach ($recipes as $recipe) {
            $url = $recipe->image;
            $response = Http::get($url);
            $contents = $response->getBody();
            Storage::put('public/images/recipes/'.$recipe->id.'/image.jpg', $contents);
            $newUrl = '/storage/images/recipes/'.$recipe->id.'/image.jpg';
            $recipe->image = $newUrl;
            $recipe->save();
        }
        return 'ok';
    }



}
