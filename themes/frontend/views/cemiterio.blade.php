@extends('blank')
<!-- Título -->
@section('title','- Cemitério')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')


    <h1 class="mt-4">Sistema de Gerenciamento de Cemitério</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Gestão de Cemitérios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O Sistema de Gerenciamento de Cemitério, acompanhado pelo Sistema de Controle Contábil, 
                torna mais fácil a gestão não só da estrutura de jazigos e outros ativos do cemitério, como 
                também o controle de receitas e despesas da empresa.
            </div>
        </div>
        <!-- Tabela Cemitério-->
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Vídeos
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Menu</th>
                                <th>Título</th>
                                <th>Data de Criação</th>
                                <th>Conteúdo</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($cemiterio as $valor)
                            <tr>
                                <td>{{$valor->id}}</td>
                                <td>{{$valor->menu}}</td>
                                <td>{{$valor->title}}</td>
                                <td>{{date('d/m/Y', strtotime($valor->created_at))}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view_{{$valor->id}}">Assistir</button>
                                </td>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="view_{{$valor->id}}" tabindex="-1" role="dialog" aria-labelledby="view_{{$valor->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view_{{$valor->id}}">{{$valor->id}} - {{$valor->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="embed-responsive embed-responsive-4by3">
                                                    <iframe width="100%" height="480" src="{{$valor->iframe}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #Modal -->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- #Tabela-->
@endsection