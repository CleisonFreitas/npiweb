@extends('admin.blank')

@section('title','Laboratório')

@section('admin','- Laboratório')

@section('content')

<!-- Conteúdo -->    
    <h1 class="h3 mb-4 text-gray-600">Laboratório</h1>


    <!-- Espelho para edição de formação -->
    @foreach($laboratorio as $lab)
        <div class="row">
            <div class="col-4 col-md-2 mb-1">
                <input type="text" name="codigo" id="codigo" value="{{$lab->id}}" class="form-control" placeholder="Código" readonly>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-10 col-sm-8 col-lg-8">
                <select class="custom-select" name="formacoes" id="laboratorio" readonly>
                    <option value="{{$lab->id}}">{{$lab->descricao}}</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-info" disabled>
                    <i class="bi bi-pencil-square"></i>&nbsp;Editar
                </button>
            </div> 
        </div>

        <!-- Criação de Novo Curso para Laboratório -->
        <div class="row">
            <div class="col-3 col-sm-1 col-lg-1">
                <a href="{{ route('admin.laboratorio')}}" class="btn btn-dark">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
            <div class="col-8 col-sm-4 col-lg-4">
                <button class="btn btn-primary" data-toggle="modal" data-target="#lab" disabled>
                    <i class="bi bi-plus-circle"></i></i>&nbsp;Criar
                </button>
            </div>
        </div>
        <!-- Modal para Cadastrar Curso -->
        <div class="modal fade" id="lab" tabindex="-1" aria-labelledby="lab" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-below-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lab">Criação de conteúdo</h5>
                    </div>
                    <form action="{{ route('admin.lab_novo')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="nome" class="col-2 col-sm-2 col-form-label">Nome:</label>
                                <div class="col-10 col-sm-10">
                                    <input type="text" name="descricao" id="curso" class="form-control" autofocus="focus">
                                    <input type="hidden" value="{{Auth::guard('admin')->user()->name}}" name="login" id="login">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo" class="col-2 col-sm-2 col-form-label">Tipo:</label>
                            <div class="col-10 col-sm-6">
                                <select name="tipo" id="tipo" class="custom-select">
                                    <option value="1">Formação</option>
                                    <option value="2">Tópico</option>
                                </select>
                            </div>
                            <div class="col-2 col-sm-4">
                                <input type="text" name="ordem" id="ordem" class="form-control" placeholder="Ordem">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoria" class="col-2 col-sm-2 col-form-label">Categoria</label>
                            <div class="col-10 col-sm-6">
                                <select name="categoria" id="" class="custom-select">
                                    <option value="funerario">Funerário</option>
                                    <option value="cemiterio">Cemitério</option>
                                    <option value="clinica">Clínica</option>
                                    <option value="contabil">Contábil</option>
                                    <option value="emissor">E-Fiscal</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="veicular">Veicular</option>
                                    <option value="telemarketing">Telemarketing</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-2 col-sm-4">
                                <select name="nivel" id="nivel" class="custom-select">
                                    <option>Nível</option>
                                    <option value="normal">Normal</option>
                                    <option value="especifico">Específico</option>
                                    <option value="equipe">Equipe</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary">Gerar</button>&nbsp;
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- #Modal -->

        <div class="row g-4">
            <div class="col col-lg-7">
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-light">Conteúdo</h6>
                    </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Adicionar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sistemas as $s)
                                        <tr>
                                            <td>{{ $s->id }}</td>
                                            <td>{{ $s->descricao }}</td>
                                            <td>
                                                <a href="" data-toggle="modal" class=" btn btn-primary btn-cicle" data-target="#conteudo">
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>

                    <!-- Modal -->
                        <div class="modal fade" id="conteudo" tabindex="-1" aria-labelledby="conteudo" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="conteudo">Formação</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <select name="topico" id="topico" class="custom-select">
                                                        <option value="#"> # </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            <!-- #Modal de Conteúdo -->
@endsection