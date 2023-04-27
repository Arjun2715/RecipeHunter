<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
class RandomRecipesResource extends JsonResource
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
            'title' =>  Str::limit($this->title, 50, '...'),
            'description' => Str::limit($this->description, 90, '...'),
            'tags' => $this->categories()->limit(3)->pluck('name')->toArray(),
            'image' => url($this->image)
        ];
    }
}
