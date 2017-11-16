<?php

namespace App\Http\Resources\Club;

use Illuminate\Http\Resources\Json\Resource;

class ClubCollection extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'clubName' => $this->name,
            'description' => $this->description,
            'creation_date' => $this->creation_date,
            'address' => $this->address,
            'city' => $this->city,
            'city' => $this->city,
            'email' => $this->email,
            'email' => $this->email,
            'phone' => $this->phone,
            'link' => [
                'href' => route('clubs.show', $this->id)
            ],
        ];
    }
}
