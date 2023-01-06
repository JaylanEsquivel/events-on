@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

    @if($id != null)
        <h1>Meus Contatos {{ $id }}</h1>
    @endif

@endsection
