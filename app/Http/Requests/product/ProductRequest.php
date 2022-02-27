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
            'name_product'       => 'min:2|max:200|string|required',
            'category_id'        => 'required|numeric',
            'damage'             => 'nullable',
            'serial_number'      => 'nullable',
            // 'product_inclusions' => 'string|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name_product.required' => 'يجب كتابه اسم المنتج',
            'name_product.min' => 'يجب كتابه حرفين علي الاقل',
            'name_product.max' => 'عدد الحروف تجاوز العدد المطلوب',
            'name_product.string' => 'اسم المنتج غير صالح',

            'category_id.required' => 'يجب كتابه اسم القسم',
        ];
    }
}
