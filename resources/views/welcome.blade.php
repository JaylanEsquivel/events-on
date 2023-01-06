@extends('layouts.main')

@section('title', 'Jaylan')

@section('content')


    @foreach ($events as $item)
        <h1>{{$item->title}}</h1>
        <p>{{$item->description}} </p>
    @endforeach

@endsection

