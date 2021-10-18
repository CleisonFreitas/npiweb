@extends('admin.blank')

@section('title','Colaboradores')

@section('admin','- Alteração de dados Colaborador')

@section('content')

<!-- Conteúdo -->
@foreach ($admins as $admin)
    <h1 class="h3 mb-4 text-gray-600">Alterar informações do colaborador</h1>
        <form method="POST" action="{{ route('admin.atualizar', $admin->id)}}" >
            @csrf
            <div class="row">
                <div class="col-10 col-md-3">
                    <input type="date" class="form-control" value="{{date('Y-m-d',strtotime($admin->created_at))}}" name="" id=""><br>
                </div>
                <div class="col-10 col-md-3">
                    <select class="form-control" name="status" id="">
                        @if ($admin->status === 'Ativo')
                            <option value="Ativo"Selected>Ativo</option>
                            <option value="Inativo">Inativo</option>
                        @else
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo"Selected>Inativo</option>
                        @endif 
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-10 col-md-5">
                    <label for="usuario">Usuário: </label>
                    <input type="text" class="form-control" value="{{$admin->name}}" name="name" id="">
                </div>
                <div class="col-10 col-md-5">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" value="{{$admin->email}}" name="email" id="" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-md-5">
                    <label for="senha">Senha: </label>
                    <input type="password" class="form-control"  name="password" id="" placeholder="************" required>
                </div>
                <div class="col-10 col-md-5">
                    <label for="confirmar">Confirmar Senha: </label>
                    <input type="password" class="form-control" name="password_confirmation" id="" placeholder="************" required>
                </div>
            </div>
            <!-- Profile Avatar -->
            <div class="row mt-4">
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" value="undraw_profile_2.svg" type="radio" name="profile" id="profile">
                        <img class="img-fluid" src="/img/undraw_profile_2.svg" style="width:40px;">
                  </div>
                </div>
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="undraw_profile_3.svg" name="profile" id="profile">
                        <img class="img-fluid" src="/img/undraw_profile_3.svg" style="width:40px;">
                    </div>
                </div>
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="undraw_profile_new.svg" name="profile" id="profile" >
                        <img class="img-fluid" src="/img/undraw_profile_new.svg" style="width:40px;">
                    </div>
                </div>
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="undraw_profile_1.svg" name="profile" id="profile">
                        <img class="img-fluid" src="/img/undraw_profile_1.svg" style="width:40px;">
                    </div>
                </div>
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="black_man.png" name="profile" id="profile">
                        <img class="img-fluid" src="/img/black_man.png" style="width:42px;">
                    </div>
                </div>
                <div class="col col-sm-1">
                    <label for="" style="width:100px;"></label>
                </div>
                <div class="col col-sm-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="{{$admin->profile}}" name="profile" id="profile" checked>
                        <img class="img-fluid" src="/img/{{$admin->profile}}" style="width:40px;">Atual
                    </div>
                </div>
        </div>
            
            <!-- #Profile Avatar -->
            <div class="row my-2">
                <div class="col-10">
                    <button type="submit" class="btn btn-sm btn-secondary">Atualizar</button>
                    <input type="text" name="login" value="{{Auth::guard('admin')->user()->name}}" id="" class="form-control">
                </div>
            </div>
        </form>
@endforeach

        <!-- Listagem Usuários -->
        <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Colaboradores</h6>
            </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Email</th>
                                    <th>Data início</th>
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{date('d/m/Y', strtotime($admin->created_at))}}</td>
                                    <td>{{$admin->status}}</td>
                                    <td>
                                        <a href="{{route('admin.editar',$admin->id)}}" class="btn btn-circle btn-info"><i class="bi bi-info-circle-fill"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#del{{$admin->id}}" class="btn btn-circle btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr> 
                                <!-- Modal Del-->
                                <div class="modal fade" id="del{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="del{{$admin->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$admin->id}}-{{$admin->name}}</h5>
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
                                                <a href="{{ route('admin.deletar',$admin->id)}} " class="btn btn-danger">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- #Modal -->
                                @endforeach
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- Fim da Listagem -->

@endsection