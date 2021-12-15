<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\SistemasModel;

use App\Models\FunerarioModel;

use App\Models\CemiterioModel;

use App\Models\ContabilModel;

use App\Models\ClinicaModel;

use App\Models\EmissorModel;

use App\Models\TeleModel;

use App\Models\MobileModel;

use App\Models\SavModel;

use App\Models\FormModel;

use App\Models\LabModel;


class ContentController extends Controller
{ // Funerário - MA

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view_ma() {
        $img = 'img/funerario.jpg';
        $route= 'assistencial_view';
        $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','assistencial'],['status','P']
        ])->get();

        return view('pages.funerario_assistencial',compact('conteudo','img','route'));
    }
    // #Funerário - MA

    // Funerário - ME
    public function view_me() {
        $img = 'img/caixao.jpg';
        $route= 'estoque_view';
        $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','estoque'],['status','P']
        ])->get();

        return view('pages.funerario_estoque',compact('conteudo','img','route'));
    }
    // #Funerário - ME

    // Cemitério

   public function view_cem(){
    $img = 'img/cemiterio.jpg';
    $route= 'cemiterio_view';
    $conteudo = FormModel::orderBy('ordem')->where([
       ['categoria','cemiterio'],['status','P']
    ])->get();
       return view('pages.cemiterio',compact('conteudo','img','route'));
   }
        
    // #Cemitério

    // Contábil

   public function view_con(){
    $img = 'img/contabil.jpg';
    $route= 'contabil_view';
    $conteudo = FormModel::orderBy('ordem')->where([
       ['categoria','contabil'],['status','P']
    ])->get();
       return view('pages.cemiterio',compact('conteudo','img','route'));
    }
    // #Contábil

    // Clínica
    public function view_cli(){
    $img = 'img/clinica.jpg';
    $route= 'clinica_view';
    $conteudo = FormModel::orderBy('ordem')->where([
        ['categoria','clinica'],['status','P']
    ])->get();
        return view('pages.cemiterio',compact('conteudo','img','route'));
    }
    // #Clínica

    // Mobile
    
    public function view_mut(){
    $img = 'img/cemiterio.jpg';
    $route= 'mobile_view';
    $conteudo = FormModel::orderBy('ordem')->where([
        ['categoria','mobile'],['status','P']
    ])->get();
        return view('pages.mobile_mutare',compact('conteudo','img','route'));
    }
    // #mobile

    // Emissor
    public function view_emi(){
    $img = 'img/emissor.jpg';
    $route= 'emissor_view';
    $conteudo = FormModel::orderBy('ordem')->where([
        ['categoria','emissor'],['status','P']
    ])->get();
        return view('pages.emissor',compact('conteudo','img','route'));
    }
    // #Emissor

    // Telemarketing
    public function view_tel(){
    $img = 'img/telemarketing.jpg';
    $route= 'telemarketing_view';
    $conteudo = FormModel::orderBy('ordem')->where([
        ['categoria','telemarketing'],['status','P']
    ])->get();
        return view('pages.telemarketing',compact('conteudo','img','route'));
    }
    // #Telemarketing
    // SAV
    public function view_sav() {
    $img = 'img/SAV.jpg';
    $route= 'veicular_view';
    $conteudo = FormModel::orderBy('ordem')->where([
       ['categoria','veicular'],['status','P']
    ])->get();
       return view('pages.veicular',compact('conteudo','img','route'));
    }

    //Manual
    public function view_man() {
        return view('pages.manual');
    }
}

