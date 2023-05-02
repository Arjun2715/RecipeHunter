<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class RecentlyUpdatedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => Str::limit($this->title, 30, '...'),
            'description' => Str::limit($this->description, 140, '...'),
            'tags' => $this->categories()->limit(3)->pluck('name')->toArray(),
            'image' => $this->image
        ];
    }
}
