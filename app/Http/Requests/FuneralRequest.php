<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;

class FuneralRequest extends FormRequest
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
            'modulo' => ['required',
            Rule::in(['MA','ME']) ],

            'menu' => ['required',
            Rule::in(['Cadastros','Movimentos','Consultas','Impressões','Utilitários','Configurações',
            'Específicos','Atendimento','Cerimonial'])],

            'title' => 'required',
            'iframe' => 'required',
        ];
    }
}
