@extends('admin.blank')

@section('title','home')

@section('admin')

@section('content')


<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
<!-- Usuários Cadastrados -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                            Usuários Cadastrados</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($users)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-check-fill fa-2x text-gray-300"></i>
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
                            Biblioteca</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sistemas}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-film fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- #/Vídeos do Sistema -->
     <!-- Notificações -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                           Notificações</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$requests}}</div>
                       </div>
                       <div class="col-auto">
                            <i class="bi bi-chat-fill fa-2x text-gray-300"></i>
                       </div>
                </div>
            </div>
        </div>
    </div>
     <!-- #/Notificações -->
     <!-- Operadores -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Colaboradores
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$admins}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-person-fill fa-2x text-gray-300"></i>    
                        </div>    
                        </div>
                    </div>
                </div>
            </div>
     <!-- #/Operadores -->
        </div>

<!-- Tabela de usuários -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Usuários Cadastrados</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data Cadastro</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ date('d/m/Y', strtotime($user->created_at))}}</td>
                                <td>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#del{{$user->id}}"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            <!-- Modal de Exclusão -->
                            <div class="modal fade" id="del{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$user->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="#del{{$user->id}}">{{$user->id}}-{{$user->name}}</h5>
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
                                                    </svg>&nbsp;Deseja realmente excluir esse usuário?
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                        <a href="#" class="btn btn-danger">Sim</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#Exclusão -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<!-- #/Tabela de usuários -->
 

@endsection