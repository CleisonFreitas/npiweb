@extends('layouts.blank')
<!-- Título -->
@section('title','- Emissor')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Emissor Fiscal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Emissor de Nota Fiscal Eletrônica</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    O Emissor Fiscal torna mais fácil e rápido a geração de notas fiscais dos 
                    produtos e serviços, e funciona de forma integrada com os demais sistemas oferecidos pela NPI.
                </div>
            </div>
            @if (isset($conteudo) && ($conteudo)->count())
            <div class="card mb-4">
                <div class="card-header border-0">
                    <i class="bi bi-camera-reels-fill"></i>
                    Sistema de Emissor Fiscal
                </div>
                    @include('class.formacao_content')
            </div>
            @elseif(isset($select_content) && ($select_content)->count())
                @yield('emissor')
            @else
            <div class="card mb-4">
                <div class="card-body">
                    <h5 style="text-align: center;"><b>Conteúdo indisponível no momento</b></h5>
                </div> 
            </div>
            @endif

@endsection