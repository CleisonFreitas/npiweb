@extends('admin.blank')

@section('title','Notificações')

@section('admin','- Notificações')

@section('content')

<!-- Conteúdo -->
    <h1 class="h3 mb-4 text-gray-600">Notificações</h1>
        <p class="text-lg-start">
            O painel administrador possue a opção de controle de notificações, visando atender
            as necessidades e dúvidas apresentadas pelos clientes da NPI. O intuito é flexibilizar o feedback
            dos clientes e produzir vídeos observando de uma forma mais objetiva a dúvida de cada cliente. Cada 
            requisição contem o nome e email do solicitante e são cadastradas com status "Pendente" por padrão. 
            Cada colaborador tem a opção de visualizar, alterar, descartar ou mesmo, excluir a sugestão ou dúvida 
            apresentada pelo cliente, caso julgue-a inviável ou incoerente. As solicitações que estão como "Pendente", 
            são as primeiras no topo da tabela.
        </p><br>
    
    <h1 class="h3 mb-4 text-gray-600">Controle</h1>
        <p class="text-lg-start">
           Em uma visão geral, o controle de notificações serve para que cada técnico saiba quais as solicitações novas e quais já foram 
           vistas, documentadas, desenvolvidas, ou mesmo, descartadas por cada colaborador. O status "Pendente", indica que é uma solicitação 
           nova. "Em análise", indica que aquela demanda já tem um técnico responsável por analisar e averiguar a possibilidade de 
           implementação, seja um conteúdo produzido pelo próprio colaborador ou alguma implementação desenvolvida através de documentação
           realizada pelo consultor responsável. "Desenvolvida", indica que a demanda passada por um determinado cliente já possui um conteúdo 
           pronto, bastando apenas verificar com o consultor responsável qual conteúdo à ser entregue."Anulada", indica que o consultor já 
           analisou a solicitação e julgou ser inviável ou incoerente produzir uma solução em cima da requisição apresentada. Nesse caso, basta
           alterar o status para "Descartar", ao visualizar a solicitação. Na coluna"Login", da tabela é possível observar o consultor 
           responsável pela demanda. Clique em "Demonstração", para ver com detalhes.
        </p><br>
        <div class="row">
            <div class="col">               
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                Demonstração
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conteúdo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gqB3HZVn-gg" 
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
            <!-- /#Modal -->
        </div>
    </div>
        <!-- /#Conteúdo -->

  
@endsection