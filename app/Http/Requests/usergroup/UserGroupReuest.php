<?php

namespace App\Http\Requests\usergroup;

use Illuminate\Foundation\Http\FormRequest;

class UserGroupReuest extends FormRequest
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
            'group_name' => 'required|min:2|max:50|string|unique:user_groups,group_name,'. $this->id,
        ];
    }

    public function messages()
    {
        return [
            'group_name.required'   => 'يجب كتابه اسم القسم',
            'group_name.min'        => 'يجب كتابه حرفين علي الاقل',
            'group_name.max'        => 'عدد الحروف تجاوز العدد المطلوب',
            'group_name.string'     => 'يجب ان يكون القسم اسم',
            'group_name.unique'     => 'هذا القسم موجود بالفعل',
        ];
    }
}
