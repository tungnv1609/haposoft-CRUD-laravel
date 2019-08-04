<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class CreateUserRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'numeric|unique:users,phone',
            'email' => 'email|unique:users,email',
            
        ];
         // return [
         //                'name' => 'required|max:50',
         //                'email' => 'required|email|max:255|unique:users,email',
         //                'phone' => 'required|numeric|unique:users,phone',
                       
         //            ];
       
    }
    
}
