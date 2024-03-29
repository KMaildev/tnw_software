<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWantToBuy extends FormRequest
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
            'customer_name' => 'required',
            'phone_number' => 'required',
            'township_id' => 'required',
            'property_type_id' => 'required',
            'price_from' => 'required|numeric',
            'price_to' => 'required|numeric',
        ];
    }
}
