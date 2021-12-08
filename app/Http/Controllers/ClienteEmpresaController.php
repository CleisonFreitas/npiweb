<?php

namespace App\Http\Controllers;

use App\Models\ClienteCNPJ;
use Illuminate\Http\Request;

class ClienteEmpresaController extends Controller
{
    
    public function index()
    {
        $empresa = ClienteCNPJ::all();

        return view('cliente_empresa',compact('empresa'));
    }

    
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

    public function show(ClienteCNPJ $clienteCNPJ)
    {
        //
    }

    public function edit(ClienteCNPJ $clienteCNPJ)
    {
        //
    }

    public function update(Request $request, ClienteCNPJ $clienteCNPJ)
    {
        //
    }

    public function destroy(ClienteCNPJ $clienteCNPJ)
    {
        //
    }
}
