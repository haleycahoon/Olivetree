@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-5 mb-4">Favorite Items</h1>
    <!-- <div class="row">
        @foreach($favoriteClothes as $cloth)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/womens/bags/' . $cloth->image) }}" class="card-img-top"
                    alt="{{ $cloth->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $cloth->name }}</h5>
                    <p class="card-text">{{ $cloth->description }}</p>
                    <p class="card-text price">${{ $cloth->price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> -->
@endsection
