<x-guest-layout>

    <div class="layout-login-centered-boxed">

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


            <form action="{{ route('register') }}" method="POST" novalidate>

                @csrf
                <div class="form-group">
                    <label class="text-label" for="name_2">{{ __('Name') }}</label>
                    <div class="input-group input-group-merge">
                        <input id="name_2" type="text" name="name" required=""
                            class="form-control form-control-prepended" placeholder="Digite o seu nome...">
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
                            class="form-control form-control-prepended" placeholder="Digite o seu e-mail">
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
                            class="form-control form-control-prepended" placeholder="Digite a sua senha">
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
                        <label class="custom-control-label" for="terms">Eu li e aceito os <a href="#">termos e as
                                condições</a> de uso.</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2" type="submit">{{ __('Create Account') }}</button><br>
                    <a class="text-body text-underline"
                        href="{{ route('login') }}">{{ __('Você já possui uma conta? Entrar') }}</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
