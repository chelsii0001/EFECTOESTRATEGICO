<?php

namespace App\Http\Requests;

use App\Rules\Captcha;
use Illuminate\Foundation\Http\FormRequest;

class BolsaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
           'name'=>'required|string',
           'lastname'=>'required|string',
           'email'=>'required|email',
           'phone' => 'required|numeric|digits:10',
           'msg'=>'required|max:255|string',
           'file' => 'required|mimes:png,jpg,jpeg,pdf|max:5120',
           //'subject'=>'required|max:255|string',
           'g-recaptcha-response' => ['required', new Captcha]


           ];
    }
    public function messages()
    {
        return [

            'name.required' => 'EL CAMPO "NOMBRE" ES REQUERIDO',
            'email.required' => 'EL CAMPO "EMAIL" ES REQUERIDO',
            'email.email' => 'EL CAMPO "EMAIL" NO ES VALIDO',
            'phone.required' => 'EL CAMPO "TELEFONO" ES REQUERIDO',
            'phone.numeric' => 'EL CAMPO "TELEFONO" TIENE QUE SER NUMERICO',
            'phone.digits' => 'EL CAMPO "TELEFONO" TIENE QUE TENER 10 CARÁCTERES',
            'msg.required' => 'EL CAMPO "MENSAJE" ES REQUERIDO',
            'subject.required' => 'EL CAMPO "ASUNTO" ES REQUERIDO',
            'msg' => 'EL CAMPO "MENSAJE" TIENE QUE TENER UN MAXIMO DE 255 CARÁCTERES',
            'token.required' => 'EL CAMPO "CAPTCHA" ES REQUERIDO',
        ];
    }
}
