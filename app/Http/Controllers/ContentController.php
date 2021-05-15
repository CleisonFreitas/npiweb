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


class ContentController extends Controller
{ // Funerário - MA

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view_ma() {
        $modA = FunerarioModel::all()
        ->where('modulo','MA');
        
        return view('funerario_assistencial')->with('funerario',$modA); 
    }
    // #Funerário - MA

    // Funerário - ME
    public function view_me() {
        $modE = FunerarioModel::all()
        ->where('modulo','ME');
        
        return view('funerario_estoque')->with('funerario',$modE); 
    }
    // #Funerário - ME

    // Cemitério

   public function view_cem(){
       $cemiterio = CemiterioModel::all();

       return view('cemiterio')->with('cemiterio',$cemiterio);
   }
   
    // #Cemitério

    // Contábil

   public function view_con(){
    $contabil = ContabilModel::all();

    return view('contabil')->with('contabil',$contabil);
    }
    // #Contábil

    // Clínica
    public function view_cli(){
        $clinica = ClinicaModel::all();
        
        return view('clinica')->with('clinica',$clinica);
    }
    // #Clínica

    // Mobile
    
    public function view_mut(){
        $mobile = MobileModel::all()
        ->where('modulo','Mutare');
        
        return view('mobile_mutare')->with('mobile',$mobile);
    }
    // #mobile

    // Emissor
    public function view_emi(){
        $emissor = EmissorModel::all();
        
        return view('emissor')->with('emissor',$emissor);
    }
    // #Emissor

    // Telemarketing
    public function view_tel(){
        $telemarketing = TeleModel::all();
        
        return view('telemarketing')->with('telemarketing',$telemarketing);
    }
    // #Telemarketing
    // SAV
    public function view_sav() {
        $sav = SavModel::all();
        
        return view('veicular')->with('veicular',$sav); 
    }

    //Manual
    public function view_man() {
        return view('manual');
    }
}

