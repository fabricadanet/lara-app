<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Administrador</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="dashboards_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Financeiro</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu1">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">{{__('crud.franchises.name')}}</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="apps_menu1">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('franchises.index')}}">
                                <span class="sidebar-menu-text">{{__('crud.franchises.index_title')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu3">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">{{__('crud.clients.name')}}</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="apps_menu3">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">{{__('crud.clients.index_title')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu2">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">{{__('crud.properties.name')}}</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="apps_menu2">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('realties.index')}}">
                                <span class="sidebar-menu-text">{{__('crud.properties.index_title')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#event_adm">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Agenda</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="event_adm">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">Agendamentos</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#profile_adm">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Perfil</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="profile_adm">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('franchises.index')}}">
                                <span class="sidebar-menu-text">Editar</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="sidebar-heading">Parceiro </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_patner">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="dashboards_patner">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Financeiro</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#client_patner">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Clientes</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="client_patner">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <span class="sidebar-menu-text">Cadastro</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <span class="sidebar-menu-text">Intenção de Compra</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <span class="sidebar-menu-text">Pedidos de Venda</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#realty_patner">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">{{__('crud.properties.name')}}</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="realty_patner">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('realties.index')}}">
                                <span class="sidebar-menu-text">{{__('crud.properties.index_title')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#event_patner">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Agenda</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="event_patner">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">Transmissões</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#profile_patner">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Perfil</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="profile_patner">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('franchises.index')}}">
                                <span class="sidebar-menu-text">Editar</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="sidebar-heading">Franquia </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_franchise">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="dashboards_franchise">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Financeiro</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#sales_franchise">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Vendas</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="sales_franchise">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('franchises.index')}}">
                                <span class="sidebar-menu-text">Pedidos de Venda</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#realty_franchise">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">{{__('crud.properties.name')}}</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="realty_franchise">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('realties.index')}}">
                                <span class="sidebar-menu-text">Cadastro</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <span class="sidebar-menu-text">Galeria</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <span class="sidebar-menu-text">Agenda</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#people_franchise">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Pessoas</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="people_franchise">
                        <li class="sidebar-menu-item">

                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">Clientes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">

                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">Corretores</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">

                            <a class="sidebar-menu-button" href="{{route('clients.index')}}">
                                <span class="sidebar-menu-text">Parceiros</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#profile_franchise">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Perfil</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="profile_franchise">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('franchises.index')}}">
                                <span class="sidebar-menu-text">Editar</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

