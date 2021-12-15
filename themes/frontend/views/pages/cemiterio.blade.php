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
        @if (isset($conteudo) && ($conteudo)->count())
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Sistema de Gestão de Cemitérios
            </div>
                @include('class.formacao_content')
        </div>
        @elseif(isset($select_content) && ($select_content)->count())
            @yield('cemiterio')
        @else
        <div class="card mb-4">
            <div class="card-body">
                <h5 style="text-align: center;"><b>Conteúdo indisponível no momento</b></h5>
            </div> 
        </div>
        @endif
@endsection