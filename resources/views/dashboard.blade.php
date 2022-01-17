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
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Dashboard</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <div class="row card-group-row">
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total de vendas</div>
                                        <div class="text-amount">R&dollar;820.000,99</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">2.6% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body flex-0">
                                    <small class="mb-1 d-flex align-items-center font-weight-bold text-muted">
                                        <span class="flex text-body">Franquia 1</span>
                                        <span class="mx-3">R&dollar;500.000.99</span>
                                        <span class="d-flex align-items-center"><i
                                                class="mr-1 material-icons text-success icon-16pt">arrow_upward</i>
                                            3.2%</span>
                                    </small>
                                    <small class="d-flex align-items-center font-weight-bold text-muted">
                                        <span class="flex text-body">Franquia 2</span>
                                        <span class="mx-3">R&dollar;320.000.00</span>
                                        <span class="d-flex align-items-center"><i
                                                class="mr-1 material-icons text-danger icon-16pt">arrow_downward</i>
                                            7.0%</span>
                                    </small>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total de parceiros</div>
                                        <div class="text-amount">52</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">9.6% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total de Franquias</div>
                                        <div class="text-amount">{{ $franchises->count() ?? 0 }}</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">100% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total de Clientes</div>
                                        <div class="text-amount">2</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">100% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total de Imóveis</div>
                                        <div class="text-amount">{{ $realties->count() ?? 0 }}</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">100% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Comissões Parceiros</div>
                                        <div class="text-amount">R$50.000,00</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">2.6% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Comissões Franquias</div>
                                        <div class="text-amount">R$50.000,00</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">2.6% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-row card-body d-flex align-items-center flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Comissões Corretores</div>
                                        <div class="text-amount">R$50.000,00</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">Ver</a>
                                        <div class="text-stats text-success">2.6% <i class="material-icons">arrow_upward</i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row card-group-row">
                        <div class="col-lg-4 col-md-6 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="flex-row card-body d-flex align-items-center flex-0">
                                    <div class="flex">
                                        <div class="mb-2 card-header__title">Total Vendas</div>
                                        <div class="text-amount">4</div>
                                    </div>
                                    <div class="ml-3 text-right d-flex flex-column align-items-end">
                                        <a href="" class="mb-2">View</a>
                                        <div class="text-stats text-success">92% <i
                                                class="material-icons">arrow_upward</i></div>
                                    </div>
                                </div>
                                <div class="flex card-body text-muted d-flex align-items-center">
                                    <div class="chart w-100" style="height: 200px;">
                                        <canvas id="totalOrdersChart">
                                            <span style="font-size: 1rem;"><strong>Total Orders</strong> chart
                                                goes
                                                here.</span>
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- // END drawer-layout__content -->
            @include('layouts.drawer.patner')

            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->
    </div>

@endsection
