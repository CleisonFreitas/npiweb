@extends('layouts.blank')
<!-- Título -->
@section('title','- Mutare')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Mobile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Mutare</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Mutare tem como foco simplificar o processo de cobrança porta-a-porta. 
                A cobrança gerada é enviada diretamente para o smartphone e a baixa de 
                pagamento de cada cliente pode ser realizada através do App e depois 
                transferida em lote para o sistema.
            </div>
        </div>
        <!-- Tabela Mobile-->
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Formação Sistema Mutare
            </div>
            @include('class.formacao_content')
        </div>
        <!-- #Tabela-->

        <!-- #Tabela-->

@endsection