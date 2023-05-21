@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">Wszystkie Produkty :O</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-xl-" style="display:flex">
            @foreach ($products as $product)
            <div class="card mb-3" style="width: 25rem;">
                <img src="images/{{ $product->picture }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <h5 class="card-title">Cena: ${{ $product->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $product->description}} </p>
                  <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Zobacz Szczegóły</a>

                </div>
              </div>
            @endforeach
        </div>
    </div>
    <a class="btn btn-primary btn-lg"  href="/products/create" role="button">Dodaj Nowy Produkt</a>
    @auth
        @if(Auth::user()->role_as == '1')
        <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-lg">Panel administracyjny</a>
        @endif
    @endauth
</div>


@endsection
