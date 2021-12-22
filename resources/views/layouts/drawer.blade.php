<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Menu </div>
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
            </ul>
            <div class="sidebar-heading">Em Breve </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#parceiro">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Parceiros</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="parceiro">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Lista de Parceiros</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#corretor">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Corretores</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="corretor">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Lista de Corretores </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#agendamentos">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Agendamentos</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="agendamentos">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Lista de Agendamentos</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Cadastrar Agendamentos</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#galerias">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Galeria</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="galerias">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Lista de Galerias</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('dashboard')}}">
                                <span class="sidebar-menu-text">Cadastrar Imagens</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

