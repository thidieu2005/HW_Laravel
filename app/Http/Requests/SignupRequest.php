<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Authorize the request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Define validation rules.
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    /**
     * Define custom validation messages.
     */
    public function messages()
    {
        return [
            'name.string' => 'Vui lòng điền tên cho đúng',
            'age.numeric' => 'Vui lòng nhập tuổi cho đúng',
            'date.string' => 'Vui lòng điền lại ngày tháng',
            'phone.numeric' => 'Vui lòng kiểm tra lại số điện thoại',
            'web.string' => 'Vui lòng nhập kiểm tra lại kí tự',
            'address.string' => 'Vui lòng nhập lại địa chỉ'
        ];
    }
}
