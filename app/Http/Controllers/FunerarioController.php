<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\FunerarioModel;
use App\Models\SistemasModel;

use App\Http\Requests\FuneralRequest;

class FunerarioController extends Controller
{
    public function cadastrar(FuneralRequest $request){
        FunerarioModel::create($request->all(),$request->token = MD5($request->token));
        SistemasModel::create($request->all(),$request->token = MD5($request->token));
        
        $request->session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.funerario'); 
    }
    public function editar($id){
        $editar = db::table('funerario') 
        ->where('id',$id)->get();
        $funerario = db::table('funerario')
        ->where('id',$id)->get();
        return view('funerario')->with('editar',$editar)->with('funerario',$funerario);
    }
    public function atualizar(FuneralRequest $request, $id){
        $id = $request->input('id');
        $modulo = $request->input('modulo');
        $menu = $request->input('menu');
        $titulo = $request->input('title');
        $link = $request->input('iframe');
        $login = $request->input('login');

        $update = FunerarioModel::find($id);
        $update->modulo = $modulo;
        $update->menu = $menu;
        $update->title = $titulo;
        $update->iframe = $link;
        $update->login = $login;
        $update->save();
        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.funerario')->with($sessao)->withInput();

    }// Procedimento de exclusão acontece em cima do token
    public function deletar($token){
        $funerario = db::table('funerario')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.funerario')->with($sessao)->withInput();

    }
}



