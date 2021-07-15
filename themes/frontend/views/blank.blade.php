<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NPI Web Academy @yield('title')</title>
        <link href="/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('home')}}">Npi Academy</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="bi bi-box-arrow-right"></i>&nbsp; {{ __('Sair') }}
                        </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        <a href="{{ route('logout') }}" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exclu_user">
                    
                            <i class="bi bi-x-circle-fill"></i>&nbsp;Cancelar inscrição
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <!-- Modal -->
            <div class="modal fade" id="exclu_user" tabindex="-1" aria-labelledby="exclu_user" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exclu_user">Cancelamento de inscrição</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    <div class="modal-body">
                    Deseja realmente cancelar sua inscrição?
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <a href="{{route('del_user',Auth::user()->id)}}" class="btn btn-danger">Sim</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #Modal de Exclusão -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Principal</div>
                            <a class="nav-link" href="{{route('home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">CONTEÚDO</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Sistemas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                            Funerário
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="{{route('view_ma')}}">Assistencial</a>
                                                <a class="nav-link" href="{{route('view_me')}}">Estoque</a>
                                            </nav>
                                        </div>
                                    <a class="nav-link" href="{{route('view_cem')}}">Cemitério</a>
                                    <a class="nav-link" href="{{route('view_cli')}}">Clínica</a>
                                    <a class="nav-link" href="{{route('view_con')}}">Contábil</a>
                                    <a class="nav-link" href="{{route('view_emi')}}">Emissor</a>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseMute" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Mobile
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseMute" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{route('view_mut')}}">Mutare</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="{{route('view_sav')}}">Veicular</a>
                                    <a class="nav-link" href="{{route('view_tel')}}">Telemarketing</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="/contato">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Contato
                            </a>
                            <div class="sb-sidenav-menu-heading">UTILITÁRIOS</div>
                            <a class="nav-link" href="{{route('view_man')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                                Manual
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Versão: 10.0.0.7</div>
                       <small> <i class="bi bi-calendar"></i>&nbsp;{{date('d/m/Y')}}</small>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class=" align-items-end justify-content-between small">
                            <div class="text-muted" style="text-align:center;"> NPI Tecnologia {{date('Y')}} &copy; Todos os direitos reservados</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="/assets/demo/datatables-demo.js"></script>
        <!-- Biblioteca Bootstrapp para Modal -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <!-- Biblioteca SweetAlert para Alertas do Sistema -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        @if (session('sucesso'))
        <script>
            Swal.fire(
        'Alerta!',
        'Requisição realizada com sucesso!',
        'success'
        )
        </script>
        @endif

        @if ($errors->any() || (session('erro'))) 
        <script>
            Swal.fire(
        'Alerta!',
        'Falha ao tentar cadastrar requisição!',
        'error'
        )
        </script>    
        @endif
    </body>
</html>
