<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
                'sistema'=>['bail','required',
                Rule::in(['Funerário','Cemitério','Clínica','Contábil','Emissor','Mobile','Veicular','Telemarketing']) ],
                'title'=>'bail|required|min:8|max:150',
                'nome'=>'bail|required|max:80',
                'email'=>'bail|required|min:10|max:100,email:rfc,dns',
                'descricao'=>'bail|required|min:8|max:255'
          
            //
        ];
    }

    public function messages(){

        return [
            'sistema.required' => 'É obrigatório informar um sistema',
            'title.required' => 'É obrigatório informar o título',
            'title.max' => 'A quantidade de caracteres não pode ser superior à 150',
            'title.min' => 'A quantidade de caracteres não pode ser inferior à 8',
            'descricao.max' => 'A quantidade de caracteres não pode ser superior à 255',
            'descricao.min' => 'A quantidade de caracteres não pode ser inferior à 8'

        ];
    }
}
