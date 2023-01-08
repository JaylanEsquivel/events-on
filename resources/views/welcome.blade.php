@extends('layouts.main')

@section('title', 'Jaylan')

@section('content')

    <div class="row">
        <div id="search-container" class="col-md-12">
            <h1 class="text-center">Buscar um Evento</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="procurar evento">
            </form>

        </div>
    </div>
    <div class="row">
        <div id="events-container" class="col-md-12">
            <h2>Proximos eventos</h2>
            <p>Veja nossos eventos dos proximos dias.</p>
            <div id="card-container" class="row">

                @foreach ($events as $event)

                <div class="card col-md-3">

                    <img @if($event->image) src="/dist/img/events/{{$event->image}}" @else src="/dist/img/one.png" @endif alt="{{$event->date}}">

                    <div class="card-body">
                        <div class="card-date">2023</div>
                        <div class="card-title">{{$event->title}}</div>
                        <p class="card-participantes">X participantes</p>
                        <a href="/event/{{$event->id}}" class="btn btn-primary">Saber mais...</a>
                    </div>


                </div>

                @endforeach

            </div>

        </div>
    </div>


@endsection

