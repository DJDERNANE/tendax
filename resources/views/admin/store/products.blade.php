@extends('layouts.adminStorePanel')

@section('title', 'Products')
@section('content')

    <div class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="{{ route('products.pending.all') }}" class="me-2">En Attente</a> </h6>
                <h6><a href="{{ route('products.accepted.all') }}" class="active">Accepter</a> </h6>
            </div>
            <a href="{{ route('admin.products.create') }}">
                <button class="btn primary ">+ Ajouter</button>
            </a>
        </div>

        <form  action="{{ route('products.filter') }}" method="GET" class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">

            <div class="d-flex align-items-center">
                <div class="d-flex bg-light store-form align-items-center p-2 rounded-3">
                    <input name="product_name" type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search" value="{{ old('product_name', request('product_name')) }}">
                </div>
                <div id="sub-categories-container-1">
                    <label for="cat">L1</label> <br>
                    <select name="category_id" id="level-1" class="sub-cat">
                        <option value="">select</option>
                        @foreach ($cats1 as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', request('category_id')) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="sub-categories-container-2">
                    <label for="level-2">L 2</label> <br>
                    <select name="category_id" id="level-2" class="sub-cat">

                    </select>
                </div>
                <div id="sub-categories-container-3">
                    <label for="level-3">L3</label> <br>
                    <select name="category_id" id="level-3" class="sub-cat">

                    </select>
                </div>
                <div id="sub-categories-container-4">
                    <label for="level-4">L4</label> <br>
                    <select name="category_id" id="level-4" class="sub-cat">

                    </select>
                </div> 

                <div id="sub-categories-container-3">
                    <label for="store_id">Store</label>
                    <select name="store_id" id="store_id" class="form-control">
                        <option value="">Select Store</option>
                        @foreach ($stores as $store)
                        <option value="{{ $store->id }}" {{ old('store_id', request('store_id')) == $store->id ? 'selected' : '' }}>{{ $store->storeName }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="sub-categories-container-4">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="">Select Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id', request('brand_id')) == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="primary border-0 px-4 mx-1 rounded-3">Filter</button>
            </div>

        </form>
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">Boutique</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">details</th>
                    <th scope="col">rejeter</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{ $item->store->storeName }}</th>
                        <td> <img class="col-3 shadow-sm bg-white" width="40" height="40"
                                src="{{ asset('pictures/Products/' . $item->picture) }}"
                                alt="payement methode">{{ $item->name }}</td>
                        <td>{{ $item->brand->name ?? 'NO BRAND' }}</td>
                        <td>{{ $item->store->user->phone }}</td>
                        <td>
                            <a href="{{ route('admin.product.edit', $item->id) }}" target="_blanck">
                                <button class="btn btn-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('product.reject', $item->id) }}">

                                <i class="bi bi-trash3-fill btn btn-danger"></i>

                            </a>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      
        function loadChildren(parentId, level) {
            // Find the next level
            let nextLevel = level + 1;
            if (nextLevel > 4) return;

            // Select the next level element
            let nextSelectElement = $(`#level-${nextLevel}`);
            nextSelectElement.html(''); // Clear previous options

            // Perform AJAX request to load children categories
            $.ajax({
                type: 'GET',
                url: `/categories/children/${parentId}`,
                success: function(data) {
                    $.each(data, function(index, category) {
                        nextSelectElement.append('<option value="' + category.id + '">' +
                            category.name + '</option>');
                    });
                }
            });
        }

        // Attach change event handlers to each select element
        $('.sub-cat').on('change', function(e) {
            let selectedParentId = $(this).val();
           
            let currentLevel = parseInt(this.id.split('-').pop());

            // Clear all subsequent levels
            for (let level = currentLevel + 1; level <= 4; level++) {
                $(`#level-${level}`).html('');
            }

            // Load children for the next level
            if (selectedParentId) {
                loadChildren(selectedParentId, currentLevel);
            }
        });
    });
</script>
