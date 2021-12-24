@extends('layouts.app')
@section('content')



    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">
                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard.franchise')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Franquia</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Franquia</h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid page__container">
                    <div class="row card-group-row">
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card card-body flex-row align-items-center">
                                <div><i class="material-icons text-success icon-48pt mr-2">check_circle</i></div>
                                <div class="flex">
                                    <div class="h4 mb-0">Imobiliaria</div>
                                    <div class="text-muted mt-1">Franquia Gold</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card card-body flex-row align-items-center">
                                <div><i class="material-icons text-success icon-48pt mr-2">home</i></div>
                                <div class="flex">
                                    <div class="h4 mb-0">2500</div>
                                    <div class="text-muted mt-1">Imóveis na plataforma</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card card-body flex-row align-items-center">
                                <div><i class="material-icons text-success icon-48pt mr-2">add_shopping_cart</i></div>
                                <div class="flex">
                                    <div class="h4 mb-0">450</div>
                                    <div class="text-muted mt-1">vendas concluídas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card card-body flex-row align-items-center">
                                <div><i class="material-icons text-success icon-48pt mr-2">laptop</i></div>
                                <div class="flex">
                                    <div class="h4 mb-0">15</div>
                                    <div class="text-muted mt-1">Agendamentos para hoje</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-group">
                                <div class="card card-body text-center">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">face</i></div>
                                    <div class="text-amount">300 </div>
                                    <div class="card-header__title mb-2">Clientes cadastrados</div>
                                </div>
                                <div class="card card-body text-center">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">event</i></div>
                                    <div class="text-amount">150</div>
                                    <div class="card-header__title  mb-2">Agendamentos realizados</div>
                                </div>
                                <div class="card card-body text-center">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">shopping_cart</i></div>
                                    <div class="text-amount">25 </div>
                                    <div class="card-header__title mb-2">Intenções de compra abertas</div>
                                </div>
                                <div class="card card-body text-center">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">shopping_basket</i></div>
                                    <div class="text-amount">35</div>
                                    <div class="card-header__title  mb-2">Pedidos de venda abertas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-center mb-4">
                                        <div class="border-right pr-4 mr-4">
                                            <div class="mb-0">Vendas no período</div>
                                            <div class="text-amount">57</div>
                                        </div>
                                        <div>
                                            <div class="mb-0">Conversão</div>
                                            <div class="text-amount">33%</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#"
                                               class="btn btn-primary">Exportar Dados <i class="material-icons">file_download</i></a>
                                        </div>
                                    </div>
                                    <div class="chart"
                                         style="height: 295px;">
                                        <canvas id="viewsChart">
                                            <span style="font-size: 1rem;"><strong>Ver</strong> area chart goes here.</span>
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header card-header-large bg-white d-flex align-items-center">
                                    <div class="flatpickr-wrapper flex">
                                        <div id="recent_orders_date"
                                             data-toggle="flatpickr"
                                             data-flatpickr-wrap="true"
                                             data-flatpickr-static="true"
                                             data-flatpickr-mode="range"
                                             data-flatpickr-alt-format="d/m/Y"
                                             data-flatpickr-date-format="d/m/Y">
                                            <h4 class="card-header__title">Vendas Recentes</h4>
                                            <a href="javascript:void(0)"
                                               class="link-date"
                                               data-toggle>01/12/2021 a 31/12/2021</a>
                                            <input class="flatpickr-hidden-input"
                                                   type="hidden"
                                                   value="01/12/2021 a 31/12/2021"
                                                   data-input>
                                        </div>
                                    </div>
                                    <i class="material-icons icon-muted">help_outline</i>
                                </div>
                                <div class="card-body py-0">
                                    <div class="list-group list-group-small list-group-flush">

                                        <div class="list-group-item d-flex align-items-center px-0">
                                            <div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Sherri J. Cardenas</div>
                                            <div class="mr-3 text-dark-gray">01/12/2021 </div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="list-group-item d-flex align-items-center px-0">
                                            <div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Joseph S. Ferland</div>
                                            <div class="mr-3 text-dark-gray">15/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="list-group-item d-flex align-items-center px-0">
                                            <div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Bryan K. Davis</div>
                                            <div class="mr-3 text-dark-gray">17/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="list-group-item d-flex align-items-center px-0">
                                            <div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Elizabeth J. Ohara</div>
                                            <div class="mr-3 text-dark-gray">17/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="list-group-item d-flex align-items-center px-0">
                                            <div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Kaci M. Langston</div>
                                            <div class="mr-3 text-dark-gray">hoje</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="text-muted"
                                       href="">Ver todos (45)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout__content -->
        @include('layouts.drawer')

        <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

@endsection
