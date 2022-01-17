@extends('layouts.app')
@section('title', 'Franchise')
@section('content')
    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">

                <div class="container-fluid page__heading-container">
                    <div class="page__heading">
                        <nav aria-label="breadcrumb">
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Agenda</h1>
                    </div>
                </div>

                <div class="container-fluid page__container">
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
                events: [{
                        title: 'Casa na praia',
                        start: '2021-12-23T10:00:00',
                        end: '2021-12-23T12:00:00',
                        color: '#ff0000',
                    },
                    {
                        title: 'Cobertura na Orla',
                        start: '2021-12-23T14:00:00',
                        end: '2021-12-23T16:00:00',
                        color: 'green',
                    },
                    {
                        title: 'Terreno na praia',
                        start: '2021-12-22T12:30:00',
                        end: '2021-12-22T14:30:00',
                        color: 'yellow',
                    },
                    {
                        title: 'Casa na praia',
                        start: '2021-12-20T10:00:00',
                        end: '2021-12-20T12:00:00',
                        color: '#ff0000',
                    },
                    {
                        title: 'Cobertura na Orla',
                        start: '2021-12-10T14:00:00',
                        end: '2021-12-10T16:00:00',
                        color: 'green',
                    },
                    {
                        title: 'Terreno na praia',
                        start: '2021-12-13T12:30:00',
                        end: '2021-12-13T14:30:00',
                        color: 'yellow',
                    },
                    {
                        title: 'Casa na praia',
                        start: '2021-12-23T17:00:00',
                        end: '2021-12-23T20:00:00',
                        color: '#ff0000',
                    },
                    {
                        title: 'Cobertura na Orla',
                        start: '2021-12-15T14:10:00',
                        end: '2021-12-15T16:00:00',
                        color: 'green',
                    },
                    {
                        title: 'Terreno na praia',
                        start: '2021-12-07T12:30:00',
                        end: '2021-12-07T14:30:00',
                        color: 'yellow',
                    }

                ]

            });
            calendar.render();
        });
    </script>
@endsection
