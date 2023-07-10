<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'b24_manager_id'=>'string',
            'manager'=>'string',
            'position'=>'string',
            'avatar'=>'string',
            'status'=>'string',
            'date_end'=>'string',

        ];
        
    }

}
