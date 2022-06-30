<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarketingTeam extends FormRequest
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
            'offer_status' => 'required',
            'marketing_date' => 'required',
            'no' => 'required',
            'road' => 'required',
            'township_id' => 'required',
            'ward' => 'required',
            'property_type_id' => 'required',
            'price' => 'required|numeric',
            'deposit_amount' => 'numeric',
            'permission_type' => 'required',
            'owner_agent' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ];
    }
}
