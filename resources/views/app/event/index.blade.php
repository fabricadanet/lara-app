@extends('layouts.app')
@section('title', 'Franchise')
@section('content')
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
                                    <li class="breadcrumb-item active">Agenda</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Agenda</h1>
                        </div>
                        <a href="{{ route('event.create') }}" class="ml-3 btn btn-success">Registrar Agendamento</a>
                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div>

                    </div>
                    <div id="calendar"></div>
                </div>

            </div>
            @include('layouts.drawer-patner')
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {

                initialView: 'dayGridMonth',
                locale: 'pt-br',
                editable: true,
                eventLimit: true,
                events: '{{ route('event.getEvents') }}',

            });
            calendar.render();
        });
    </script>
@endsection
