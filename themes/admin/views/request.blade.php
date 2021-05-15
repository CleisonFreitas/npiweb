@extends('admin.blank')

@section('title','Notificações')

@section('admin','- Notificações')

@section('content')

<!-- Painel de visualização -->
<h1 class="h3 mb-4 text-gray-800">Notificações e Sugestões</h1>
    <div class="row">
        <!-- Usuários Cadastrados -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                           Em Análise</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($analise)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope-open fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/Usuários Cadastrados -->
    <!-- Vídeos do Sistema -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Desenvolvidas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($desenvolvidas)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- #/Vídeos do Sistema -->
     <!-- Operadores -->
     <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pendentes
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($pendentes)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>    
                    </div>    
                    </div>
                </div>
            </div>
        </div>
 <!-- #/Operadores -->
     <!-- Notificações -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                           Anuladas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($descartadas)}}</div>
                       </div>
                       <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i>
                       </div>
                </div>
            </div>
        </div>
    </div>
     <!-- #/Notificações -->
        </div>
    <!-- /#Espelho para edição -->

    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Notificações</h6>
        </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>Autor</th>
                                <th>Email</th>
                                <th>Título</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $r)
                                <tr>
                                    <td>{{$r->login}}</td>
                                    <td>{{$r->nome}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>{{$r->title}}</td>
                                    <td>{{$r->status}}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('admin.contato.edit',$r->id) }}"class="btn btn-md"><i class="fas fa-edit text-gray-800"></i></a>
                                            <a href="#" class="btn btn-md" data-toggle="modal" data-target="#del{{$r->id}}"><i class="fas fa-trash text-gray-800"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Del-->
                                <div class="modal fade" id="del{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$r->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="del{{$r->id}}">{{$r->id}}-{{$r->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col col-md-10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
                                                            <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" style="color:red;"/>
                                                        </svg>&nbsp;Deseja realmente remover esse arquivo?
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                            <a href="{{ route('admin.contato.del',$r->id)}}" class="btn btn-danger">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /#Modal Del -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection