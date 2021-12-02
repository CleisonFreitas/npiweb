@extends('layouts.blank')
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
        @include('class.formacao_content')
    </div>

                            <!-- #Tabela-->

@endsection