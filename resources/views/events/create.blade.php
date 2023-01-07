@extends('layouts.main')

@section('title', 'Cria Eventos')

@section('content')

<div class="row">

    <div id="crete-events" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Evento</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Evento">
            </div>
            <div class="mb-3">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="cidade">
            </div>
            <div class="mb-3">
                <label for="">O Evento é privado?</label>

                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Descrição</label>
                <textarea name="description" rows="4" style="resize: none" id="description" class="form-control" placeholder="Descrição"></textarea>
            </div>
            <div class="mb-3">
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-success" value="Criar Evento">
                </div>
            </div>

        </form>

    </div>

</div>


@endsection

