@extends('admin.blank')

@section('title','Notificações')

@section('admin','- Notificações')

@section('content')
<!-- Espelho para edição -->
@foreach ($requests as $r)
<form action="{{route('admin.contato.updt',$r->id)}}" method="POST">
    @csrf
    <div class="row">
        <input type="hidden" value="{{ $r->id }}" name="id" id="id">
        <input type="hidden" name="login" value="{{Auth::guard('admin')->user()->name}}" id="login">
        <div class="col-8 col-md-3">
            <input type="date" value="{{ date('Y-m-d', strtotime($r->created_at)) }}" class="form-control" name="date" id="date" ><br>
        </div>
        <div class="col-12 col-md-3">
            <select class="form-control" name="status" id="status">
                <option value="{{$r->status}}">{{$r->status}}</option>
                <option value="Em análise">Em análise</option>
                <option value="Desenvolvida">Desenvolvida</option>
                <option value="Anulada">Descartar</option>
                <option value="Pendente">Pendente</option>
            </select>
        </div>
    </div>
    <div class="row">
            <div class="col-12 col-md-5">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control bg-white" value="{{$r->nome}}" name="nome" id="nome" readonly>
            </div>
            <div class="col-12 col-md-5">
                <label for="email">E-mail: </label>
                <input type="text" class="form-control bg-white" value="{{$r->email}}" name="email" id="email" readonly>
            </div>
    </div>
    <div class="row">
            <div class="col-12 col-md-10">
                <label for="sistema">Sistema: </label>
                <input type="text" class="form-control bg-white" value="{{$r->sistema}}" name="sistema" id="sistema" readonly>
            </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10">
            <label for="sistema">Assunto: </label>
            <input type="text" class="form-control bg-white" value="{{$r->title}}" name="title" id="title" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <label for="telefone">Telefone: </label>
            <input type="text" class="form-control bg-white" value="{{$r->telefone}}" name="telefone" id="telefone" readonly>
        </div>
        <div class="col-12 col-md-4">
            <label for="whatsapp">WhatsApp: </label>
            <input type="text" class="form-control bg-white" value="{{$r->whatsapp}}" name="whatsapp" id="whatsapp" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10">
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" class="form-control"  id="descricao" cols="10" rows="8" >{{$r->descricao}}</textarea><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href={{route('admin.contato')}} class="btn btn-secondary">Voltar</a>&nbsp;
            <button type="submit" class="btn btn-primary ">Gravar</button>
        </div>
    </div>
</form>
@endforeach

@endsection