@extends('admin.blank')

@section('title','Clientes')

@section('admin','- Cadastro de Clientes')

@section('content')


<h1 class="h3 mb-4 text-gray-800">Cadastrar CNPJ</h1>

<div class="card shadow mt-2">

    <div class="card-header">
        <h5>Informações do cliente</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.empresa.cad')}}" method="post">
            @csrf
            @include('forms.cliente_cnpj')
        </form>
    </div>
</div>

@include('lists.empresa_list')

@endsection
