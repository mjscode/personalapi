<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Website extends JsonResource
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
            'type' =>(string) 'websites',
            'id' => $this->id,
            'attributes' =>[
            'url' => $this->url,
            'summary' => $this->summary,
            'description' => $this->description,
            'skills' => $this->skills
            ]
        ];
    }
}
