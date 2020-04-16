<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CountryRule implements Rule
{
    public $name = 'country';

    protected $pathToJson = '../resources/js/data/countries.json';

    protected $countries;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $string = file_get_contents(app_path($this->pathToJson));
        $json = json_decode($string, true);

        $this->countries = array_column($json,'name_en');
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return in_array($value,$this->countries);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid country.';
    }
}
