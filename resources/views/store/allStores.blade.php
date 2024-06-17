@extends('layouts.storelayout')

@section('title', 'Marques')
@section('styling')
   <style>
        .nos-marques .title{
            font-size: 25px
        }
       
        .marques div {
            height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }
        .marques a{
            text-decoration: none;
            color: black
        }
        .marques{
            display: grid;
            grid-template-columns: auto auto auto auto; /* Four columns with equal width */
            gap: 26px; 
        }
   </style>
@endsection
@section('content')
    <div class="mt-md-5 pt-md-5 mt-5 container">
        <div class="d-flex justify-content-between nos-marques mt--md-5">
            <p class="font-weight-bold title">Nos Marques</p>
            {{-- <div class="dropdown">
                <button class="btn btn-gray dropdown-toggle shadow-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes Categories
                </button>
                <div class="dropdown-menu bg-white" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Marque 1</a>
                  <a class="dropdown-item" href="#">Marque 1</a>
                  <a class="dropdown-item" href="#">Marque 1</a>
                </div>
              </div> --}}
        </div>
        <div class="container">
            <div class="my-md-5 my-2 marques ">
                @foreach ($stores as $item)
                <a class="boutique-card shadow rounded" href="{{route('store.show', $item->id)}}">
                    <div class="profile bg-white">
                        <img src="{{ asset('pictures/storeLogos/' . $item->logo) }}" alt="profile">
                    </div>

                    <div class="boutique-image">
                        <img src="{{ asset('pictures/storeCovera/' . $item->cover) }}" alt="profile">
                    </div>
                    <div class="boutique-name">
                        <h5>
                            {{ $item->storeName }}
                        </h5>
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>
        
    </div>
    
@endsection
