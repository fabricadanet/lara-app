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
                                    <li class="breadcrumb-item active">Intenção de Compra</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Intenção de Compra</h1>
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
                                    <p><strong class="headings-color">Cadastro</strong></p>

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
                                                    placeholder="Nome do cliente"

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
                                                    placeholder="nome da Franquia"

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
                                                    placeholder="Valor"

                                                ></x-inputs.text>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-4">
                                                <x-inputs.text
                                                    name="area"
                                                    label="Área"
                                                    value="{{ old('area') }}"
                                                    maxlength="255"
                                                    placeholder="Área"

                                                ></x-inputs.text>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">

                                            <x-inputs.group class="col-sm-6 ">
                                                <x-inputs.select class="my-auto mt-3" name="marital_status" Label="Estado Civil">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Solteiro">Solteiro</option>
                                                    <option value="Casado">Casado</option>
                                                    <option value="Divorciado">Divorciado</option>
                                                    <option value="Viúvo">Viúvo</option>
                                                    <opition value="Outros">Outros</opition>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="children" label="Crianças">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="+04">04 ou mais</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="garage" Label="Vagas na Garagem">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="+04">04 ou mais</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="bathrooms" label="Banheiros">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="+04">04 ou mais</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="rooms" label="Quartos">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="+04">04 ou mais</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="suite" label="Suites">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="+04">04 ou mais</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="proximity_beach" label="Proximidade da praia">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="Orla com vista">Orla com vista</option>
                                                    <option value="Orla sem vista">Orla sem vista</option>
                                                    <option value="Quadra com vista">Quadra com vista</option>
                                                    <option value="Quadra sem vista">Quadra sem vista</option>
                                                    <option value="Outro">Outro</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto m-3" name="location" label="Localização">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Centros Urbanos">Centros Urbanos</option>
                                                    <option value="Condomínio">Condomínio</option>
                                                    <option value="Área Comercial">Área Comercial</option>
                                                    <option value="Acesso Rodovia">Acesso Rodovia</option>
                                                    <option value="Área Rural">Área Rural</option>
                                                    <option value="Outros">Outros</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="sale_deadline" label="Prazo para Venda">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Urgente">Urgente</option>
                                                    <option value="Durante o ano">Durante o ano</option>
                                                    <option value="Sem previsão">Sem previsão</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="financing" label="Financiamento">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Já financiado">Já financiado</option>
                                                    <option value="À financiar">À financiar</option>
                                                    <option value="À vista">À vista</option>
                                                    <option value="Outro">Outro</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="construction" label="Tipo de construção">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Novo">Nova</option>
                                                    <option value="Usado">Usada</option>
                                                    <option value="Lançamento 01 ano">Lançamento 01 ano</option>
                                                    <option value="Lançamento 02 anos">Lançamento 02 anos</option>
                                                    <option value="lançamento 03 anos ou mais">Lançamento 03 ou mais anos</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class=" m-auto mt-3" name="property_type" label="Tipo de Imóvel">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Casa">Casa</option>
                                                    <option value="Apartamento">Apartamento</option>
                                                    <option value="Cobertura">Cobertura</option>
                                                    <option value="Flat">Flat</option>
                                                    <option value="Kitnet">Kitnet</option>
                                                    <option value="Loft">Loft</option>
                                                    <option value="Sobrado">Sobrado</option>
                                                    <option value="Terreno">Terreno</option>
                                                    <option value="Chacará">Chacará</option>
                                                    <option value="Comercial">Comercial</option>
                                                    <option value="Industrial">Industrial</option>
                                                    <option value="Outro">Outro</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="swap_type" label="Tipo de Permuta">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="Carro">Carro</option>
                                                    <option value="Imóvel">Imóvel</option>
                                                    <option value="Terreno">Terreno</option>
                                                    <option value="Outro">Outro</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="furniture" label="Mobília">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="Sim">Sim</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="pets" label="Pet">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Não">Não</option>
                                                    <option value="Sim">Sim</option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="decision maker" label="Recomendado para tomador de descisão">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Marido">Marido</option>
                                                    <option value="Esposa">Esposa</option>
                                                    <option value="Companeiro(a)">Companheiro(a)</option>
                                                    <option value="Casal">Casal</option>
                                                    <option value="Família">Família</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
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
