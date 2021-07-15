@extends('blank')
<!-- Título -->
@section('title','- Contábil')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
<h1 class="mt-4">Sistema de Controle Contábil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Contábil</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O Sistema de Controle Contábil é utilizado para centralizar o fluxo de contas da empresa, 
                não só integrado aos sistemas do segmento fúnebre, mas também pode ser utilizado de forma 
                independente para outros segmentos.
            </div>
        </div>
        <!-- Tabela Contábil-->
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Formação Sistema de Controle Contábil
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2 g-2">
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
                                    @foreach ($contabil as $valor)
                                        <tr>                               
                                            <td>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#view_{{$valor->id}}" style="width:100%; text-align:left;"><i class="bi bi-play-circle-fill"></i>&nbsp;{{$valor->title}}</button>
                                            </td>
                                        
                                            <!-- Modal --
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
                                            !-- #Modal -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- #Card da tabela -->
                    </div>

                    <!-- Card do vídeo -->
                    <div class="card ratio ratio-16x9">
                        <iframe width="100%" height="420px;" src="https://www.youtube.com/embed/b7UB4ZFifdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:5px;"></iframe>
                    </div>
                    <!-- #Card -->
                </div>
            </div>
        </div>
        <!-- #Tabela-->

@endsection