<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
          'href_answer' => $this->href_answer,
            'description' => $this->description,
            'answers' => AnswerResource::collection($this->answers),
        ];
    }
}
