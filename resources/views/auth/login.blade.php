<x-guest-layout>
    <div class="layout-login__overlay">
    </div>
    <div class="layout-login__form bg-white" data-perfect-scrollbar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src={{ asset('assets/images/stack-logo-blue.svg') }} width="25"
                    alt="Stack">
                <span>Stack</span>
            </a>
        </div>

        <h4 class="m-0">Welcome back!</h4>
        <p class="mb-5">Login to access your Stack Account </p>

        <form action="{{ route('login') }}" novalidate method="POST">
            @csrf
            <div class="form-group">
                <label class="text-label" for="email_2">{{ __('Email') }}</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" required="" name="email"
                        class="form-control form-control-prepended" placeholder="email@email.com">
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
                        class="form-control form-control-prepended" placeholder={{ __('********') }}>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="remember">
                    <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary mb-5" type="submit">{{ __('Login') }}</button><br>
                <a href="{{ route('password.request') }}">{{ _('Forgot password') }}?</a> <br>
                {{ __('Dont have an account?') }} <a class="text-body text-underline"
                    href="{{ route('login') }}">{{ __('Sign up') }}</a>
            </div>
        </form>
    </div>

</x-guest-layout>
