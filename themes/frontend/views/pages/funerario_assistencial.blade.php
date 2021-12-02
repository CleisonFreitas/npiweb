@extends('layouts.blank')
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
            @include('class.formacao_content')
        </div>
        <!-- #Tabela-->

@endsection