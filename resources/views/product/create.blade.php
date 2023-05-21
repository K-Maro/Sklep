@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Dodaj nowy prdukt</h2>
    <hr>

    <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="picture" class="form-label">Wybierz zdjęcie</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Tytuł</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Wpisz tytuł">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Cena</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Wpisz cene">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" name="description" id="description" placeholder="Wpisz opis"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Prześlij</button>

    </form>

</div>


@endsection



