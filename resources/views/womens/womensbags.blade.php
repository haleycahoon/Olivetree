@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-5 mb-4">Women's Bags</h1>
    <div class="row">
        @foreach($clothes as $cloth)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/womens/bags/' . $cloth->image) }}" class="card-img-top"
                    alt="{{ $cloth->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $cloth->name }}</h5>
                    <p class="card-text">{{ $cloth->description }}</p>
                    <p class="card-text price">${{ $cloth->price }}</p>
                </div>
                <div class="card-footer">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="cloth_id" value="{{ $cloth->id }}">
                        <button type="submit" class="btn">Add to Cart</button>
                    </form>
                    <form action="{{ route('favorites.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="cloth_id" value="{{ $cloth->id }}">
                        <button type="submit" class="btn">Favorite</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{ $clothes->links('pagination::bootstrap-4')}} 
@endsection
