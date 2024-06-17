@extends('layouts.storelayout')
@section('title', 'Store')
@section('content')

    <div class="mt-4 mt-md-5 pt-0 pt-md-5  mx-auto row product-container ">
        <div class="col-0 col-md-3 d-md-block d-none    ">
            <x-side-bar :categories="$cats" />
        </div>
       
        <div class="col-12 col-md-9 mt-4">
            <div class=''>
                <img style="width:100%" class="banner" src="{{ asset('img/banner.png') }}">
            </div>
            <div class='category-conent my-md-4 my-1'>

                @foreach ($products as $item)
                    <div>
                        <div class="card">
                            @if ($item->discount > 0)
                                <p class='promo'>promo {{ $item->discount }}%</p>
                            @endif
                            <a href="{{ route('store.product.details', $item->id) }}" class="text-center">
                                <img class='mx-auto py-md-2 py-0'
                                    src="{{ asset('pictures/Products/' . $item->picture) }}" alt="Card image cap">
                            </a>
                            <div class="p-md-2 p-1 desc">
                                <a href="{{ route('store.product.details', $item->id) }}">
                                    <p class="font-weight-bold mb-1">{{ $item->name }}</p>
                                </a>

                                <p class="marque mb-1"><span style="font-size: 12px">Marque : </span>
                                    <span class="category-name"><b>{{ $item->category->name }}</b></span></p>
                                <div class="d-md-flex d-none">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    (24)
                                </div>
                                <p class="font-weight-bold mb-1">{{ $item->price }} DA</p>
                                <form class='px-3 my-2' method="post" action="{{route('cart.store')}}">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="product_id" readonly>
                                    <div class='row my-2 d-none'>
                                        Qte :
                                        <button class='col-2 text-center' onclick="minQty(event)">-</button>
                                        <input class='col-4 text-center' id="qty" min="1"
                                            max="{{ $item->quantity }}" value="1"  type="number" name="qte" />
                                        <button class='col-2 text-center' onclick="addQty(event)">+</button>
                                    </div>
                                    <div class='row'>
                                        <button class="btn btn-primary col-12"><i class="bi bi-cart"></i> Ajouter au
                                            panier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                @endforeach

            </div>
        </div>
    </div>



@endsection
@section('scripts')
    <script>
        function minQty(event) {
            // Prevent the default button behavior
            event.preventDefault();

            // Find the closest parent card and the quantity input within it
            const card = event.target.closest('.card');
            const qtyInput = card.querySelector('input[name="qte"]');

            if (qtyInput.value > qtyInput.min ) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
            
            
        }

        function addQty(event) {
            // Prevent the default button behavior
            event.preventDefault();

            // Find the closest parent card and the quantity input within it
            const card = event.target.closest('.card');
            const qtyInput = card.querySelector('input[name="qte"]');
            
            qtyInput.value = parseInt(qtyInput.value) + 1;
            
        }
        
        document.querySelectorAll('.category-name').forEach(function(element) {
            let text = element.innerText;
            if (text.length > 12) {
                element.innerText = text.substring(0, 12) + '...';
            }
    });
    </script>
@endsection
