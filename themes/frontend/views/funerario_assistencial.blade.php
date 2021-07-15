@extends('blank')
<!-- Título -->
@section('title','- Assistencial')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Sistema de Controle Funerário</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Módulo Assistencial</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O Sistema de Controle Funerário(SCF) dividido em dois módulos, é utilizado para gerir todos 
                processos correntes da empresa, simplificando a administração do controle de caixa, gestão 
                de clientes da empresa e controle de estoque. O módulo assistencial(MA) é responsável pela 
                administração dos planos, repasse dos colaboradores através da cobrança gerada e fluxo de caixa da empresa.
            </div>
        </div>
        <!-- Tabela Assistencial-->
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Formação Modulo Assistencial
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <!-- Card da tabela -->
                        <div class="card border-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Cadastros</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($funerario as $valor)
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- #Card da tabela -->
                    </div>
                    <!-- Card do vídeo -->
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="420px" src="https://www.youtube.com/embed/b7UB4ZFifdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:5px;"></iframe>
                    </div>
                    <!-- #Card -->
                </div>
            </div>
        </div>
        <!-- #Tabela-->

@endsection