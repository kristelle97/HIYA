<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class WorkAreaRule implements Rule
{
    public $name = 'work_area';

    protected $pathToJson = '../resources/js/data/work_areas.json';

    protected $workAreas;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $string = file_get_contents(app_path($this->pathToJson));
        $json = json_decode($string, true);

        $this->workAreas = array_keys($json);
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
        return in_array($value,$this->workAreas);
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
