<x-guest-layout>

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
                        <input id="name_2" type="text" name="name" required=""
                            class="form-control form-control-prepended" placeholder="John Doe">
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
                    <button class="btn btn-primary mb-2" type="submit">{{ __('Create Account') }}</button><br>
                    <a class="text-body text-underline"
                        href="{{ route('login') }}">{{ __('Have an account? Login') }}</a>
                </div>
            </form>
        </div>
</x-guest-layout>
