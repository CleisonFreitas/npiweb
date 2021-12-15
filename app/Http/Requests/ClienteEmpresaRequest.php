<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class ClienteEmpresaRequest extends FormRequest
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
            'empresa' => ['bail','required'],
            'cnpj' => 'bail|required|unique:cliente_cnpj|size:14'
        ];
    }

    public function messages()
    {
        return [
            'empresa.required' => 'Campo "Empresa" é obrigatório',
            'cnpj.required' => 'Campo "CNPJ" é obrigatório',
            'cnpj.unique' => 'Esse Cnpj já está cadastrado',
            'cnpj.size' => 'CNPJ deve possuir 14 números',
        //    'cnpj.numeric' => 'Esse campo deve possuir somente números'
        ];
    }
}
