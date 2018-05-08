<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|max:200',
            'tel' => 'required|max:20',
            'email' => 'required|max:100|email',
            'address' => 'required|max:255',
            'district' => 'required',
            'province' => 'required',
            'postcode' => 'required|max:20',
        ];
    }

    /**
     * Message custom
     */

    
}
