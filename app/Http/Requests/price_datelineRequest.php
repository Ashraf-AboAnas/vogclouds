<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class price_datelineRequest extends FormRequest
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
            'dateline' => 'nullable',
            'price' => 'required',
        ];
    }
    public function messages()
  {
    return [

    'dateline.required'=>'يجب اخال تاريخ استحقاق الفاتورة ',
     'price.required'=>'يجب ادخال السعر المتفق علية للفاتوره',

    ];
}
}
