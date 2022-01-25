@extends('layouts.app')
@section('title', 'Imóveis')
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
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.patner') }}"><i
                                                class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Imóveis</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Imóveis</h1>
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
                                                                    <a href="{{ $realty->property_type == 'Casa' ? asset('assets/images/realties/casa.jpg') : asset('assets/images/realties/apartamentos.jpg') }}"
                                                                        data-size="710x823">
                                                                        <img src="{{ $realty->property_type == 'Casa' ? asset('assets/images/realties/casa.jpg') : asset('assets/images/realties/apartamentos.jpg') }}"
                                                                            class="img-fluid z-depth-1" width="400"
                                                                            height="500">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <h8>Franquia</h8>
                                                        <p>{{ $realty->franchise->name }}</p>
                                                    </div>



                                                    <div class="">
                                                        <h8>#ID </h8>
                                                        <p><span class="mr-1 ">{{ $realty->id }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h8>Imóvel</h8>
                                                        <p><span class="ml-2 ">{{ $realty->name }}</span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Valor (R$)</h8>
                                                        <p><span class="m-2 ">{{ $realty->price }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h8>Financiamento</h8>
                                                        <p><span class="m-2">{{ $realty->financing }}</span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Prazo</h8>
                                                        <p><span
                                                                class="m-2 ">{{ $realty->sale_deadline }}</span>
                                                        </p>
                                                    </div>


                                                    <div class="">
                                                        <h8>Endereço</h8>
                                                        <p><span class="m-2 ">{{ $realty->address->street }} -
                                                                {{ $realty->address->number }}</strong></span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h8>Bairro</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->address->district }}</strong></span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Cidade</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->address->city }}</strong></span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h8>Estado</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->address->state }}</strong></span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Tipo de propriedade</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->property_type }}</strong></span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Área</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->area }}</strong></span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Número de quartos</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->rooms }}</strong></span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h8>Número de banheiros</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->bathrooms }}</strong></span>
                                                        </p>
                                                    </div>

                                                    <div class="">
                                                        <h8>Descrição</h8>
                                                        <p><span
                                                                class="m-2">{{ $realty->description }}</strong></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>

                                        <a href="{{ route('realties.index') }}" class="btn btn-primary"
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
