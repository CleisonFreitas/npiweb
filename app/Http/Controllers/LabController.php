<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LabModel;
use App\Models\FormModel;
use App\Models\IndiModel;
use App\Models\SistemasModel;


class LabController extends Controller
{

    public function view_lab(){
        $laboratorio = FormModel::all();
        return view('laboratorio')->with('laboratorio',$laboratorio);
    }
    public function edit_show(Request $request){
        $id = $request->input('conteudo');
        IndiModel::all()->where('form_id',$id);
        return view('edit_lab');
    }
    public function edit_form(Request $request){
        $id = $request->input('conteudo');
        $laboratorio = LabModel::all()->where('id',$id);
        foreach($laboratorio as $lab){
            $categoria = $lab->categoria;
        }
        $con_sistema = SistemasModel::all()->where('tipo',$categoria);
        return view('edit_lab')->with(array('laboratorio' =>$laboratorio, 'sistemas' =>$con_sistema));
    }
}
