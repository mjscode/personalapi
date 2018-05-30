<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Education extends JsonResource
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
            'type' => 'education',
            'id' =>(string) $this->id,
            'attributes' =>[
            'subject' => $this->subject,
            'school' => $this->school,
            'completed' => $this->completed->format('M, Y'),
            'degree' => $this->degree,
            'summary' => $this->summary
            ]
        ];

    }
}
