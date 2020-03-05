<?php

namespace TopDigital\Places\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'location' => $this->location,
            'description' => $this->description,
            'preview_url' => $this->preview_url ? config('app.url') . $this->preview_url : null,
            'phones' => $this->phones,
            'timetable' => $this->timetable,
            'created_at' => $this->created_at->format('U'),
            'updated_at' => $this->updated_at->format('U'),
            'deleted_at' => $this->deleted_at ? $this->deleted_at->format('U') : null,
        ];
    }
}
