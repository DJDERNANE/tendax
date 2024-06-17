@extends('layouts.storelayout')

@section('title', 'Marques')
@section('styling')

@endsection
@section('content')
    <div class="mt-5 pt-5 container">
        <div class="mt-5">
            <img width="300" height="100" src="{{ asset('pictures/Brands/' . $brand->picture) }}"
            alt="marque">
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis in nibh massa eget. Lorem velit, commodo
                vitae nulla sed volutpat rhoncus sed.
            </p>
        </div>
        <div class=" nos-marques">
            <p class="title font-weight-bold mt-5">List des produits “{{$brand->name}}”</p>
            <div class='products  my-4'>
                @foreach ($products as $item)
                    <div>
                        <div class="card">
                            @if ($item->discount > 0)
                                <p class='promo'>promo {{ $item->discount }}%</p>
                            @endif
                            <a href="{{ route('store.product.details', $item->id) }}">
                                <img class='mx-auto py-2'
                                    src="{{ asset('pictures/Products/' . $item->picture) }}"alt="Card image cap">
                            </a>
                            <div class="p-2 desc">
                                <a href="{{ route('store.product.details', $item->id) }}">
                                    <p class="font-weight-bold mb-1">{{ $item->name }}</p>
                                </a>

                                <p class="marque mb-1"><span>Marque </span>{{ $item->category->name }}</p>
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    (24)
                                </div>
                                <p class="font-weight-bold mb-1">{{ $item->price }} DA</p>
                                <form class='px-3 my-2' method="post" action="{{ route('cart.store') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="product_id" readonly>
                                    <div class='row my-2'>
                                        Qte :
                                        <button class='col-2 text-center' onclick="minQty(event)">-</button>
                                        <input class='col-4 text-center' id="qty" min="1"
                                            max="{{ $item->quantity }}" value="1" type="number" name="qte" />
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
                    </a>
                @endforeach


            </div>
        </div>

    </div>

@endsection
