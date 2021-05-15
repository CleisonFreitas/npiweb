@extends('main')
<!-- Título -->
@section('title','edit_contato')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')

<nav class="navbar navbar-expand-lg navbar-primary bg-light">
    <h3><code>Contato</code></h3>
  </nav>
<div class="container">
    <!-- Centro -->
    <form  class="was-validated" method="POST" action="{{action('ContatoController@save_contato')}}"> 
        @csrf
        <div class="row"> 
     
            <div class="col-10 col-md-4">
                <label for="exampleDataList" class="form-label">Sistema: </label>
                    <input class="form-control is-invalid" value="{{$requests->sistema}}" name="sistema" list="datalistOptions" id="exampleDataList" placeholder="Clique para Procurar..." required>
                        <datalist id="datalistOptions">
                            <option value="Sistema de Controle Funerario">
                            <option value="Sistema de Gerenciamento de Cemitério">
                            <option value="Emissor Fiscal">
                            <option value="Telemarketing">
                            <option value="Clinica">
                            <option value="Mutare">
                    </datalist>
                </div>
            <div class="col-8 col-md-3">
                <label for="dt-solicitacao">Data: </label>
                <input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" name="dt-solicitacao" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">    
                <label for="title">Assunto: </label>
                    <input type="text" class="form-control" value="{{$requests->title}}" name="title" id="title" aria-describedby="button-addon1" required>
                </div>
        </div>
        <div class="row">         
            <div class="col-10 col-sm-5">
                <label for="Nome">Nome: </label>
                    <input type="text" class="form-control is-invalid" value="{{$requests->nome}}" name="nome" id="nome" required>
            </div>
        </div>
        <div class="row"> 
            <div class="col-10 col-sm-5"> 
            <label for="email" >Email: </label>
                <input type="text" class="form-control is-invalid" value="{{$requests->email}}" name="email" id="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-10 col-sm-5">
            <label for="descricao" >Descrição: </label>
                <textarea rows="5" class="form-control is-invalid" value="{{$requests->descricao}}" name="descricao" id="descricao" required></textarea>
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn  btn-info">Enviar</button>
            </div>
        </div>      
    </form>
</div>
        <!-- /#Centro -->
@endsection