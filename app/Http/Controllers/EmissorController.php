<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EmissorRequest;

use Illuminate\Support\Facades\DB;

use App\Models\EmissorModel;
use App\Models\SistemasModel;


class EmissorController extends Controller
{
    public function cadastrar(EmissorRequest $request){
        EmissorModel::create($request->all(),$request->token = MD5($request->token));
        SistemasModel::create($request->all(),$request->token = MD5($request->token));

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.emissor')->with($sessao);
    }
    public function editar($id){
        $editar = db::table('emissor')
        ->where('id',$id)->get();
        $emissor = db::table('emissor')
        ->where('id',$id)->get();
        return view('emissor')->with('editar',$editar)->with('emissor',$emissor);
    }
    public function atualizar(EmissorRequest $request, $id){
        $id = $request->input('id');
        $title = $request->input('title');
        $menu = $request->input('menu');
        $iframe = $request->input('iframe');
        $login = $request->input('login');

        $update = EmissorModel::find($id);
        $update->menu = $menu;
        $update->title = $title;
        $update->iframe = $iframe;
        $update->login = $login;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.emissor')->withInput()->with($sessao);
    }
    public function deletar($token){
        $emissor = db::table('emissor')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.emissor')->with($sessao)->withInput();
    }
}
