<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * This value is set to true as there are no requirements (such as logged in)
     * in order to submit a contat form request.
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|phone:US',
            'subject' => 'required',
            'type' => 'required',
            'message' => 'required'
        ];
    }
}
