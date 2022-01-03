@extends('admin.blank')

@section('title','Colaborador')

@section('admin','- Colaboradores')

@section('content')

<!-- Conteúdo -->
<div class="card shadow mb-3">
    <div class="card-body">
        <h1 class="h3 mb-4 text-gray-600">Colaboradores</h1>
        <p class="text-lg-start">
            Diferente do cadastro de usuários do sistema para acesso ao conteúdo do NPI Academy, o cadastro dos colaboradores do módulo 
            "Admin" é restrito por acesso interno, ou seja, só pode ser realizado através da permissão de outro colaborador que já opera 
            o sistema. Uma vez cadastrado, o novo colaborador tem total liberdade para realizar a alteração de sua senha e cadastrar novos colaboradores. Entre suas atribuições está a 
            possibilidade de inativar o acesso dos clientes ao "NPI Web Academy", para revogação de permissão da conta de usuário 
            ao conteúdo, assim como inativação e exclusão de um colaborador eventualmente desligado. Cada colaborador tem total permissão 
            para inserir,editar e excluir conteúdo referente a qualquer um dos sistemas. Após a alteração, o sistema irá registrar o nome 
            do colaborador que alterou por último. Assista ao video de demonstração, clicando no botão abaixo:
        
        <!-- Modal Demonstração de Cadastro do Colaborador-->
        <div class="row">
            <div class="col">               
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#colaborador">
                    Assistir
                </button><br>
            </div>
        </div>
            <div class="modal fade" id="colaborador" tabindex="-1" aria-labelledby="colaborador" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="colaborador">Cadastro de Colaborador</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FWYFErMYLdw" 
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                              </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#Modal --></p><br>
    
    <h1 class="h3 mb-4 text-gray-600">Operadores</h1>
        <p class="text-lg-start">
            Os operadores(usuários cadastros como clientes), tem permissão de visualizar o conteúdo de todos os sistemas atualmente 
            cadastrados, porém não possuem qualquer permissão para realizar alteração no conteúdo. Para reportar alguma falha no 
            conteúdo ou caso queira informar uma dúvida, deve-se utilizar o formulário de contato. Essa solicitação será cadastrada 
            como "Pendente" e estará disponível a todo técnico para que possa realizar o acompanhamento.</p>
           <div class="row">
                <div class="col">
                    Mais detalhes sobre a controle de notificações, 
                    <a href="{{ route('admin.notificacoes') }}" class="stretched-link">clique aqui!</a>
                </div>
            </div><br>
            <!--
            !-- /#Modal -->
        </div>
    </div>
        <!-- /#Conteúdo -->

    

@endsection