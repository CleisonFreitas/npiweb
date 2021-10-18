<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit_show($id){
        $formacoes = FormModel::all()->where('id',$id);
        $laboratorio = LabModel::orderBy('ordem','ASC')
        ->where('form_id',$id)->get();
        
        return view('edit_lab')->with(array(
            'formacoes' => $formacoes,
            'laboratorio' => $laboratorio));
    }
    public function updt_lab(Request $request){
     
           LabModel::create($request->all());
           return redirect()->back();
    }
    public function del_lab($id){
        $laboratorio = LabModel::find($id);
        $laboratorio->delete();

        return redirect()->back();
     
    }

    
}