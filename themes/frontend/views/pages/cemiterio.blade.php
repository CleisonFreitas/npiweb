@extends('layouts.blank')
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
                Sistema de Gestão de Cemitérios
            </div>
            @include('class.formacao_content')
        </div>

        <!-- #Tabela-->
@endsection