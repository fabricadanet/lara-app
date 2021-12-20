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
                                    <li class="breadcrumb-item active">{{ __('Franchises') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('Franchises') }}</h1>
                        </div>
                        <a href="" class="btn btn-success ml-3">Create</a>
                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="card">

                        <div class="table-responsive">

                            <div class="m-3">
                                <div class="row">

                                    <div class="col-md-8">

                                        <div class="search-form search-form--light">
                                            <input type="text" class="form-control search" placeholder="Search">
                                            <button class="btn" type="button" role="button"><i
                                                    class="material-icons">search</i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!empty($franchises))
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
                                            <th>{{ __('Name') }}</th>
                                            <th class="text-center">Stock</th>
                                            <th class="">Category</th>
                                            <th class="text-right">Price</th>
                                            <th style="width: 100px; text-align: right;">
                                                <div class="dropdown pull-right">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Bulk</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="material-icons icon-18pt mr-1">work</i> Set
                                                            Price</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="material-icons icon-18pt mr-1">archive</i>
                                                            Archive</a>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="franchises">

                                        @foreach ($franchises as $franchise)
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
                                                    <div class="badge badge-soft-dark">{{ $franchise->id }}</div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/avatars/clem-onojeghuo-192088.jpg"
                                                        alt="product" style="width:35px" class="rounded mr-2">
                                                    <a href="#">{{ $franchise->name }}</a>
                                                </td>
                                                <td style="width: 120px;" class="text-center">
                                                    4 items</td>
                                                <td style="width:200px">

                                                    <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                        href="#">Coats</a>

                                                </td>

                                                <td class="text-right">$22</td>
                                                <td class="text-right"><a href="#"
                                                        class="btn btn-sm btn-primary">EDIT</a>
                                                </td>
                                                <td class="text-right"><a href="#"
                                                        class="btn btn-sm btn-primary">DELETE</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-body text-right">
                                    15 <span class="text-muted">of 25</span> <a href="#" class="text-muted-light"><i
                                            class="material-icons ml-1">arrow_forward</i></a>
                                </div>

                            @else
                                <p class="text-center text-">Não há franquias cadastradas</p>
                            @endif

                        </div>



                    </div>
                </div>

            </div>
            <!-- // END drawer-layout__content -->
        @include('layouts.drawer')

        <!-- // END drawer-layout -->

    </div>
    <!-- // END header-layout__content -->

    <!-- // END header-layout -->
@endsection
