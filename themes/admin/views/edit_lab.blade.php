@extends('admin.blank')

@section('title','Laboratório')

@section('admin','- Laboratório')

@section('content')

<!-- Conteúdo -->    
    <h1 class="h3 mb-4 text-gray-600">Laboratório</h1>


    <!-- Espelho para edição de formação -->
    @foreach($formacoes as $f)
        <div class="row">
            <div class="col-4 col-sm-3 col-lg-2">
                <input type="text" name="codigo" id="codigo" value="{{$f->id}}" class="form-control"  readonly style="background-color:white;">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-10 col-sm-8 col-lg-8">
                <select class="custom-select" name="formacoes" id="laboratorio">
                    <option value="{{$f->id}}">{{$f->descricao}}</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-info" disabled>
                    <i class="bi bi-pencil-square"></i>&nbsp;Editar
                </button>
            </div> 
        </div>

        <div class="row g-4">
            <div class="col col-lg-7">
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3 bg-secondary">
                        <h6 class="m-0 font-weight-bold text-light">Conteúdo</h6>
                    </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Adicionar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sistemas as $sistemas)
                                            <tr>
                                                <td>{{ $sistemas->id }}</td>
                                                <td>{{ $sistemas->titulo }}</td>
                                                <td>
                                                    <a href="" data-toggle="modal" class=" btn btn-primary btn-cicle" data-target="#s{{$sistemas->id}}">
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
                    <div class="modal fade" id="s{{$sistemas->id}}" tabindex="-1" aria-labelledby="s{{$sistemas->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="s{{$sistemas->id}}">Formação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col col-sm col-lg-8">
                                                <select name="indice" id="indice" class="custom-select">
                                                    @foreach ($indices as $i)
                                                        <option value="{{$i->id}}"> {{$i->nome}} </option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col col-sm col-lg-4">
                                                <input type="text" name="ordem" id="ordem" class="form-control" placeholder="ordem">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Gravar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            <!-- #Modal de Conteúdo -->
@endsection