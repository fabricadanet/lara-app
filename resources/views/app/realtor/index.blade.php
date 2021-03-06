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
                                    <li class="breadcrumb-item active">{{ __('crud.properties.name') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('crud.properties.name') }}</h1>
                        </div>
                        <a href="{{route('realties.create')}}" class="btn btn-success ml-3">{{__('crud.properties.create_title')}}</a>
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
                            @if (!empty($realties))
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
                                            <th class="text-left">Tipo de neg??cio</th>
                                            <th class="text-left">Prazo</th>
                                            <th class="text-left">Tipo</th>
                                            <th>{{ __('Name') }}</th>
                                            <th class="text-right">Pre??o</th>
                                            <th class="text-right">??rea</th>
                                            <th class="text-right">Quartos</th>
                                            <th class="text-right">Su??tes</th>

                                            <th class="text-right">Vagas</th>
                                            <th class="text-right">Proximidade da Praia</th>

                                            <th class="text-right">A????es</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="franchises">

                                        @foreach ($realties as $realty)
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
                                                    <div><a href="#">Casa na praia</a></div>
                                                </td>
                                                <td style="">
                                                    <div class=" badge badge-soft-success">Venda</div>
                                                </td>
                                                <td style="">
                                                    <div class="badge badge-soft-danger">URGENTE</div>
                                                </td>
                                                <td class="text-center">
                                                    <div >Casa</div>
                                                </td>
                                                <td>
                                                    <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                        alt="product" style="width:35px" class="rounded mr-2">
                                                    <a href="#">{{ $realty->name }}</a>
                                                </td>
                                                <td style="" class="text-right">
                                                    {{$realty->price}}
                                                </td>
                                                <td style="">
                                                    <div class="text-right">{{$realty->area}}</div>
                                                </td>

                                                <td style="">
                                                    <div class="text-right">{{$realty->bathrooms}}</div>
                                                </td>
                                                <td style="">
                                                    <div class="text-right">{{$realty->suite}}</div>
                                                </td>

                                                <td style="">
                                                    <div class="text-right">{{$realty->garage}}</div>
                                                </td>

                                                <td style="">
                                                    <div class="text-right">{{$realty->proximity_beach}}</div>
                                                </td>



                                                <td>
                                                    <div class="text-right mb-2"><a href="{{route('realties.edit', $realty->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>
                                                    </div>
                                                    <div class="text-right mb-2"><a href="{{route('realties.destroy', $realty->id) }}"
                                                            class="btn btn-sm btn-danger">DELETE</a>
                                                    </div>
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
                                <p class="text-center text-">N??o h?? propriedades cadastradas!</p>
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
    </div>
    <!-- // END header-layout -->
@endsection
