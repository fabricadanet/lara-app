@extends('layouts.app')
@section('title', 'Editar Perfil')
@section('content')
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout"
         data-push
         data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">

            <div class="container-fluid  page__heading-container">
                <div class="page__heading">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Perfil</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Editar Perfil</h1>
                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Informações Básicas</strong></p>
                            <p class="text-muted">Edite o seu perfil.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">nome</label>
                                        <input id="name"
                                               type="text"
                                               class="form-control"
                                               placeholder="Nome"
                                               value="{{old('name')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">E-mail</label>
                                        <input id="email"
                                               type="email"
                                               class="form-control"
                                               placeholder="E-mail"
                                               value="{{old('email')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Atualize a sua senha</strong></p>
                            <p class="text-muted">Altere a sua senha.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="form-group">
                                <label for="opass">Senha antiga</label>
                                <input style="width: 270px;"
                                       id="opass"
                                       type="password"
                                       class="form-control"
                                       placeholder="Old password"
                                       value="****">
                            </div>
                            <div class="form-group">
                                <label for="npass">Nova senha</label>
                                <input style="width: 270px;"
                                       id="npass"
                                       type="password"
                                       class="form-control ">
                                <small class="invalid-feedback">The new password must not be empty.</small>
                            </div>
                            <div class="form-group">
                                <label for="cpass">Repita a nova senha</label>
                                <input style="width: 270px;"
                                       id="cpass"
                                       type="password"
                                       class="form-control"
                                       placeholder="Repita a nova senha">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Configurações do perfil</strong></p>
                            <p class="text-muted">Atualize o seu perfil público da plataforma. Ele ficará visível aos demais usuários.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="dz-clickable media align-items-center"
                                     data-toggle="dropzone"
                                     data-dropzone-url="http://"
                                     data-dropzone-clickable=".dz-clickable"
                                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                        <div class="avatar"
                                             style="width: 80px; height: 80px;">
                                            <img src="assets/images/account-add-photo.svg"
                                                 class="avatar-img rounded"
                                                 alt="..."
                                                 data-dz-thumbnail>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <button class="btn btn-sm btn-primary dz-clickable">Alterar foto</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-right mb-5">
                    <a href=""
                       class="btn btn-success">Salvar</a>
                </div>
            </div>

        </div>
        @include('layouts.drawer')
    </div>
</div>
@endsection
