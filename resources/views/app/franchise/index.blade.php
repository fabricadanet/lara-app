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
                                    <li class="breadcrumb-item active">{{ __('crud.franchises.name') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('crud.franchises.name') }}</h1>
                        </div>
                        <a href="{{route('franchises.create')}}" class="btn btn-success ml-3">{{__('crud.franchises.create_title')}}</a>
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
                                            <th class="text-center">{{__('crud.properties.name')}}</th>
                                            <th class="">Corretores</th>
                                            <th class="text-right">Contato</th>
                                            <th class="text-center">Ações</th>

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
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#2</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#3</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#4</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#5</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#6</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#7</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#8</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#9</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                                                                class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#10</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                                  class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                                  class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                                  class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
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
                                            <div class="badge badge-soft-dark">#10</div>
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/images/avatars/clem-onojeghuo-192088.jpg')}}"
                                                 alt="product" style="width:35px" class="rounded mr-2">
                                            <a href="#">Imobiliaria</a>
                                        </td>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="#"> 1500</a></td>
                                        <td style="width:200px">

                                            <i class="material-icons icon-18pt text-muted mr-1">list</i> <a
                                                href="#"> 0 </a>

                                        </td>

                                        <td class="text-right">47 1234 5678</td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-success">VER</a>
                                        </td>
                                        <td class=""><a href="{{route('franchises.create') }}"
                                                        class="btn btn-sm btn-primary">EDITAR</a>
                                        </td>
                                        <td class=""><a href="#"
                                                        class="btn btn-sm btn-danger">DELETAR</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

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
