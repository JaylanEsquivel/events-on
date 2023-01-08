@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="row">

        <div class="col-md-10 offset-md-1" id="event-container-one">

            <div class="row">

                <div id="image-container" class="col-md-6">
                    <img @if($event->image) src="/dist/img/events/{{$event->image}}" @else src="/dist/img/one.png" @endif class="img-fluid" alt="{{$event->title}}">
                </div>
                <div id="info-container" class="col-md-6">

                    <h1>{{$event->title}}</h1>
                    <p class="event-city"> <ion-icon name="location-outline"></ion-icon> {{$event->city}}</p>

                    <p class="event-participants"><ion-icon name="people-outline"></ion-icon> X-participantes</p>
                    <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do Evento</p>
                    <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>

                </div>



            </div>
            <div class="row">
                <div id="sobre-container" class="col-md-12">
                    <h1>Sobre Evento</h1>
                    <p>{{$event->description}}</p>
                </div>



            </div>


        </div>

    </div>

@endsection