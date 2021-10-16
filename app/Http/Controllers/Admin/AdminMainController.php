<?php

namespace App\Http\Controllers\Admin;

use App\Models\FunerarioModel;
use App\Models\CemiterioModel;
use App\Models\ClinicaModel;
use App\Models\ContabilModel;
use App\Models\EmissorModel;
use App\Models\TeleModel;
use App\Models\SavModel;
use App\Models\MobileModel;
use App\Models\SistemasModel;
use App\Models\ContatoModel;
use App\Models\User;
use App\Models\Admin;
use App\Http\Requests\ContatoRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminMainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    
    public function main(){
            $requests = ContatoModel::all()->count();
            $sistemas = SistemasModel::all()->count();
            $users = User::all(); 
            $admins = Admin::all()->where('email','!=','admin@npitecnologia.com.br')->count();
        //  $requests = ContatoModel::all();
            return view('main')
            ->with(array(
                'sistemas'=> $sistemas,
                'requests'=> $requests,
                'users'=> $users,
                'admins'=> $admins
            ));
        }
        
        //->with('requests',$requests)->with('sistemas',$sistemas)->with('users',$user)->with('admins',$admins);
    public function view_fun(){
        $funerario = FunerarioModel::orderBy('modulo')->get();
        return view('funerario')->with('funerario', $funerario);
    }
    public function view_cem(){
        $cemiterio = CemiterioModel::all();
        return view('cemiterio')->with('cemiterio', $cemiterio);
    }
    public function view_cli(){
        $clinica = ClinicaModel::all();
        return view('clinica')->with('clinica', $clinica);
    }
    public function view_con(){
        $contabil = ContabilModel::all();
        return view('contabil')->with('contabil', $contabil);
    }
    public function view_emi(){
        $emissor = EmissorModel::all();
        return view('emissor')->with('emissor', $emissor);
    }
    public function view_sav(){
        $veicular = SavModel::all();
        return view('veicular')->with('veicular', $veicular);
    }
    public function view_mob(){
        $mobile = MobileModel::all();
        return view('mobile')->with('mobile',$mobile);
    }
    public function view_mct(){
        $telemarketing= TeleModel::all();
        return view('telemarketing')->with('telemarketing',$telemarketing);
    }

    // Utilitários
    public function view_content(){
        return view('conteudo');
    }
    public function view_notif(){
        return view('notificacoes');
    }

    public function view_colaborador(){
        return view('cad_colaborador');
    }

    // Contatos(Notificações)
    public function view_request(){
        $analise = db::table('requests')->where('status','Em analise')->get();
        $desenvolvidas = db::table('requests')->where('status','desenvolvida')->get();
        $pendentes = db::table('requests')->where('status','Pendente')->get();
        $descartadas = db::table('requests')->where('status','anulada')->get();
        $consulta = db::table('requests')->orderBy('status','DESC')->get();
            return view('request')->with(array(
                'analise' => $analise,
                'desenvolvidas' => $desenvolvidas,
                'pendentes' => $pendentes,
                'descartadas' => $descartadas,
                'requests' => $consulta
            ));
    }
    public function editar_form($id){
        $consulta = ContatoModel::all()->where('id',$id);
            return view('edit_notif')->with('requests',$consulta);
    }
    public function atualizar_form(Request $request, $id){
        $id = $request->input('id');
        $status = $request->input('status');
        $login = $request->input('login');
        $nome = $request->input('nome');
        $email = $request->input('email');
        $title = $request->input('title');
        $sistema = $request->input('sistema');
        $descricao = $request->input('descricao');
        
        $update = ContatoModel::find($id);
        $update->login = $login;
        $update->status = $status;
        $update->email = $email;
        $update->sistema= $sistema;
        $update->title = $title;
        $update->descricao = $descricao;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.contato')->with($sessao);
    }
    public function deletar_form($id){
        $del = ContatoModel::find($id);
        $del->delete();
        $sessao = session()->flash('sucesso', "Procedimento realizar com sucesso!");
        return redirect()->route('admin.contato')->with($sessao);
    }

    public function admin(){
        $admins = Admin::all()->where('email','!=','admin@npitecnologia.com.br');
            return view('auth.colaborador')->with('admins',$admins);
    }
    // Exclusão de Operador
    public function exclu_user($id){
        $user = User::find($id);
        $user->delete();
        $sessao = session()->flash('sucesso',"Operação realizada com sucesso!");
        return redirect()->route('admin.main')->with($sessao);
    }
}

    
