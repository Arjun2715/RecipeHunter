<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetRecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'ingredients' => $this->ingredients,
            'steps' => $this->steps,
            'cuisines' => $this->cuisines,
            'categories' => $this->categories,
            'prep_time' => $this->prep_time,
            'cook_time' => $this->cook_time,
            'nutrition_facts' => $this->nutrition_facts,
            'image' => $this->image
        ];
    }
}