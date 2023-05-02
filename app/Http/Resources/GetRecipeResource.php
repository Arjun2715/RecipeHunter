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
        $nutrition_facts_array = [];
        $nutrition_facts_lines = explode("\n", $this->nutrition_facts);
        foreach ($nutrition_facts_lines as $line) {
            $parts = explode(": ", $line);
            $nutrition_facts_array[$parts[0]] = $parts[1];
        }

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
            'nutrition_facts' => $nutrition_facts_array,
            'image' => $this->image
        ];
    }
}/*

Calories: 482.18 kcal
Fat: 6.34 g
Saturated Fat: 1.02 g
Carbohydrates: 79.55 g
Net Carbohydrates: 59.73 g
Sugar: 3.68 g
Cholesterol: 0 mg
Sodium: 420.17 mg
Protein: 31.07 g
*/
