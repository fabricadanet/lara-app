<!DOCTYPE html>
<html lang="en" dir="ltr">

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

</head>

<body class="layout-login-centered-boxed">

    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
                <img class="navbar-brand-icon mr-0 mb-2" src="assets/images/stack-logo-blue.svg" width="25"
                    alt="FlowDash">
                <span>FlowDash</span>
            </a>
            <p class="m-0">Create an account with FlowDash</p>
        </div>


        <div class="page-separator">

        </div>

        <form action="index.html" novalidate>
            <div class="form-group">
                <label class="text-label" for="name_2">{{ __('Name') }}</label>
                <div class="input-group input-group-merge">
                    <input id="name_2" type="text" name="name" required="" class="form-control form-control-prepended"
                        placeholder="John Doe">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-user"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="email_2">{{ __('Email') }}</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" name="email" required=""
                        class="form-control form-control-prepended" placeholder="john@doe.com">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="password_2">{{ __('Password') }}</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" name="password" required=""
                        class="form-control form-control-prepended" placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" checked="" class="custom-control-input" id="terms" />
                    <label class="custom-control-label" for="terms">I accept <a href="#">Terms and
                            Conditions</a></label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary mb-2" type="submit">Create Account</button><br>
                <a class="text-body text-underline" href="login-centered-boxed.html">Have an account? Login</a>
            </div>
        </form>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

</body>

</html>
