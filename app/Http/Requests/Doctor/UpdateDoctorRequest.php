<?php

namespace App\Http\Requests\Doctor;

// Use gate
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Component\HttpFoundation\Response;

// this rule only at update request
use Illuminate\Validation\Rule;

class UpdateDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'specialist_id' => [
                'required', 'integer',
            ],

            'name' => [
                'required', 'string', 'max:255',
            ],

            'fee' => [
                'required', 'string', 'max:255',
            ],

            'photo' => [
                'nullable', 'string', 'max:10000',
            ],
        ];
    }
}
