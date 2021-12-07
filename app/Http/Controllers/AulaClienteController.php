<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Models\LabModel;
use Illuminate\Http\Request;

class AulaClienteController extends Controller
{
   public $select_content = '';

    public function assistencial_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.assistencial',compact('select_content','formacao'));
    }

    public function estoque_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);

        $this->select_content = $select_content;
        
        return view('content.estoque',compact('select_content','formacao'));
    }

    public function cemiterio_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.cemiterio',compact('select_content','formacao'));
    }

    public function clinica_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.clinica',compact('select_content','formacao'));
    }

    public function contabil_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.contabil',compact('select_content','formacao'));
    }

    public function emissor_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.emissor',compact('select_content','formacao'));
    }

    public function mobile_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.mobile',compact('select_content','formacao'));
    }

    public function veicular_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.veicular',compact('select_content','formacao'));
    }

    public function telemarketing_view($id){
        $formacao = FormModel::find($id);
        $select_content = LabModel::aula($id);
        
        return view('content.telemarketing',compact('select_content','formacao'));
    }

}
