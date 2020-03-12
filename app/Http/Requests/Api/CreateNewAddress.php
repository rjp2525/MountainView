<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewAddress extends FormRequest
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
            'label' => 'string',
            'organization' => 'string',
            'street' => 'required|string',
            'state' => 'required|string|max:2',
            'city' => 'required|string',
            'zip' => 'required|postal_code:US',
            'label' => 'required|string',
            'organization' => 'string',
            'country_code' => 'US',
            'is_primary' => 'boolean',
            'is_billing' => 'boolean',
            'is_shipping' => 'boolean',
        ];
    }
}
