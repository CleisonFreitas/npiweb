@extends('admin.blank')

@section('title','Conteúdo')

@section('admin','- Conteúdo')

@section('content')

<!-- Conteúdo -->
    <h1 class="h3 mb-4 text-gray-600">Sistemas</h1>
        <p class="text-lg-start">
            Cada colaborador com acesso ao painel administrador pode postar,editar e excluir livremente o conteúdo referente a qualquer 
            um dos sistemas atualmente cadastrados, porém deve-se respeitar alguns critérios. Os campos:"Menu","título" e "Link", não 
            possuem restrição acerca de repetição sobre um mesmo menu, título ou link, serem cadastrados repetidas vezes, porém cada 
            vídeo lançado deve possuir o campo "menu" igual ao que se encontra no sistema. Por exemplo: Sistema de Gerenciamento de 
            Cemitério, menu: Cadastros. Caso o campo menu seja preenchido como "cadastro","Cadastro","Cadastross"... o sistema irá 
            restringir a inserção deste conteúdo, evitando conteúdos com a mesma referência, serem cadastrados com nomenclaturas incorretas. 
            Essa medida também facilita a manutenção das informações, uma vez que o conteúdo também pode ser consultado pelo menu. 
            Fora desta regra estão os sistemas "Veicular", por não receber manutenção, ou seja, não possuem um suporte ativo e nem a 
            necessidade de um controle robusto do conteúdo, e o "Mobile", possuindo atualmente apenas conteúdo sobre o Mutare. Além do 
            Mutare,está em desenvolvimento mais aplicações mobile, então ainda é incerto todos os menus que serão utilizados.
        </p><br>
    <h1 class="h3 mb-4 text-gray-600">Gerenciamento de Conteúdo</h1>
        <p class="text-lg-start">
            Cada um dos sistemas atualmente cadastrados possuem um gerenciamento descentralizado e independente, tornando
            o gerenciamento do conteúdo mais fácil e evitando que a manutenção do conteúdo referente a algum sistema acabe
            interferindo em outro. Além do que, sistemas como funerário e mobile possuem módulos, o que não se aplica para
            os demais sistemas. O preenchimento de cada campo é obrigatório, tanto para inserção quanto edição de conteúdo lançado.
            O link a ser copiado para inserção de conteúdo deve ser no formato "Embed", disponibilizado de forma padrão pelo próprio Youtube
            para compartilhamento de vídeos, mesmo que estejam como "não listados". Veja o processo clicando em "Assistir".
        </p>

        <div class="row">
            <div class="col">               
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                Assistir
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
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZJXdLaeudeY" 
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