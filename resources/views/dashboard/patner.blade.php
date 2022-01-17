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
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.patner') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Parceiro</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Parceiro</h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid page__container">
                    <div class="row card-group-row">
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="flex-row card card-group-row__card card-body align-items-center">
                                <div><i class="mr-2 material-icons text-success icon-48pt">check_circle</i></div>
                                <div class="flex">
                                    <div class="mb-0 h4">Senior</div>
                                    <div class="mt-1 text-muted">Plano de conhecimento</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="flex-row card card-group-row__card card-body align-items-center">
                                <div><i class="mr-2 material-icons text-success icon-48pt">home</i></div>
                                <div class="flex">
                                    <div class="mb-0 h4">2500</div>
                                    <div class="mt-1 text-muted">Imóveis na plataforma</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="flex-row card card-group-row__card card-body align-items-center">
                                <div><i class="mr-2 material-icons text-success icon-48pt">add_shopping_cart</i></div>
                                <div class="flex">
                                    <div class="mb-0 h4">45</div>
                                    <div class="mt-1 text-muted">vendas concluídas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 card-group-row__col">
                            <div class="flex-row card card-group-row__card card-body align-items-center">
                                <div><i class="mr-2 material-icons text-success icon-48pt">laptop</i></div>
                                <div class="flex">
                                    <div class="mb-0 h4">5</div>
                                    <div class="mt-1 text-muted">Agendamentos para hoje</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-group">
                                <div class="text-center card card-body">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">face</i>
                                    </div>
                                    <div class="text-amount">30 </div>
                                    <div class="mb-2 card-header__title">Clientes cadastrados</div>
                                </div>
                                <div class="text-center card card-body">
                                    <div class="mb-1"><i class="material-icons icon-muted icon-40pt">event</i>
                                    </div>
                                    <div class="text-amount">15</div>
                                    <div class="mb-2 card-header__title">Agendamentos realizados</div>
                                </div>
                                <div class="text-center card card-body">
                                    <div class="mb-1"><i
                                            class="material-icons icon-muted icon-40pt">shopping_cart</i></div>
                                    <div class="text-amount">25 </div>
                                    <div class="mb-2 card-header__title">Intenções de compra abertas</div>
                                </div>
                                <div class="text-center card card-body">
                                    <div class="mb-1"><i
                                            class="material-icons icon-muted icon-40pt">shopping_basket</i></div>
                                    <div class="text-amount">10</div>
                                    <div class="mb-2 card-header__title">Pedidos de venda abertas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4 text-center d-flex align-items-center">
                                        <div class="pr-4 mr-4 border-right">
                                            <div class="mb-0">Vendas no período</div>
                                            <div class="text-amount">10</div>
                                        </div>
                                        <div>
                                            <div class="mb-0">Conversão</div>
                                            <div class="text-amount">24%</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary">Exportar Dados <i
                                                    class="material-icons">file_download</i></a>
                                        </div>
                                    </div>
                                    <div class="chart" style="height: 295px;">
                                        <canvas id="viewsChart">
                                            <span style="font-size: 1rem;"><strong>Ver</strong> area chart goes here.</span>
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="bg-white card-header card-header-large d-flex align-items-center">
                                    <div class="flex flatpickr-wrapper">
                                        <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true"
                                            data-flatpickr-static="true" data-flatpickr-mode="range"
                                            data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                            <h4 class="card-header__title">Vendas Recentes</h4>
                                            <a href="javascript:void(0)" class="link-date" data-toggle>01/12/2021 a
                                                31/12/2021</a>
                                            <input class="flatpickr-hidden-input" type="hidden"
                                                value="01/12/2021 a 31/12/2021" data-input>
                                        </div>
                                    </div>
                                    <i class="material-icons icon-muted">help_outline</i>
                                </div>
                                <div class="py-0 card-body">
                                    <div class="list-group list-group-small list-group-flush">

                                        <div class="px-0 list-group-item d-flex align-items-center">
                                            <div class="flex mr-3"> <i
                                                    class="material-icons icon-18pt icon-muted">contacts</i> Sherri J.
                                                Cardenas</div>
                                            <div class="mr-3 text-dark-gray">01/12/2021 </div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="px-0 list-group-item d-flex align-items-center">
                                            <div class="flex mr-3"> <i
                                                    class="material-icons icon-18pt icon-muted">contacts</i> Joseph S.
                                                Ferland</div>
                                            <div class="mr-3 text-dark-gray">15/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="px-0 list-group-item d-flex align-items-center">
                                            <div class="flex mr-3"> <i
                                                    class="material-icons icon-18pt icon-muted">contacts</i> Bryan K. Davis
                                            </div>
                                            <div class="mr-3 text-dark-gray">17/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="px-0 list-group-item d-flex align-items-center">
                                            <div class="flex mr-3"> <i
                                                    class="material-icons icon-18pt icon-muted">contacts</i> Elizabeth J.
                                                Ohara</div>
                                            <div class="mr-3 text-dark-gray">17/12/2021</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                        <div class="px-0 list-group-item d-flex align-items-center">
                                            <div class="flex mr-3"> <i
                                                    class="material-icons icon-18pt icon-muted">contacts</i> Kaci M.
                                                Langston</div>
                                            <div class="mr-3 text-dark-gray">hoje</div>
                                            <div><a href="">R$ 123.000.000,00</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center card-footer">
                                    <a class="text-muted" href="">Ver todos (45)</a>
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

    </div>
    <!-- // END header-layout -->

@endsection
