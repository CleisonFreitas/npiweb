<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MobileRequest;

use Illuminate\Support\Facades\DB;

use App\Models\MobileModel;
use App\Models\SistemasModel;

class MobileController extends Controller
{
    public function cadastrar(MobileRequest $request){
        MobileModel::create($request->all());
       	SistemasModel::create($request->all());

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
       	return redirect()->route('admin.mobile')->with($sessao);
    }
    public function editar($id){
        $editar = db::table('mobile') 
        ->where('id',$id)->get();
        $mobile = db::table('mobile')
        ->where('id',$id)->get();
        return view('mobile')->with('editar',$editar)->with('mobile',$mobile);
    }
    public function atualizar(MobileRequest $request, $id){
        $id = $request->input('id');
        $menu = $request->input('menu');
        $titulo = $request->input('title');
        $banco = $request->input('banco');
        $modulo = $request->input('modulo');
        $link = $request->input('iframe');
        $login = $request->input('login');

        $update = MobileModel::find($id);
        $update->modulo = $modulo;
        $update->menu = $menu;
        $update->title = $titulo;
        $update->banco = $banco;
        $update->iframe = $link;
        $update->login = $login;
        $update->save();
        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.mobile')->with($sessao)->withInput();

    }
    public function deletar($token){
        $mobile = db::table('mobile')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.mobile')->with($sessao)->withInput();
    }
}
