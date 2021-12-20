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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

    <!-- Flatpickr -->
    <link type="text/css" href={{ asset('assets/css/vendor-flatpickr.css') }} rel="stylesheet">

    <link type="text/css" href={{ asset('assets/css/vendor-flatpickr-airbnb.css') }} rel="stylesheet">
    <!-- Vector Maps -->
    <link type="text/css" href={{ asset('assets/vendor/jqvmap/jqvmap.min.css') }} rel="stylesheet">

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <main>
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

    <!-- MDK -->
    <script src={{ asset('assets/vendor/material-design-kit.js') }}></script>

    <!-- App -->
    <script src={{ asset('assets/js/toggle-check-all.js') }}></script>
    <script src={{ asset('assets/js/check-selected-row.js') }}></script>
    <script src={{ asset('assets/js/dropdown.js') }}></script>
    <script src={{ asset('assets/js/sidebar-mini.js') }}></script>
    <script src={{ asset('assets/js/app.js') }}></script>

    <!-- App Settings (safe to remove) -->
    <script src={{ asset('assets/js/app-settings.js') }}></script>

    <!-- Flatpickr -->
    <script src={{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}></script>
    <script src={{ asset('assets/js/flatpickr.js') }}></script>

    <!-- Global Settings -->
    <script src={{ asset('assets/js/settings.js') }}></script>

    <!-- Moment.js -->
    <script src={{ asset('assets/vendor/moment.min.js') }}></script>
    <script src={{ asset('assets/vendor/moment-range.js') }}></script>

    <!-- Chart.js -->
    <script src={{ asset('assets/vendor/Chart.min.js') }}></script>

    <!-- App Charts JS -->
    <script src={{ asset('assets/js/charts.js') }}></script>
    <script src={{ asset('assets/js/chartjs-rounded-bar.js') }}></script>

    <!-- Chart Samples -->
    <script src={{ asset('assets/js/page.dashboard.js') }}></script>
    <script src={{ asset('assets/js/progress-charts.js') }}></script>

    <!-- Vector Maps -->
    <script src={{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}></script>
    <script src={{ asset('assets/js/vector-maps.js') }}></script>

</body>

</html>
