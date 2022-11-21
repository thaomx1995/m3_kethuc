<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChitieuRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'danhmuc' => 'required',
            'ngay' => 'required',
            'sotien' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'danhmuc.required' => 'không được bỏ trống !',
            'ngay.required' => ' không được bỏ trống!',
            'sotien.required' => ' không được bỏ trống!',

        ];
    }
}
