@extends('layouts.blank')
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
        @if (isset($conteudo) && ($conteudo)->count())
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Sistema de Gestão Contábil
            </div>
                @include('class.formacao_content')
        </div>
        @elseif(isset($select_content) && ($select_content)->count())
            @yield('contabil')
        @else
        <div class="card mb-4">
            <div class="card-body">
                <h5 style="text-align: center;"><b>Conteúdo indisponível no momento</b></h5>
            </div> 
        </div>
        @endif

@endsection