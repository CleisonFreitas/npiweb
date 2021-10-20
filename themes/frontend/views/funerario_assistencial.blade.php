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
                         <!-- Accordion -->
                         <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header bg-light text-secondary shadow">
                                        <h5><i class="fas fa-film"></i>&nbsp;Conteúdo</h5>
                                </div>
                                <small> 
                                    <div class="card-header bg-gray-300 border-1" id="headon">
                                        <h2 class="mb-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-10 col-lg-11">
                                                    <a class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#etiqueta" aria-expanded="false" aria-controls="etiqueta" style="width:100%">
                                                        01 - Cadastros
                                                    </a>
                                                </div>
                                            </div>
                                        </h2>
                                        
                                    </div>
                                    
                                        <div id="etiqueta" class="collapse" aria-labelledby="headon" data-parent="#accordionExample">
                                            <div class="card-body bg-gray-300">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-lg-12 mb-1">
                                                        <a href="#" class="btn btn-secondary" style="width:90%;">
                                                            <i class="far fa-play-circle"></i>&nbsp; Pagamentos
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </small>
                            </div>
                          </div>
                    <!-- #Accordion -->
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