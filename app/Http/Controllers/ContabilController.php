<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContabilRequest;

use App\Models\ContabilModel;
use App\Models\SistemasModel;

use Illuminate\Support\Facades\DB;

class ContabilController extends Controller
{
    public function cadastrar(ContabilRequest $request){
        ContabilModel::create($request->all());
        SistemasModel::create($request->all());
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.contabil')->with($sessao);
    }
    public function editar($id){
        $editar = db::table('contabil')
        ->where('id',$id)->get();
        $contabil = db::table('contabil')
        ->where('id',$id)->get();
        return view('contabil')->with('editar',$editar)->with('contabil',$contabil);
    }
    public function atualizar(ContabilRequest $request, $id){
        $id = $request->input('id');
        $title = $request->input('title');
        $menu = $request->input('menu');
        $iframe = $request->input('iframe');
        $login = $request->input('login');

        $update = ContabilModel::find($id);
        $update->menu = $menu;
        $update->title = $title;
        $update->iframe = $iframe;
        $update->login = $login;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.contabil')->withInput()->with($sessao);
    }
    public function deletar($token){
        $contabil = db::table('contabil')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.contabil')->with($sessao)->withInput();
    }
}
