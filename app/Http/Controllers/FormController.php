<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

use App\Models\FormModel;
use App\Models\LabModel;

class FormController extends Controller
{
    public function form_novo(Request $request){
        FormModel::create($request->all());
        return redirect()->route('admin.laboratorio')->withSuccess('Formação criada com sucesso!');
    }
    public function form_del($id){
        
        $laboratorio = LabModel::all()->where('form_id',$id);

        if(count($laboratorio) >= 1 ){
            return redirect()->back()->with([alert()->error("Existem registros relacionados!")]);
           //  return redirect()->back()->with(dd(count($laboratorio)));
           
        }else{
            $formacoes = FormModel::find($id);
            $formacoes->delete();
            return redirect()->route('admin.laboratorio')->withInfo('Formação excluída com sucesso!');
        }
    }
}
