<?php

namespace App\Http\Resources\Activity;

use Illuminate\Http\Resources\Json\Resource;

class ActivityResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [parent::toArray($request)];
        return [
            'activityName' => $this->name,
            'title' => $this->promo_title,
            'dayEvent' => $this->is_day_event,
            'startDate' => $this->start_date,
            'location' => $this->address,
            'landingPage' => $this->website,
            'description' => $this->description,
            'entryCriteria' => $this->entry_criteria,
            'maxRegistrations' => $this->max_registrations,
            'activityType' => $this->type_of_activity,
        ];
    }
}
