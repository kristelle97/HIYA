<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterMembersRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'nullable|string',
            'work_area' => 'nullable|string',
            'country_of_residence' => 'nullable|string'
        ];
    }
}
