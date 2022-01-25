<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href={{ asset('assets/vendor/perfect-scrollbar.css') }} rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href={{ asset('assets/css/app.css') }} rel="stylesheet">
    {{-- <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet"> --}}

    <!-- Material Design Icons -->
    <link type="text/css" href={{ asset('assets/css/vendor-material-icons.css') }} rel="stylesheet">
    {{-- <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet"> --}}

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href={{ asset('assets/css/vendor-fontawesome-free.css') }} rel="stylesheet">
    {{-- <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet"> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>


    <!-- Flatpickr -->
    <link type="text/css" href={{ asset('assets/css/vendor-flatpickr.css') }} rel="stylesheet">

    <link type="text/css" href={{ asset('assets/css/vendor-flatpickr-airbnb.css') }} rel="stylesheet">
    <!-- Vector Maps -->
    <link type="text/css" href={{ asset('assets/vendor/jqvmap/jqvmap.min.css') }} rel="stylesheet">
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <main>
            <div class="layout-default">
                <!-- Header Layout -->
                <div class="mdk-header-layout js-mdk-header-layout">

                    <!-- Header -->

                    <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
                        <div class="mdk-header__content">

                            <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar"
                                data-primary>
                                <div class="container-fluid p-0">

                                    <!-- Navbar toggler -->

                                    <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                                        data-toggle="sidebar">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <!-- Navbar Brand -->
                                    <a href="{{ route('dashboard') }}" class="navbar-brand ">

                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" style="width:20px;" viewBox="0 0 40 40">
                                            <path
                                                d="M40 34.16666667c.01-3.21166667-2.58333333-5.82333334-5.795-5.835-1.94-.00666667-3.75666667.955-4.84166667 2.565-.10166666.155-.295.22333333-.47166666.16666666L11.94 25.66666667c-.19-.06-.31-.245-.28833333-.44333334.01-.07333333.015-.14833333.015-.22333333 0-.06833333-.005-.13833333-.01333334-.20666667-.02166666-.20166666.105-.39.3-.44666666l17.96-5.13c.13833334-.04.28666667-.005.39333334.09166666 1.05.97333334 2.42833333 1.51666667 3.86 1.525C37.38833333 20.83333333 40 18.22166667 40 15s-2.61166667-5.83333333-5.83333333-5.83333333C32.52 9.17166667 30.95333333 9.87833333 29.86 11.11c-.11.12166667-.28.16833333-.43666667.11833333L11.91 5.65333333c-.16-.05-.27333333-.19166666-.28833333-.35833333-.30333334-3.20166667-3.14333334-5.55166667-6.345-5.24833333S-.275 3.19.02833333 6.39166667c.28166667 2.99333333 2.79833334 5.28 5.805 5.275 1.64666667-.005 3.21333334-.71333334 4.30666667-1.945.11-.12166667.28-.16833334.43666667-.11833334l16.57 5.27166667c.22.06833333.34166666.30333333.27166666.52333333-.04166666.13333334-.14833333.23833334-.28333333.275L9.90333333 20.59666667c-.13333333.03833333-.275.00833333-.38166666-.08-1.03333334-.86833334-2.33833334-1.34666667-3.68833334-1.35C2.61166667 19.16666667 0 21.77833333 0 25s2.61166667 5.83333333 5.83333333 5.83333333c1.355-.005 2.665-.485 3.7-1.35833333.10833334-.09166667.25833334-.12.39333334-.07666667l18.29 5.81833334c.14.04333333.24666666.15666666.28.3.75666666 3.13166666 3.90833333 5.05666666 7.04 4.3C38.14833333 39.185 39.99 36.85333333 40 34.16666667z" />
                                        </svg>

                                        <span>IntegraMundi</span>
                                    </a>




                                    <ul
                                        class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                            <li class="nav-item dropdown">
                                                <a href="#notifications_menu" class="nav-link dropdown-toggle"
                                                    data-toggle="dropdown" data-caret="false">
                                                    <i
                                                        class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                                </a>
                                                <div id="notifications_menu"
                                                    class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                                    <div class="dropdown-item d-flex align-items-center py-2">
                                                        <span
                                                            class="flex navbar-notifications-menu__title m-0">Notificações</span>
                                                        <a href="javascript:void(0)"
                                                            class="text-muted"><small>Limpar
                                                            </small></a>
                                                    </div>
                                                    <div class="navbar-notifications-menu__content"
                                                        data-perfect-scrollbar>
                                                        <div class="py-2">


                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item text-center navbar-notifications-menu__footer">Ver
                                                        Tudo</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <li class="nav-item dropdown">
                                            <a href="#account_menu" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown" data-caret="false">
                                                <span class="mr-1 d-flex-inline">
                                                    <span class="text-light">{{ auth()->user()->name }}</span>
                                                </span>

                                            </a>
                                            <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-item-text dropdown-item-text--lh">
                                                    <div><strong>{{ auth()->user()->name }}</strong></div>
                                                    <div class="text-muted">{{ auth()->user()->email }}</div>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item active" href="{{ route('dashboard') }}"><i
                                                        class="material-icons">dvr</i>
                                                    Dashboard</a>

                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('formLogout').submit()"><i
                                                        class="material-icons">exit_to_app</i> {{ __('Logout') }}</a>
                                                <form id="formLogout" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
        </main>
    </div>
    <div id="app-settings" style="display: none">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>


    <!-- jQuery -->
    <script src={{ asset('assets/vendor/jquery.min.js') }}></script>

    <!-- Bootstrap -->
    <script src={{ asset('assets/vendor/popper.min.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap.min.js') }}></script>

    <!-- Perfect Scrollbar -->
    <script src={{ asset('assets/vendor/perfect-scrollbar.min.js') }}></script>

    <!-- DOM Factory -->
    <script src={{ asset('assets/vendor/dom-factory.js') }}></script>

    {{-- <!-- MDK --> --}}
    <script src={{ asset('assets/vendor/material-design-kit.js') }}></script>

    {{-- <!-- App --> --}}
    <script src={{ asset('assets/js/toggle-check-all.js') }}></script>
    <script src={{ asset('assets/js/check-selected-row.js') }}></script>
    <script src={{ asset('assets/js/dropdown.js') }}></script>
    <script src={{ asset('assets/js/sidebar-mini.js') }}></script>
    <script src={{ asset('assets/js/app.js') }}></script>

    {{-- <!-- App Settings (safe to remove) --> --}}
    <script src={{ asset('assets/js/app-settings.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>

    {{-- <!-- Flatpickr --> --}}
    {{-- <script src={{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}></script> --}}
    {{-- <script src={{ asset('assets/js/flatpickr.js') }}></script> --}}

    {{-- <!-- Global Settings --> --}}
    {{-- <script src={{ asset('assets/js/settings.js') }}></script> --}}

    {{-- <!-- Moment.js --> --}}
    {{-- <script src={{ asset('assets/vendor/moment.min.js') }}></script> --}}
    {{-- <script src={{ asset('assets/vendor/moment-range.js') }}></script> --}}

    {{-- <!-- Chart.js --> --}}
    {{-- <script src={{ asset('assets/vendor/Chart.min.js') }}></script> --}}

    {{-- <!-- App Charts JS --> --}}
    {{-- <script src={{ asset('assets/js/charts.js') }}></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src={{ asset('assets/js/chartjs-rounded-bar.js') }}></script> --}}

    {{-- <!-- Chart Samples --> --}}
    {{-- <script src={{ asset('assets/js/chartjs-samples.js') }}></script> --}}
    {{-- <script src={{asset('assets/js/page.ecommerce.js')}}></script> --}}
    {{-- <script src={{ asset('assets/js/page.dashboard.js') }}></script> --}}
    {{-- <script src={{ asset('assets/js/progress-charts.js') }}></script> --}}

    {{-- <!-- Vector Maps --> --}}
    {{-- <script src={{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}></script> --}}
    {{-- <script src={{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}></script> --}}
    {{-- <script src={{ asset('assets/js/vector-maps.js') }}></script> --}}
    <script>
        const labels = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Vendas',
                backgroundColor: 'rgb(99,125,255)',
                borderColor: 'rgb(99,125,255)',
                data: [0, 10, 15, 2, 20, 30, 35, 38, 45, 31, 12, 10]
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };
        const myChart = new Chart(
            document.getElementById('viewsChart'),
            config
        ); <
        /script < /
        body >



            <
            /html>
