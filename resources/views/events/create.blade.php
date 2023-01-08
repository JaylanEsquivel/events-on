@extends('layouts.main')

@section('title', 'Cria Eventos')

@section('content')

<div class="row">

    <div id="crete-events" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image">Imagendo Evento</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="mb-3">
                <label for="title">Evento</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Evento">
            </div>

            <div class="mb-3">
                <label for="date">Data do Evento</label>
                <input type="date" name="date" id="date" class="form-control" >
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
                <label for="items">Addcione itens de Infraestrutura:</label>
                <div class="mb-3">
                    <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="items[]" id="items" value="Palco"> Palco
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="items[]" id="items" value="Open Food"> Open Food
                </div>
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

