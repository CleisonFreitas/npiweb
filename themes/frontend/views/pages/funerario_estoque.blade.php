@extends('layouts.blank')
<!-- Título -->
@section('title','- Estoque')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
    <h1 class="mt-4">Sistemas de Controle Funerário</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Modulo Estoque</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O Sistema de Controle Funerário(SCF) dividido em dois módulos, é utilizado para gerir todos 
                processos correntes da empresa, simplificando a administração do controle de caixa e gestão 
                de clientes da empresa. O módulo estoque(ME) é responsável pela administração de todo material 
                fúnebre. Entrada e saída de produtos,  assim como gerenciamento dos fornecedores, são algumas 
                das atribuições desse módulo. 
            </div>
        </div>
        <!-- Tabela Estoque-->
        <div class="card mb-4">
            <div class="card-header border-0">
                <i class="bi bi-camera-reels-fill"></i>
                Formação Modulo Estoque
            </div>
            @include('class.formacao_content')
        </div>
        <!-- #Tabela-->

@endsection