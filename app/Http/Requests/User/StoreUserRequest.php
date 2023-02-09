<?php

namespace App\Http\Requests\User;

use App\Models\User;

// Use gate
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Component\HttpFoundation\Response;
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        // abort_if(Gate::denies('branch_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // create middleware from kernel on here
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
                'required', 'string', 'max:255',
            ],
            'email' => [
                'required', 'email', 'uniqe:users', 'max:255',
            ],
            'password' => [
                'min:8', 'string', 'max:255', '',
            ],
            // add validation for role this way
        ];
    }
}
