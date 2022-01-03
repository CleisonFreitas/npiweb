@extends('layouts.blank')
<!-- Título -->
@section('title','- Contato')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
<h1 class="mt-4">Contato</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Formulário de Contato</li>
    </ol>
<form  class="bg-white mt-2" method="POST" action="{{ route('contato_save') }}"> 
            @csrf
        <div class="row">
            <div class="col-11 col-md-4">
                <label for="exampleDataList" class="form-label">Sistema: </label>
                    <input class="form-control" value="" name="sistema" list="datalistOptions" id="exampleDataList" placeholder="Clique para escolher..." required>
                        <datalist id="datalistOptions">
                            <option value="Funerário">
                            <option value="Cemitério">
                            <option value="Clínica">
                            <option value="Contábil">
                            <option value="Emissor">
                            <option value="Mobile">
                            <option value="Veicular">
                            <option value="Telemarketing">
                </datalist>
                @error('sistema')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-11 col-sm-3">
                <label for="dt-solicitacao">Data: </label>
                <input type="date" value="{{ date('Y-m-d')}}" class="form-control" name="dt-solicitacao" id="" disable><br>
            </div>
            
        </div>
        <div class="row">
            <div class="col-11 col-md-6">    
                <label for="title">Assunto: </label>
                    <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="title" placeholder="Ex: Vídeos do Emissor não estão funcionando" aria-describedby="button-addon1" required>
                    @error('title')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-11 col-md-5">
                <label for="Nome">Nome Completo: </label>
                    <input type="text" class="form-control" value="{{Auth::user()->name}}" name="nome" id="nome" readonly>
                    @error('nome')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
            </div>
            <div class="col-11 col-md-6"> 
            <label for="email" >Email: </label>
                <input type="email" class="form-control" value="{{Auth::user()->email}}" name="email" id="email" readonly>
                @error('email')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-11 col-md-3">
                <label for="Nome">Telefone/Celular(Opcional): </label>
                <input type="text" class="form-control" value="{{ old('telefone') }}" name="telefone" pattern="[0-9]{14-15}" id="txtFone" maxlength="15" onkeyup="mask_fone();" required>
            </div>
            <div class="col-11 col-md-3"> 
            <label for="email" >WhatsApp(Opcional): </label>
                <input type="text" class="form-control" value="{{ old('whatsapp') }}" name="whatsapp" id="txtFone2" maxlength="15" onkeyup="mask_fone2();">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-11 col-md-11">
            <label for="descricao" >Descrição: </label>
                <textarea rows="7" class="form-control" value="" name="descricao" id="descricao" data-ls-module="charCounter" maxlength="255" required>{{ old('descricao') }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-sm-10">
                @error('descricao')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div><br>
        <div class="row">
            <div class="col-11">
                <button type="submit" class="btn  btn-info">Enviar</button>
            </div>
        </div> 
        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
              <div class="toast-body">
                Hello, world! This is a toast message.
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>     
    </form>

@endsection