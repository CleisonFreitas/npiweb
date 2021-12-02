@extends('layouts.blank')
<!-- Título -->
@section('title','- Veicular')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Sistema Veicular</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Sistema Veicular</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    O Emissor Fiscal torna mais fácil e rápido a geração de notas fiscais dos 
                    produtos e serviços, e funciona de forma integrada com os demais sistemas oferecidos pela NPI.
                </div>
            </div>
            <!-- Tabela Veicular-->
            <div class="card mb-4">
                <div class="card-header border-0">
                    <i class="bi bi-camera-reels-fill"></i>
                    Formação Sistema Veicular
                </div>
                @include('class.formacao_content')
            </div>
            <!-- #Tabela-->

@endsection