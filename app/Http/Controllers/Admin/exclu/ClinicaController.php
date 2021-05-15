<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClinicaModel;
use App\Models\SistemasModel;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\ClinicaRequest;

class ClinicaController extends Controller
{
    public function cadastrar(ClinicaRequest $request){
        ClinicaModel::create($request->all());
        SistemasModel::create($request->all());

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.clinica')->with($sessao);
    }
    public function editar($id){
        $editar = db::table('clinica')
        ->where('id',$id)->get();
        $clinica = db::table('clinica')
        ->where('id',$id)->get();
        return view('admin.clinica')->with('editar',$editar)->with('clinica',$clinica);
    }
    public function atualizar(ClinicaRequest $request, $id){
        $id = $request->input('id');
        $title = $request->input('title');
        $menu = $request->input('menu');
        $iframe = $request->input('iframe');

        $update = ClinicaModel::find($id);
        $update->menu = $menu;
        $update->title = $title;
        $update->iframe = $iframe;
        $update->save();
        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.clinica')->withInput()->with($sessao);
    }
    public function deletar($token){
        $clinica = db::table('clinica')->where('token','=',$token)->delete();
        $sistema = db::table('sistemas')->where('token','=',$token)->delete();

        $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
        return redirect()->route('admin.clinica')->with($sessao)->withInput();
    }
}