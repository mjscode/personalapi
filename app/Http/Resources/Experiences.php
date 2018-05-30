<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Experiences extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'type' =>(string) 'experience',
            'id' => $this->id,
            'attributes' =>
            [
            'title' => $this->title,
            'company' => $this->company,
            'start' => $this->start->format('M, Y'),
            'end' => $this->end->format('M, Y')
            ]
        ];
    }
}
