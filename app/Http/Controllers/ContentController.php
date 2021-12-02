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


class ContentController extends Controller
{ // Funerário - MA

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view_ma() {
        $img = 'img/funerario.jpg';
        $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','assistencial'],['status','P']
        ])->get();

        return view('pages.funerario_assistencial',compact('conteudo','img'));
    }
    // #Funerário - MA

    // Funerário - ME
    public function view_me() {
        $img = 'img/caixao.jpg';
        $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','estoque'],['status','P']
        ])->get();

        return view('pages.funerario_estoque',compact('conteudo','img'));
    }
    // #Funerário - ME

    // Cemitério

   public function view_cem(){
       $img = 'img/cemiterio.jpg';
       $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','cemiterio'],['status','P']
        ])->get();

       return view('pages.cemiterio',compact('conteudo','img'));
   }
   
    // #Cemitério

    // Contábil

   public function view_con(){
    $img = 'img/contabil.jpg';
    $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','contabil'],['status','P']
        ])->get();

        return view('pages.contabil',compact('conteudo','img'));
    }
    // #Contábil

    // Clínica
    public function view_cli(){
    $img = 'img/clinica.jpg';
    $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','clinica'],['status','P']
        ])->get();

        return view('pages.clinica',compact('conteudo','img'));
    }
    // #Clínica

    // Mobile
    
    public function view_mut(){
    $img = 'img/mobile.jpg';
    $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','mobile'],['status','P']
        ])->get();

        return view('pages.mobile',compact('conteudo','img'));
    }
    // #mobile

    // Emissor
    public function view_emi(){
    $img = 'img/emissor.jpg';
    $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','emissor'],['status','P']
        ])->get();

        return view('pages.emissor',compact('conteudo','img'));
    }
    // #Emissor

    // Telemarketing
    public function view_tel(){
    $img = 'img/telemarketing.jpg';
    $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','telemarketing'],['status','P']
        ])->get();

        return view('pages.telemarketing',compact('conteudo','img'));
    }
    // #Telemarketing
    // SAV
    public function view_sav() {
        $img = 'img/SAV.jpg';
       $conteudo = FormModel::orderBy('ordem')->where([
           ['categoria','veicular'],['status','P']
        ])->get();

        return view('pages.veicular',compact('conteudo','img'));
    }

    //Manual
    public function view_man() {
        return view('pages.manual');
    }
}

