<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:2|max:50|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يجب كتابه اسم القسم',
            'name.min' => 'يجب كتابه حرفين علي الاقل',
            'name.max' => 'عدد الحروف تجاوز العدد المطلوب',
            'name.string' => 'يجب ان يكون القسم اسم',
            'name.unique' => 'هذا القسم موجود بالفعل',
        ];
    }
}
