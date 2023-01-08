@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Meus Eventos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            @if(count($events) > 0)

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Data</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Participantes</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <th scope="row">
                                        <img src="/dist/img/events/{{$item->image}}" alt="{{$item->title}}" class="img-fluid" width="100">
                                    </th>
                                    <th scope="row">{{date('d/m/Y', strtotime($item->date))}}</th>
                                    <th scope="row"><a href="/event/{{$item->id}}" target="_blank">{{ $item->title }}</a></th>
                                    <th scope="row">0</th>
                                    <th scope="row">
                                        <a href="/events/edit/{{$item->id}}" class="btn btn-info">Editar</a>

                                        <form action="/events/{{$item->id}}" method="post" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            @else
                <p>Você ainda não tem eventos <a href="/event/create">Criar um evento</a></p>
            @endif


        </div>
    </div>




@endsection
