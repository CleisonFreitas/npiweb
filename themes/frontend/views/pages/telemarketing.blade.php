@extends('layouts.blank')
<!-- Título -->
@section('title','- Telemarketing')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Telemarketing</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Módulo de Controle Telemarketing</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    O Emissor Fiscal torna mais fácil e rápido a geração de notas fiscais dos 
                    produtos e serviços, e funciona de forma integrada com os demais sistemas oferecidos pela NPI.
                </div>
            </div>
            <!-- Tabela Telemarketing-->
            <div class="card mb-4">
                <div class="card-header border-0">
                    <i class="bi bi-camera-reels-fill"></i>
                    Formação Sistema de Controle Telemarketing
                </div>
                @include('class.formacao_content')
            </div>
            <!-- #Tabela-->

@endsection