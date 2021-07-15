@extends('blank')
<!-- Título -->
@section('title','- Clínica')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
<h1 class="mt-4">Clínica</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Clínica</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Através do Clínica é possível gerir a agenda de atendimentos, 
            recebimentos e pagamentos dos pacientes, assim como todo o fluxo 
            de caixa de forma sintética e independente.
        </div>
    </div>
    <!-- Tabela Clinica -->
    <div class="card mb-4">
        <div class="card-header border-0">
            <i class="bi bi-camera-reels-fill"></i>
            Formação Clínica
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
                                @foreach ($clinica as $valor)
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
                <div class="card ratio ratio-16x9">
                    <iframe width="100%" height="420px;" src="https://www.youtube.com/embed/b7UB4ZFifdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:5px;"></iframe>
                </div>
                <!-- #Card -->
            </div>
        </div>
    </div>

                            <!-- #Tabela-->

@endsection