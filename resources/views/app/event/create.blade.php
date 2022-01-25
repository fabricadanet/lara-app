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
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                                class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Agendamento</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Agendamento</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data"
                        class="mt-4">
                        @csrf
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Cadastro - Agendamento</strong></p>

                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="">
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-12 ">
                                                <x-inputs.select class="my-auto mt-3" name="client_id" Label="Cliente *">
                                                    <option value="">Selecione</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->id }} -
                                                            {{ $client->name }}</option>
                                                    @endforeach
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>
                                        <div class="form-row">
                                            <x-inputs.group class="col-sm-12 ">
                                                <x-inputs.select class="my-auto mt-3" name="realty_id" Label="Imóvel *">
                                                    <option value="">Selecione</option>
                                                    @foreach ($realties as $realty)
                                                        <option value="{{ $realty->id }}">{{ $realty->id }} -
                                                            {{ $realty->name }}</option>
                                                    @endforeach
                                                </x-inputs.select>
                                            </x-inputs.group>
                                        </div>


                                    </div>

                                    <div class="form-row">
                                        <x-inputs.group class="col-sm-12">
                                            <x-inputs.text name="title" label="Título *" value="{{ old('title') }}"
                                                maxlength="255" placeholder="Digite o título do agendamento">
                                            </x-inputs.text>
                                        </x-inputs.group>
                                    </div>

                                    <div class="form-row">
                                        <x-inputs.group class="col-sm-6">
                                            <label for="start">Horário Início *</label>
                                            <input type="DateTime-Local" name="start" class="form-control"
                                                value="{{ old('start') }}" id="start">
                                        </x-inputs.group>
                                        <x-inputs.group class="col-sm-6">
                                            <label for="timeend">Horário Fim *</label>
                                            <input type="DateTime-Local" name="end" class="form-control"
                                                value="{{ old('end') }}" id="end">
                                        </x-inputs.group>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
            <!-- // END drawer-layout__content -->
            @include('layouts.drawer-patner')

            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

        <!-- // END header-layout -->
    @endsection
