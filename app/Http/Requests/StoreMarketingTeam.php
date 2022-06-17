<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarketingTeam extends FormRequest
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
            'marketing_date' => 'required',
            'no' => 'required',
            'ward_no' => 'required',
            'road' => 'required',
            'township_id' => 'required',
            'property_type_id' => 'required',
            'wide' => 'required',
            'type' => 'required',
            'owner_or_agent_type' => 'required',
            'name' => 'required',
            'price' => 'numeric',
            'phone_no' => 'required',
            'code' => 'required|unique:marketing_teams,code',
            'interest_rate' => 'required',
        ];
    }
}
