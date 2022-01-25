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
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.patner') }}"><i
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

                    <div class="table-responsive">

                        {{-- <div class="m-3">
                            <div class="row">

                                <div class="col-md-8 " style="{ display: none;}">

                                    <div class="search-form search-form--light">
                                        <input type="text" class="form-control search" placeholder="Search">
                                        <button class="btn" type="button" role="button"><i
                                                class="material-icons">search</i></button>

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @if (!empty($sale_orders))
                            <table class="table mb-0 thead-border-top-0 table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 18px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-toggle-check-all"
                                                    data-target="#products" id="customCheckAll">
                                                <label class="custom-control-label" for="customCheckAll"><span
                                                        class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>
                                        <th style="width: 30px;" class="text-center">#ID</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>#ID Franquia</th>
                                        <th>Franquia</th>
                                        <th>#ID Imóvel</th>
                                        <th>Imóvel</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                <tbody class="list" id="franchises">

                                    @foreach ($sale_orders as $sale_order)
                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                        class="custom-control-input js-check-selected-row"
                                                        id="customCheck1_1">
                                                    <label class="custom-control-label" for="customCheck1_1"><span
                                                            class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-dark">{{ $sale_order->id }}</div>
                                            </td>

                                            <td>
                                                <div><a href="#">{{ $sale_order->buyIntention->client->name }}</a></div>
                                            </td>

                                            <td>
                                                <div><a href="#">{{ $sale_order->buyIntention->client->phone }}</a></div>
                                            </td>
                                            <td>
                                                <div><a href="#">{{ $sale_order->buyIntention->realty->franchise_id }}</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div><a
                                                        href="#">{{ $sale_order->buyIntention->realty->franchise->name }}</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div><a href="#">{{ $sale_order->buyIntention->realty->id }}</a></div>
                                            </td>
                                            <td>
                                                <div><a href="#">{{ $sale_order->buyIntention->realty->name }}</a></div>
                                            </td>
                                            <td>
                                                <div><a href="#">
                                                        @switch($sale_order->status)
                                                            @case('active')
                                                                <span class="badge badge-success">Ativo</span>
                                                            @break
                                                            @case('inactive')
                                                                <span class="badge badge-warning">Inativo</span>
                                                            @break
                                                            @case('canceled')
                                                                <span class="badge badge-danger">Cancelado</span>
                                                            @break
                                                            @case('waiting')
                                                                <span class="badge badge-info">Em análise</span>
                                                            @break
                                                        @endswitch
                                                    </a>
                                                </div>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-right card-body">
                                1 <span class="text-muted">de 25</span> <a href="#" class="text-muted-light"><i
                                        class="ml-1 material-icons">arrow_forward</i></a>
                            </div>

                        @else
                            <p class="text-center text-">Não há Pedidos de vendas cadastrados!</p>
                        @endif

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
