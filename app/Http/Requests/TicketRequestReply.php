<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequestReply extends FormRequest
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
            'adminreplay' => 'required|string|max:255|min:8'



        ];

}
public function messages()
{
    return [

    'adminreplay.required'=>'يرجى ادخال نص الرساله جيدا وعلى الاقل 8 حروف ',


];
}
    }
