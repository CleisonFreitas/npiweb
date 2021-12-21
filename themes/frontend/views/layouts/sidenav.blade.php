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
            <div class="small">Versão: 1.14</div>
           <small> <i class="bi bi-calendar"></i>&nbsp;{{date('d/m/Y')}}</small>
        </div>
    </nav>
</div>
<div id="layoutSidenav_content">
    
