@extends('layouts.blank')
<!-- Título -->
@section('title','- Manual')
<!-- #Título -->

<!-- Conteúdo -->
@section('content')
<!-- Manual -->
    <h1 class="mt-4">Manual</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Geral</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O "Web Academy" foi desenvolvido de forma sintética e de fácil utilização para o usuário, porém entendendo 
                que ainda possam surgir dúvidas, esse manual foi desenvolvido no intuito de sanar essas dúvidas e explicar 
                a funcionalidade geral, seja para pesquisar algum conteúdo desejado ou enviar alguma sugestão, dúvida ou 
                reclamação sobre algum conteúdo específico. 
            </div>
        </div>
        <!-- Sobre o Conteúdo -->
        <h2 class="mt-4">Sobre o Conteúdo</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Sistemas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Clicando no menu “Sistemas”, uma janela com alguns submenus será aberta, cada um com uma referência de 
                sistema oferecido pela NPI. Cada usuário devidamente cadastrado em nosso portal tem acesso total ao 
                conteúdo de cada um dos sistemas, para que possa consultar não somente o conteúdo do sistema que utiliza 
                atualmente em sua empresa como também sobre algum outro sistema que possa lhe interessar ou que já almeja 
                implantar futuramente.  Ao clicar em algum desses submenus, seu usuário será redirecionado para uma página 
                com informações específicas sobre o sistema escolhido, em formato de tabela. Cada vídeo lançado terá o nome 
                de algum menu presente no sistema que está sendo consultado no momento, pode ser utilizado como filtro para
                consultar algum conteúdo específico. Como já mencionado anteriormente, o formato de apresentação é um modelo
                tabela, contendo código, menu, título e data de criação de vídeo. Cada vídeo lançado 
                pode ser consultado utilizando algum desses campos como filtro, basta colocar no campo “Search” o filtro que 
                deseja utilizar. Os sistemas “Funerário” e “Mobile”, têm uma diferença, pois cada um deles tem um módulo. O 
                Sistema de Controle Funerário, por exemplo, pode ser consultado também por módulo “Assistencial(MA)” e 
                “Estoque(ME)”, enquanto que Mobile apenas por “Mutare”, por enquanto. 
            </div>
        </div>

        <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading"><i class="bi bi-exclamation-diamond"></i>&nbsp;Observação!</h4>
            <p>Embora seja permitido a visualização de todo o conteúdo presente no Academy, o usuário não exerce de qualquer permissão para realizar inclusão, alteração ou exclusão do mesmo. Em caso de problema para acessar o conteúdo, você pode utilizar o menu “Contato” para reportar alguma situação ou mau funcionamento.</p>
            <hr>
            <p class="mb-0">Caso acesse alguma página e não encontre conteúdo, pode ser que não seja erro. Todo conteúdo inserido em nosso portal é passivel de alteração conforme torne-se necessário sua atualização ou mesmo sua remoção por conta de descontinuidade do produto ou serviço.</p>
            </div>
        <!-- #Conteúdo -->
        <!-- Formulário de Contato -->
        <h1 class="mt-4">Contato</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Formulário de Contato para Sugestões e dúvidas.</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                O menu “Contato” foi desenvolvido para que você possa nos enviar dúvidas e sugestões sobre algum conteúdo 
                que queira ver. Os colaboradores da NPI receberão essa notificação e a avaliarão junto com as demais 
                sugestões enviadas por outros usuários. É necessário preencher todas as informações do formulário 
                de contato, pois caso seja desenvolvida alguma solução a partir de sua sugestão, precisaremos dessas 
                informações para lhe dar um retorno sobre o que foi desenvolvido. O formulário de contato também pode ser 
                utilizado para enviar problemas que você está tendo para visualizar o conteúdo ou reproduzir algum vídeo, 
                ou algo que seja nesse sentido. Vamos avaliar se o problema de fato está ocorrendo em nosso portal, mas 
                pedimos de antemão que tente utilizar outro navegador, ou mesmo, outro dispositivo para reproduzir o mesmo 
                conteúdo, antes de reportar problema.
            </div>
        </div>
        <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading"><i class="bi bi-exclamation-diamond"></i>&nbsp;Importante!</h4>
            <p>Ao clicar no campo “Sistema”, do formulário de contato, uma lista com opção de escolha dos sistemas será exibida. Você pode digitar manualmente o nome do sistema também, porém, deve está de acordo com algumas das opções exibidas na lista, caso contrário o formulário apresentará erro no envio.</p>
            </div>
        <!-- #Contato -->
    <!-- #Manual -->

@endsection