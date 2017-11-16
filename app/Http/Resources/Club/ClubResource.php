<?php

namespace App\Http\Resources\Club;

use Illuminate\Http\Resources\Json\Resource;

class ClubResource extends Resource
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
            'shortName' => $this->short_name,
            'description' => $this->description,
            'creation_date' => $this->creation_date,
            'address' => $this->address,
            'houseNumber' => $this->house_nr,
            'city' => $this->city,
            'city' => $this->city,
            'invoiceAddress' => $this->invoice_address,
            'email' => $this->email,
            'email' => $this->email,
            'phone' => $this->phone,
            'createdAt' => $this->created_at,
            'link' => [
                'href' => route('activities.index', $this->id)
            ],
        ];
    }
}
