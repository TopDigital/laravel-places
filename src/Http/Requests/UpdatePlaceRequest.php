<?php

namespace TopDigital\Places\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlaceRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'address' => ['string'],
            'location' => ['required', 'array'],
            'description' => ['string'],
            'phones' => ['array'],
            'timetable' => ['array'],
        ];
    }
}
