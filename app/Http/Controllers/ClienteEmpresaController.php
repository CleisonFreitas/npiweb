<?php

namespace App\Http\Controllers;

use App\Models\ClienteCNPJ;
//use Illuminate\Http\Request;
use App\Http\requests\ClienteEmpresaRequest;

use Illuminate\Support\Str;

class ClienteEmpresaController extends Controller
{
    
    public function index()
    {
        $empresa = ClienteCNPJ::all();

        return view('cliente_empresa',compact('empresa'));
    }
 
    public function store(ClienteEmpresaRequest $request)
    {
        $empresa = $request->all();
        $empresa['cnpj'] = Str::remove([' ','-','/','.'],$request->cnpj);

        ClienteCNPJ::create($empresa);
       
        return redirect()->route('admin.empresa')->with([toast()->success('Cadastrado com sucesso!')]);
    }

    public function show(ClienteCNPJ $clienteCNPJ)
    {
        //
    }

    public function edit($id)
    {
        $cliente = ClienteCNPJ::find($id);
        $empresa = ClienteCNPJ::all();
    //    dd($cliente);
        return view('edit_cliente_empresa',compact('cliente','empresa'));
    }

    public function update(ClienteEmpresaRequest $request, $id)
    {
        $empresa = ClienteCNPJ::findOrfail($id);
        $empresa->update($request->all());

        return redirect()->back()->with([toast()->success('Cadastrado atualizado com sucesso!')]);

    }

    public function destroy($id)
    {
        try{
            $empresa = ClienteCNPJ::findOrfail($id);
            $empresa->delete();

        }catch(Exception $e){
            return redirect()->back()->with([toast()->error($e->getMessage())]);
        }
        
        return redirect()->back()->with([toast()->success('Cadastrado atualizado com sucesso!')]);
    }
}
