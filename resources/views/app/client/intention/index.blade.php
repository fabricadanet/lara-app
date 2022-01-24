@extends('layouts.app')
@section('title', 'Intenção de compra')
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
                                    <li class="breadcrumb-item active">{{ __('Intenção de compra') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('Intenções de Compra') }}</h1>
                        </div>
                        <a href="{{ route('buy_intention.create') }}"
                            class="ml-3 btn btn-success">{{ __('Nova Intenção de Compra') }}</a>
                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="card">

                        <div class="table-responsive">

                            <div class="m-3">
                                <div class="row">

                                    <div class="col-md-8">


                                    </div>
                                </div>
                            </div>
                            @if (!empty($buyIntentions))
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
                                            <th style="width: 30px;" class="text-center">#ID </th>
                                            <th style="width: 30px;" class="text-center">#ID Cliente </th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th style="" class="text-center">#ID Imóvel</th>
                                            <th>Imóvel</th>
                                            <th>Status</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="franchises">

                                        @foreach ($buyIntentions as $buyIntention)
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
                                                    <div class="badge badge-soft-dark">{{ $buyIntention->id }}</div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->client->id }}</a></div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->client->name }}</a></div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->client->whatsapp }}</a></div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->realty->id }}</a></div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->realty->name }}</a></div>
                                                </td>
                                                <td>
                                                    <div><a href="#">{{ $buyIntention->status }}</a></div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    {{-- <div class="mx-1 "><a href="{{ route('clients.edit',$cliente->id) }}"
                                                            class="btn btn-sm btn-success">VER</a>
                                                    </div> --}}
                                                    <div class="mx-1"><a href=""
                                                            class="btn btn-sm btn-primary">Gerar Pedido de venda</a>
                                                    </div>

                                                    <div class="mx-1"><a href="#"
                                                            class="btn btn-sm btn-danger">Cancelar</a>
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
                                <p class="text-center text-">Não há intenções de compras cadastradas!</p>
                            @endif

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
