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
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.patner') }}"><i
                                                class="material-icons icon-20pt">home</i></a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('Intenção de compra') }}</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">{{ __('Intenção de compra') }}</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">

                    <form method="POST" action="" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Cadastro Intenção Compra</strong></p>

                                </div>
                                <div class="col-lg-8 card-form__body card-body">

                                    <div class="">


                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- // END drawer-layout__content -->
            @include('layouts.drawer-patner')

            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

        <!-- // END header-layout -->
    @endsection
