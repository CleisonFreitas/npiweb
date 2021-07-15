<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormModel;

class FormController extends Controller
{
    public function form_novo(Request $request){
        FormModel::create($request->all());
        $sessao = session()->flash('sucesso',"Curso criado");
        return redirect()->route('admin.laboratorio')->with($sessao);
    }
}
