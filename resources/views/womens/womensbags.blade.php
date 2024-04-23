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
                    <button class="btn add-to-cart" data-item-id="{{ $cloth->id }}">Add to Cart</button>
                    <button class="btn add-to-favorites" data-item-id="{{ $cloth->id }}">Favorite</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{ $clothes->links('pagination::bootstrap-4')}} 
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.add-to-cart').click(function(e) {
            e.preventDefault();
            var itemId = $(this).data('item-id');
            $.ajax({
                url: "{{ route('cart.add') }}",
                method: 'POST',
                data: { item_id: itemId, _token: '{{ csrf_token() }}' },
                success: function(response) {
                    alert('Item added to cart');
                    // Update cart count in navbar or reload page
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('.add-to-favorites').click(function(e) {
            e.preventDefault();
            var itemId = $(this).data('item-id');
            $.ajax({
                url: "{{ route('favorites.add') }}",
                method: 'POST',
                data: { item_id: itemId, _token: '{{ csrf_token() }}' },
                success: function(response) {
                    alert('Item added to favorites');
                    // Update favorites count in navbar or reload page
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endpush



<style>
.btn {
    background-color: #93a04a !important; /* Green color */
    color: #fff; /* Text color */
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #7a8340 !important; /* Darker green on hover */
}
</style>
