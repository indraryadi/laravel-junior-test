<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'name'=>'required|string|min:2',
            'email'=>'required|email',
            'website'=>'required',
            'logo'=>'required|mimes:png,jpg,jpeg,svg|max:2048' //it worked but when size file more than php.ini setup it error PostTooLargeException
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'website.required'=>'Website is required',
            'logo.required'=>'to large'
        ];
    }
}
