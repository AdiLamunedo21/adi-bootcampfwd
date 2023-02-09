<?php

namespace App\Http\Requests\Specialist;

use App\Models\MasterData\Specialist;

// Use gate
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Component\HttpFoundation\Response;

// this rule only at update request
use Illuminate\Validation\Rule;

class UpdateSpecialistRequest extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255', Rule::unique('specialist')->ignore($this->specialist),
                // rule unique only works for other record id
            ],
            'price' => [
                'required', 'string', 'max:255',
            ],
        ];
    }
}
