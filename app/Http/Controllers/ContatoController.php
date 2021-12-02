<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;

use App\Http\Requests\ContatoRequest;

use Illuminate\Support\Facades\Validator;

use App\Models\ContatoModel;

class ContatoController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contato(){
        return view('pages.contato');
    }
   
    public function save_contato(ContatoRequest $request){

        ContatoModel::create($request->all());
        $request->session()->flash('sucesso',"solicitação $request->title incluida com sucesso!");
        
        return redirect()->route('contato.form');
    }
    
}
