<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\CemiterioRequest;

use App\Models\CemiterioModel;

use App\Models\SistemasModel;


class CemiterioController extends Controller
{
        public function cadastrar(CemiterioRequest $request){
            CemiterioModel::create($request->all());
            SistemasModel::create($request->all());
    
             $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
            return redirect()->route('admin.cemiterio')->with($sessao);
        }
        public function editar($id){
            $editar = db::table('cemiterio')
            ->where('id',$id)->get();
            $cemiterio = db::table('cemiterio')
            ->where('id',$id)->get();
            return view('cemiterio')->with('editar',$editar)->with('cemiterio',$cemiterio);
        }
        public function atualizar(CemiterioRequest $request, $id){
            $id = $request->input('id');
            $title = $request->input('title');
            $menu = $request->input('menu');
            $iframe = $request->input('iframe');
    
            $update = CemiterioModel::find($id);
            $update->menu = $menu;
            $update->title = $title;
            $update->iframe = $iframe;
            $update->save();
            $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
            return redirect()->route('admin.cemiterio')->withInput()->with($sessao);
        }
        public function deletar($token){
            $cemiterio = db::table('cemiterio')->where('token','=',$token)->delete();
            $sistema = db::table('sistemas')->where('token','=',$token)->delete();
    
            $sessao = session()->flash('sucesso',"procedimento realizado com sucesso!");
            return redirect()->route('admin.cemiterio')->with($sessao)->withInput();
        }
    }