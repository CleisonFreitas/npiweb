<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class EmissorRequest extends FormRequest
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
            'menu' => [
                'required',
                Rule::in(['NFSe de Pagamentos','Vendas','Acompanhar NFSe','Configurações por CNPJ','Configurações Gerais','Usuários','Logoff'])
            ],
            'title' => 'required',
            'iframe' => 'required'
        ];
    }
}
