@extends('blank')
<!-- Título -->
@section('title','- Home')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')

    <h1 class="mt-4">NPI Web Academy</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Entendendo a plataforma</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O sistema web academy, também desenvolvido pela NPI, é uma plataforma que 
                contém biblioteca de mídias, que têm como referência os sistemas desenvolvidos 
                pela NPI. Cada usuário da plataforma Academy tem acesso total ao conteúdo de cada 
                sistema, independente do ramo atual de negócio. A volatilidade de funcionários 
                também era um problema apresentado pelos clientes, tendo em vista que cada novo 
                funcionário necessitava de treinamento, e aí solicitando o agendamento que só 
                aconteceria em horário comercial. Através da plataforma Web Academy, esse conteúdo 
                torna-se acessível a qualquer hora e recebe constantes atualizações. Em caso de dúvida, 
                pode utilizar o formulário de contato para nos informar sobre alguma situação específica. 
                Uma vez avaliada, pode ser que essa dúvida gere algum novo conteúdo, ou mesmo, uma nova 
                implementação desenvolvida para o sistema informado no formulário. Sugerimos que antes de 
                começar a manusear a plataforma Web Academy, que você veja primeiro o nosso manual, que dá 
                mais detalhes sobre o conteúdo e sobre a utilização do formulário de contato.
            </div>
        </div>

        <h2 class="mt-4">Sistemas</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Lista de todos os sistemas oferecidos pela NPI</li>
        </ol>
        <div class="row row-cols-1 row-cols-md-4 g-2 pt-2">
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:10px;">
                    <div class="card-header bg-light border-bottom">
                        <h3>Funerário</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/funerario.jpg" class="img-fluid" alt="funerario">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_ma') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:10px;">
                    <div class="card-header bg-light border-bottom">
                        <h3>Cemitério</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/cemiterio.jpg" class="img-fluid" alt="cemiterio">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_cem') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:10px;">
                    <div class="card-header bg-light border-bottom">
                        <h3>Clínica</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/clinica.jpg" class="img-fluid" alt="clinica">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_cli') }}" class="card-subtitle mb-2 text-muted">Acessar</a><br>
                    </div>
                </div>
            </div><br>
            
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:10px;">
                    <div class="card-header bg-light border-bottom">
                        <h3>Contábil</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/contabil.jpg" class="img-fluid" alt="financeiro">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_con') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:20px;">
                    <div class="card-header bg-light border-bottom-1">
                        <h3>Emissor</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/emissor.jpg" class="img-fluid" alt="emissor">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_emi') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:20px;">
                    <div class="card-header bg-light border-bottom-1">
                        <h3>Mobile</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/mobile.jpg" class="img-fluid" alt="mobile">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_mut') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:20px;">
                    <div class="card-header bg-light border-bottom-1">
                        <h3>Veícular</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/SAV.jpg" class="img-fluid" alt="veiculo">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_sav') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light border-0" style="margin-bottom:20px;">
                    <div class="card-header bg-light border-bottom">
                        <h3>Telemarketing</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/telemarketing.jpg" class="img-fluid" alt="telemarketing">
                    </div>
                    <div class="card-footer bg-light border-top">
                        <a href="{{ route('view_tel') }}" class="card-subtitle mb-2 text-muted">Acessar</a>
                    </div>
                </div>
            </div>
@endsection