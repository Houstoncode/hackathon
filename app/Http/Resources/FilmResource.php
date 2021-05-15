<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'subdescription' => $this->subdescription,
            'category' => $this->category,
            'image_href' => $this->image_href,
            'is_premier' => $this->is_premier === '1',
            'views' => $this->views,
            'wink' => $this->wink,
            'kinopoisk' => $this->kinopoisk,
            'imdb' => $this->imdb,
            'age' => $this->age,
            'path_full' => $this->path_full,
            'tasks' => TaskResource::collection($this->tasks)
        ];
    }
}
