@extends('layouts.app')
@section('title', 'Franchise')
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
                                    <li class="breadcrumb-item active">Vendas</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Vendas</h1>
                        </div>

                    </div>
                </div>
                <div class="container-fluid page__container">
                    <div class="card">

                        <div class="table-responsive">

                            <div class="m-3">
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="search-form search-form--light">
                                            <input type="text" class="form-control search" placeholder="Search"/>
                                            <button class="btn" type="button" role="button"><i
                                                    class="material-icons">search</i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                                <table class="table mb-0 thead-border-top-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 18px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                        class="custom-control-input js-toggle-check-all"
                                                        data-target="#products" id="customCheckAll">
                                                    <label class="custom-control-label" for="customCheckAll"><span
                                                            class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>
                                            <th style="width: 30px;" class="text-center">#ID</th>
                                            <th class="text-left">Franquia</th>
                                            <th class="text-left">Neg??cio</th>
                                            <th class="text-left">Im??vel</th>
                                            <th class="text-left">Cliente</th>
                                            <th class="text-left">Parceiro</th>
                                            <th class="text-left">Valor R$</th>
                                            <th class="text-left">Prazo</th>

                                            <th class="text-left">A????es</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="franchises">


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
                                                    <div class="badge badge-soft-dark">#1</div>
                                                </td>

                                                <td>
                                                    <div><a href="#">Imobiliaria</a></div>
                                                </td>
                                                <td style="">
                                                    <div class=" badge badge-soft-success">VENDA</div>
                                                </td>
                                                <td style="">
                                                    <div class="r">Casa na praia - 001001</div>
                                                </td>
                                                <td class="text-center">
                                                    <div >M??rio Almeida J??nior</div>
                                                </td>
                                                <td>
                                                    <div>Marcelo Chagas Neto</div>
                                                </td>
                                                <td style="" class="text-right">
                                                   1.000.000,00
                                                </td>
                                                <td style="">
                                                    <div class="text-right">URGENTE</div>
                                                </td>

                                                <td class="d-flex justify-content-center align-items-center">
                                                    <div class="text-right m-2"><a href="#"
                                                            class="btn btn-sm btn-success">FECHAR VENDA</a>
                                                    </div>
                                                    <div class="text-right m-2"><a href="#"
                                                                                    class="btn btn-sm btn-primary">VOLTAR PARCEIRO</a>
                                                    </div>
                                                    <div class="text-right m-2"><a href="#"
                                                            class="btn btn-sm btn-danger">CANCELAR VENDA</a>
                                                    </div>
                                                </td>
                                            </tr>

                                    </tbody>
                                </table>
                                <div class="card-body text-right">
                                    1 <span class="text-muted">de 25</span> <a href="#" class="text-muted-light"><i
                                            class="material-icons ml-1">arrow_forward</i></a>
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
