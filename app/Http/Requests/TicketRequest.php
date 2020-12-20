<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            "name"=>"required|string|max:255|min:4",
            "services_id"=>"required|exists:services,id",
            "email"=>"required|email",
            "subject"=>"required|string|max:255|min:4",
            "message"=>'required|string',
            'phone' => 'required|numeric|',
            'advance_budget' => 'numeric'

            

        ];
    
}
public function messages()
{
    return [
    
    'name.required'=>'يرجى ادخال اسم يحتوي على 4 حروف على الاقل',
    'services_id'=>'يرجى اختيار نوع الخدمه ',
    'email.required'=>'يرجى ادخال بريد الاكتروني لتواصل',
    'email.email'=>'  البريد الاكتروني يجب ان يكون صحيح',
    'subject.required'=>'يرجى ادخال موضوع التذكرة',
    'message.required'=>'رجاء قم بادخال طلبك',
    'phone.required'=>'يرجى ادخال رقم الهاتف',
    'advance_budget.numeric'=>'يرجى ادخال ميزانيتك المسبقة لهذا الطلب',
    'email.required'=>'يرجى ادخال بريد الاكتروني لتواصل',
    


];
}
    }