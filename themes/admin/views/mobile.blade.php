@extends('admin.blank')

@section('title','Mobile')

@section('admin','- Mobile')

@section('content')


<h1 class="h3 mb-4 text-gray-800">Mobile</h1>
<!-- Espelho de edição -->
@if (isset($editar))
    @foreach($editar as $f)
    <form action="{{route('admin.mob.updt',$f->id)}}" method="post">
        @csrf
    <div class="row">
        <input type="hidden" value="{{ $f->id }}" name="id" id="id">
        <input type="hidden" name="login" value="{{Auth::guard('admin')->user()->name}}"id="login">

        <div class="col-12 col-xl-3 mb-3">
            <select class="form-control" name="modulo" id="modulo" required>
                <option value="Mutare">Mutare</option>
            </select>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <input type="date" class="form-control" value="{{ date('Y-m-d') }}" name="dt-cadastro" id="dt-cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-3 mb-3">
            <input type="text" class="form-control" value="{{ $f->menu}}" name="menu" id="menu" placeholder="Descrição do menu!" required>
            @error('menu')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-12 col-xl-7 mb-3">
            <input type="text" class="form-control" value="{{ $f->title}}" name="title" id="titulo" placeholder="Título do vídeo" required>
            @error('title')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-10 mb-3">
            <input type="text" class="form-control" value="{{ $f->iframe}}" name="iframe" id="link" placeholder="Cole o link do vídeo aqui!" required>
            @error('iframe')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('admin.mobile')}}" class="btn btn-secondary" style="width:100px;">Novo</a>
            <button type="submit" class="btn btn-info">Gravar</button>
        </div>
    </div>
    </form>
    @endforeach
<!-- /#Espelho de edição -->
@else
<!-- Caso não tenha informação no GET() -->
<form action="{{route('admin.mob.cad')}}" method="post">
    @csrf
<div class="row">
        <!-- Token de armazenamento e descrição do sistema -->
            <input type="hidden" name="token" value="mob<?php echo MD5(rand(10,1000));?>" id="token">
            <input type="hidden" name="descricao" value="mobile" id="descricao">
            <input type="hidden" name="login" value="{{Auth::guard('admin')->user()->name}}"id="login">
        <!-- Token de armazenamento e descrição do sistema -->
        <div class="col-12 col-xl-3 mb-3">
            <select class="form-control" name="modulo" id="modulo" required>
                <option value="Mutare">Mutare</option>
            </select>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <input type="date" class="form-control" value="{{ date('Y-m-d') }}" name="dt-cadastro" id="dt-cadastro">
        </div>
</div>
<div class="row">
    <div class="col-12 col-xl-3 mb-3">
        <input type="text" class="form-control" value="{{ old('menu') }}" name="menu" id="menu" placeholder="Descrição do menu!" required>
        @error('menu')
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="col-12 col-xl-7 mb-3">
        <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="titulo" placeholder="Título do vídeo" required>
        @error('title')
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-10 mb-3">
        <input type="text" class="form-control" value="{{ old('iframe') }}" name="iframe" id="link" placeholder="Cole o link do vídeo aqui!" required>
        @error('iframe')
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-info">Gravar</button>
    </div>
</div>
</form>
@endif
<!-- Form de Cadastro -->

<!-- Listagem Mobile -->
<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Lista</h6>
    </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Módulo</th>
                            <th>Menu</th>
                            <th>Título</th>
                            <th>Data de Cadastro</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($mobile) !== null OR 0)
                            @foreach ($mobile as $valor)
                            <tr>
                                <td>{{$valor->login}}</td>
                                <td>{{$valor->modulo}}</td>
                                <td>{{$valor->menu}}</td>
                                <td>{{$valor->title}}</td>
                                <td>{{ date('d/m/Y H:m:s',strtotime($valor->created_at))}}</td>
                                <td>
                                    <a href="#" class="btn btn-circle btn-info" data-toggle="modal" data-target="#edit{{$valor->id}}"><i class="bi bi-info-circle-fill"></i></a>
                                    <a href="#" class="btn btn-circle btn-danger" data-toggle="modal" data-target="#del{{$valor->id}}"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="edit{{$valor->id}}" tabindex="-1" role="dialog" aria-labelledby="edit{{$valor->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$valor->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="{{$valor->iframe}}" 
                                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{route('admin.mob.edit',$valor->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- #Modal -->
                            <!-- Modal Del-->
                            <div class="modal fade" id="del{{$valor->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$valor->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$valor->id}}-{{$valor->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col col-md-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
                                                    <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" style="color:red;"/>
                                                </svg>&nbsp;Deseja realmente remover esse arquivo?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <a href="{{ route('admin.mob.del',$valor->token)}} " class="btn btn-danger">Sim</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- #Modal -->
                            @endforeach 
                        @endif
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- /#Listagem Mobile -->

@endsection