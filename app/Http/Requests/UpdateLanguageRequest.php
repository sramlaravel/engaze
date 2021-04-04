<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLanguageRequest  extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //admin guard
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            'title' => 'required|string|max:50',
            'description' => 'required|string|max:1000',
            'image' => 'nullable:id|mimes:jpg,jpeg,png|max:15048',



        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'title.string' => 'اسم العنوان  لابد ان يكون احرف',
            'description.max' => 'العنوان  لابد الا يزيد عن 100 احرف ',
            'image.max' => 'الصورة هذه لا يزيد حجمها عن 20 ميجا بايت  ',

        ];
    }
}
