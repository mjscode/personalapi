<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Project extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'type' =>(string) 'projects',
            'id' => $this->id,
            'attributes' =>[
            'url' => $this->url,
            'name' => $this->name,
            'description' => $this->description,
            'skills' => $this->skills
            ]
        ];
    }
}
