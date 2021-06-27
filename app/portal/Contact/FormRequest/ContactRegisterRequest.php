<?php

namespace Portal\Contact\FormRequest;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;

use Illuminate\Validation\ValidationException;

class ContactRegisterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|min:3',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email nao preenchido',
            'name.required' => 'Nome nao preenchido',
            'email.email'  => 'Email invalido',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $json =  [
            'status' => 'fail',
            'errors' => $validator->messages()->all()
        ];
        $response = new JsonResponse($json, 400);
        throw (new ValidationException($validator, $response))->status(400);
    }
}
