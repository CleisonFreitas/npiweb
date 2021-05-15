<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SavModel;
use App\Models\SistemasModel;

use App\Http\Requests\SavRequest;

use Illuminate\Support\Facades\DB;

class SavController extends Controller
{
    public function cadastrar(SavRequest $request){
        SavModel::create($request->all());
       	SistemasModel::create($request->all());

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
       	return redirect()->route('admin.veicular')->withInput()->with($sessao);
    }
    public function editar($id){
        $editar = db::table('veicular')
        ->where('id',$id)->get();
        $veicular = db::table('veicular')
        ->where('id',$id)->get();
        return view('veicular')->with('editar',$editar)->with('veicular',$veicular);
    }
    public function atualizar(SavRequest $request, $id){
        $id = $request->input('id');
        $title = $request->input('title');
        $menu = $request->input('menu');
        $iframe = $request->input('iframe');
        $login = $request->input('login');

        $update = SavModel::find($id);
        $update->menu = $menu;
        $update->title = $title;
        $update->iframe = $iframe;
        $update->login = $login;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.veicular')->withInput()->with($sessao);
    }
    public function deletar($token){
        $sav = db::table('veicular')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.veicular')->with($sessao)->withInput();
    }
}

