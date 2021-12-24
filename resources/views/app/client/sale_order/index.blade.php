@extends('layouts.app')
@section('title', 'Realty')
@section('content')
    <!-- Header Layout Content -->

    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">

                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center">
                        <div class="flex">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i
                                                class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Pedido de Venda</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Pedido de venda</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <form  method="POST"
                           action="#"
                           enctype="multipart/form-data"
                           class="mt-4"
                    >
                        @csrf
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Solicitação</strong></p>

                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="">
                                        <div class="form-row">
                                            <x-inputs.group class="col-12">
                                                <x-inputs.text
                                                    name="name"
                                                    label="Nome"
                                                    value=""
                                                    maxlength="255"
                                                    placeholder="Nome do Cliente"

                                                ></x-inputs.text>
                                            </x-inputs.group>

                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-4">
                                                <x-inputs.text
                                                    name="code"
                                                    label="Código do Imóvel"
                                                    value="{{ old('code') }}"
                                                    maxlength="255"
                                                    placeholder="Código do Imóvel"

                                                ></x-inputs.text>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-8">
                                                <x-inputs.text
                                                    name="franchise"
                                                    label="Franquia"
                                                    value="{{ old('franchise') }}"
                                                    maxlength="255"
                                                    placeholder="Nome da Franquia"

                                                ></x-inputs.text>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-4">
                                                <x-inputs.text
                                                    name="price"
                                                    label="Valor"
                                                    value="{{ old('price') }}"
                                                    maxlength="255"
                                                    placeholder="Valor da compra"

                                                ></x-inputs.text>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6 ">
                                                <x-inputs.select class="my-auto mt-3" name="marital_status" Label="Status">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Aberto">Aberta</option>
                                                    <option value="Fechado">Fechada</option>
                                                    <option value="Cancelado">Cancelada</option>
                                                    <option value="Urgente">Urgente</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">



                                        </div>

                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-12">
                                                <x-inputs.textarea
                                                    name="description"
                                                    label="Observação"
                                                    value="{{ old('description') }}"
                                                    maxlength="255"
                                                    placeholder="Descrição"

                                                ></x-inputs.textarea>
                                            </x-inputs.group>
                                        </div>

                                    <button class="btn btn-primary"
                                            type="submit">Enviar</button>

                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- // END drawer-layout__content -->
        @include('layouts.drawer')

        <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

        <!-- // END header-layout -->
@endsection
