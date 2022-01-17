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
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Intenção de Compra</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Intenção de Compra</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <div class="mt-4">
                        @csrf
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Cadastro - intensão de compra</strong></p>

                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="">
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-12 ">
                                                <x-inputs.select class="my-auto mt-3" name="client" Label="Cliente">
                                                    <option value="">Selecione</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->id }} -
                                                            {{ $client->name }}</option>
                                                    @endforeach
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>

                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-6 ">
                                                <x-inputs.select class="my-auto mt-3" name="marital_status"
                                                    Label="Estado Civil">
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
                                                <x-inputs.select class="m-auto mt-3" name="garage"
                                                    Label="Vagas na Garagem">
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
                                                <x-inputs.select class="m-auto mt-3" name="proximity_beach"
                                                    label="Proximidade da praia">
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
                                                <x-inputs.select class="m-3 m-auto" name="location" label="Localização">
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
                                                <x-inputs.select class="m-auto mt-3" name="sale_deadline"
                                                    label="Prazo para Venda">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Urgente">Urgente</option>
                                                    <option value="Durante o ano">Durante o ano</option>
                                                    <option value="Sem previsão">Sem previsão</option>
                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3" name="financing"
                                                    label="Financiamento">
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
                                                <x-inputs.select class="m-auto mt-3" name="construction"
                                                    label="Tipo de construção">
                                                    <option disabled value="">Selecione</option>
                                                    <option value="Novo">Nova</option>
                                                    <option value="Usado">Usada</option>
                                                    <option value="Lançamento 01 ano">Lançamento 01 ano</option>
                                                    <option value="Lançamento 02 anos">Lançamento 02 anos</option>
                                                    <option value="lançamento 03 anos ou mais">Lançamento 03 ou mais anos
                                                    </option>

                                                </x-inputs.select>
                                            </x-inputs.group>
                                            <x-inputs.group class="col-sm-6">
                                                <x-inputs.select class="m-auto mt-3 " name="property_type"
                                                    label="Tipo de Imóvel">
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
                                                <x-inputs.select class="m-auto mt-3" name="swap_type"
                                                    label="Tipo de Permuta">
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
                                                <x-inputs.select class="m-auto mt-3" name="decision maker"
                                                    label="Recomendado para tomador de descisão">
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
                                                <x-inputs.textarea name="description" label="Observação"
                                                    value="{{ old('description') }}" maxlength="255"
                                                    placeholder="Descrição">
                                                </x-inputs.textarea>
                                            </x-inputs.group>
                                        </div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Consultar I.A.
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END drawer-layout__content -->
            @include('layouts.drawer-patner')

            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

        <!-- // END header-layout -->
    @endsection
