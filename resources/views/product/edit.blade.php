@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Aktualizuj Produkt</h2>
    <hr>

    <form action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="picture" class="form-label">Wybierz zdjecie</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Tytul</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}" placeholder="Wstaw tytul">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Cena</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}" placeholder="Wstaw cene">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" name="description" id="description" placeholder="Wstaw Opis">{{ $product->description }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Aktualizuj</button>

    </form>

</div>


@endsection



