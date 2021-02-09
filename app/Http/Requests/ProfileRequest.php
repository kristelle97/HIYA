<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'photo'                => 'mimes:jpeg,jpg,png|max:5120',
            'job_position'         => 'present',
            'work_area'            => 'present',
            'country_of_residence' => 'present',
            'description'          => 'present'
        ];
    }
}
