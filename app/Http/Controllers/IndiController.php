<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IndiModel;

class IndiController extends Controller
{
    public function indi_novo(Request $request){
        IndiModel::create($request->all());
        $sessao = session()->flash('sucesso',"Índice criado");
        return redirect()->route('admin.laboratorio')->with($sessao);
    }
}
