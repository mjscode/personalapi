<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Experience extends JsonResource
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
            'type' => 'experience',
            'id' =>(string) $this->id,
            'attributes' => [
            'title' => $this->title,
            'company' => $this->company,
            'start' => $this->start->format('M, Y'),
            'end' => $this->end->format('M, Y'),
            'roles' => $this->roles,
            'accomplishments' => $this->accomplishments
            ]
        ];
    }
}
