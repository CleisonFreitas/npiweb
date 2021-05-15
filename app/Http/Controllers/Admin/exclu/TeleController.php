<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeleModel;
use App\Models\SistemasModel;

use App\Http\Requests\TeleRequest;

use Illuminate\Support\Facades\DB;

class TeleController extends Controller
{
    public function cadastrar(TeleRequest $request){
        TeleModel::create($request->all());
        SistemasModel::create($request->all());

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
       	return redirect()->route('admin.call_center')->with($sessao);
    }
    public function editar($id){
        $editar = db::table('telemarketing')
        ->where('id',$id)->get();
        $telemarketing = db::table('telemarketing')
        ->where('id',$id)->get();
        return view('admin.call_center')->with('editar',$editar)->with('telemarketing',$telemarketing);
    }
    public function atualizar(TeleRequest $request, $id){
        $id = $request->input('id');
        $title = $request->input('title');
        $menu = $request->input('menu');
        $iframe = $request->input('iframe');

        $update = TeleModel::find($id);
        $update->menu = $menu;
        $update->title = $title;
        $update->iframe = $iframe;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.call_center')->withInput()->with($sessao);
    }
    public function deletar($token){
        $call = db::table('telemarketing')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.call_center')->with($sessao)->withInput();

    }
}
