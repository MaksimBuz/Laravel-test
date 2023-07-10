<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'b24_contact_id'=>'string',
            'b24_deal_id'=>'string',
            'b24_manager_id'=>'string',
            'manager'=>'string',
            'position'=>'string',
            'phone'=>'string',
            'avatar'=>'string',
            'status'=>'string',

            'date_end'=>'string',
            'status'=>'string',

        ];
        
    }

}
