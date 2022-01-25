@extends('layouts.app')
@section('title', 'Ver Intenção de compra')
@section('content')
    <!-- Header Layout Content -->


    <!-- Header Layout Content -->

    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">

                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center">
                        <div class="flex">
                            <nav aria-label="breadcrumb">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.patner') }}"><i
                                                class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        {{ __('Intenção de compra') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('Intenção de compra') }}</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <div class="mt-4">

                        <div class="card card-form">
                            <div class="row no-gutters">

                                <div class="col-lg-8 card-form__body card-body">

                                    <div class="container">

                                        <!--Section: Block Content-->
                                        <section class="mb-5">

                                            <div class="row">
                                                <div class="col-md-6 mb-4 mb-md-0">

                                                    <div id="mdb-lightbox-ui"></div>

                                                    <div class="mdb-lightbox">

                                                        <div class="row product-gallery mx-1">

                                                            <div class="col-12 mb-0">
                                                                <figure class="view overlay rounded ">
                                                                    <a href="{{ $buyIntention->realty->property_type == 'Casa' ? asset('assets/images/realties/casa.jpg') : asset('assets/images/realties/apartamentos.jpg') }}"
                                                                        data-size="710x823">
                                                                        <img src="{{ $buyIntention->realty->property_type == 'Casa' ? asset('assets/images/realties/casa.jpg') : asset('assets/images/realties/apartamentos.jpg') }}"
                                                                            class="img-fluid z-depth-1" width="400"
                                                                            height="500">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <h5>#ID</h5>
                                                    <p class="mb-2  text-uppercase small">
                                                        {{ $buyIntention->id }}</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5>#ID Cliente</h5>
                                                            <p><span
                                                                    class="mr-1 ">{{ $buyIntention->client->id }}</strong></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Nome Cliente</h5>
                                                            <p><span
                                                                    class="mr-1 "><strong>{{ $buyIntention->client->name }}</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5>Contato</h5>
                                                            <p><span
                                                                    class="mr-1 ">{{ $buyIntention->client->phone }}</strong></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Franquia</h5>
                                                            <p><span
                                                                    class="mr-1 "><strong>{{ $buyIntention->realty->franchise->name }}</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5>#ID Imóvel</h5>
                                                            <p><span
                                                                    class="mr-1 ">{{ $buyIntention->realty->id }}</strong></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Imóvel</h5>
                                                            <p><span
                                                                    class="mr-1 "><strong>{{ $buyIntention->realty->name }}</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5>Valor Imóvel</h5>
                                                            <p><span
                                                                    class="mr-1 ">{{ $buyIntention->realty->price }}</strong></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Tipo de negócio</h5>
                                                            <p><span
                                                                    class="mr-1 "><strong>{{ $buyIntention->sale_type }}</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5>Prazo</h5>
                                                            <p><span
                                                                    class="mr-1 ">{{ $buyIntention->realty->sale_deadline }}</strong></span>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>

                                        </section>

                                        <a href="{{ route('clients.intention') }}" class="btn btn-primary"
                                            type="voltar">Voltar</a>

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
