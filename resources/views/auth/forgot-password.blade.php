<x-guest-layout>




    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="layout-login-centered-boxed__form card">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
                    <img class="navbar-brand-icon mr-0 mb-2" src="assets/images/stack-logo-blue.svg" width="25"
                        alt="FlowDash">
                    <span>FlowDash</span>
                </a>
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>



            <div class="page-separator">
                <div class="page-separator__text"></div>
            </div>

            <form action="{{ route('password.email') }}" novalidate>

                <div class="form-group">
                    <label class="text-label" for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2" type="email" required="" class="form-control form-control-prepended"
                            placeholder="john@doe.com">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2" type="submit">
                        {{ __('Email Password Reset Link') }}</button><br>
                    <a class="text-body text-underline" href="login-centered-boxed.html">Have an account? Login</a>
                </div>
            </form>
        </div>


    </form>

</x-guest-layout>
