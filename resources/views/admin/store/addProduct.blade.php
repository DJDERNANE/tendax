@extends('layouts.adminStorePanel')

@section('title', 'Ajouter Produit')
@section('content')
    <div class="bg-white rounded-3 container my-5  p-4 ">
        <h3>Ajouter Produit</h3>
        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data"
            class="fs-5 my-4 addproduct">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="my-4 col-6">
                            <label for="name" class="my-2">Nom de produit:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="name"
                                name="name">
                        </div>
                        <div class="my-4 col-6  ">
                            <label for="ref" class="my-2">Reference:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="ref"
                                name="ref">
                        </div>

                        <div class="my-4 col-7">
                            <label for="boutique">Boutique</label> <br>
                            <select name="boutique" id="boutique" class="px-2 py-2 bg-light border-0 rounded my-2"> <br>
                                <option value="" selected>Selectionner</option>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}" selected>{{ $store->storeName }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-5">
                            {{-- <br>
                            <br>
                            <div class="d-flex jusify-content-start align-items-center">
                                afficher la boutique <input type="checkbox" name=""
                                    style="width: min-content; margin-left:10px">
                            </div> --}}

                        </div>
                        <div class="my-4 col-10">
                            <label for="quantity" class="my-2">Quantite:</label>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="quantity"
                                        name="qty">
                                </div>
                                {{-- <div class="col-4 px-2 my-2 d-flex justify-content-between aligni-items-center">
                                    <button class="btn btn-danger rounded-3 " style="height: 40px"> Soustraire</button>
                                    <button class="btn primary " style="height: 40px">Ajouter</button>
                                </div> --}}


                            </div>

                        </div>

                        <div class="my-4 col-6">
                            <label for="price" class="my-2">Prix:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="price"
                                name="price">
                        </div>
                        <div class="my-4 col-6 ">
                            <label for="remise" class="my-2">Remise:</label> <br>
                            <input type="number" class="px-2 py-1 bg-light border-0 rounded my-2" id="remise"
                                name="discount" min="0" value="0">
                        </div>
                        <div id="dateremise">
                            <div class="my-4 col-6  ">
                                <label for="debut" class="my-2">Debut:</label> <br>
                                <input type="date" class="px-2 py-1 bg-light border-0 rounded my-2" id="debut"
                                    name="debut">
                            </div>
                            <div class="my-4 col-6  ">
                                <label for="fin" class="my-2">Fin:</label> <br>
                                <input type="date" class="px-2 py-1 bg-light border-0 rounded my-2" id="fin"
                                    name="fin">
                            </div>
                        </div>
                        <div class="my-4 col-6">
                            <label for="cat">Categories Level 1</label>
                            <select name="cats[]" id="categories" multiple>
                                @foreach ($cats as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="sub-categories-container-2" class="my-4 col-6">
                            <label for="sub-cat-level-2">Categories Level 2</label>
                            <select name="cats[]" id="sub-cat-level-2" class="sub-cat-level" multiple>
                                <option value="">Select Sub Category Level 2</option>
                            </select>
                        </div>
                        <div id="sub-categories-container-3" class="my-4 col-6">
                            <label for="sub-cat-level-3">Categories Level 3</label>
                            <select name="cats[]" id="sub-cat-level-3" class="sub-cat-level" multiple>
                                <option value="">Select Sub Category Level 3</option>
                            </select>
                        </div>
                        <div id="sub-categories-container-4" class="my-4 col-6">
                            <label for="sub-cat-level-4">Categories Level 4</label>
                            <select name="cats[]" id="sub-cat-level-4" class="sub-cat-level" multiple>
                                <option value="">Select Sub Category Level 4</option>
                            </select>
                        </div>


                        <div class="my-4 col-12">
                            <label for="brand">Marque : </label>
                            <div class="row">
                                <div class="col-9">
                                    <select name="brand" id="brand"
                                        class="px-2 py-2 bg-light border-0 rounded my-2">
                                        <br>
                                        <option value="" selected>Selectionner</option>
                                        @foreach ($brands as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="col-3">
                                    <button class="px-4 py-2 my-2 btn primary ">Autre</button>
                                </div>
                                <div class="col-12">
                                    <div class="my-4 col-12">
                                        <label for="nameMarque" class="my-2">Nom de Marque:</label> <br>
                                        <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2"
                                            id="name" name="Marque">
                                    </div>
                                    <div class="my-4 col-12">
                                        <label for="logo">Logo</label>
                                        <input type="file" name="logo" id="logo">
                                    </div>
                                </div> --}}

                            </div>


                        </div>
                    </div>


                </div>
                <div class="col-4">
                    <div class="col-12">
                        <div class="my-4">
                            <label for="">Image : </label>
                            <input type="file" name="picture" class="my-2">
                        </div>
                        <div class="my-4">
                            <label for="">Gallery : </label>
                            <input type="file" name="gallery[]" multiple class="my-2">
                        </div>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <label for="desc"> Description</label> <br>
                    <textarea name="desc" id="desc" rows="8" class="col-12 my-2 rounded-3 p-2" placeholder="text ... "></textarea>
                </div>
                <div class="col-12 my-4">
                    <label for="details"> Description Detaile</label><br>
                    <textarea name="details" id="details" rows="8" class="col-12 my-2 rounded-3 p-2" placeholder="text ... "></textarea>
                </div>

                <div class="col-12 my-4">
                    <label for="files"> Fichiers joints</label> <br>
                    <input type="file" name="files[]" multiple id="files" class="my-2 ">
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="primary rounded-3 py-1 px-5 border-0"> Valider </button>
                </div>



            </div>


        </form>




    </div>

@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#details'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const remiseValue = document.querySelector('#remise');
            const remiseDate = document.querySelector('#dateremise');
            if (remiseValue.value > 0) {
                remiseDate.style.display = 'flex';
            } else {
                remiseDate.style.display = 'none';
            }

            remiseValue.addEventListener('change', function() {
                if (remiseValue.value > 0) {
                    remiseDate.style.display = 'flex';
                } else {
                    remiseDate.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        // Assuming this is your main function or script context
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize MultiSelectTag for the root categories
            new MultiSelectTag('categories', {
                rounded: true,
                shadow: true,
                placeholder: 'Search',
                tagColor: {
                    textColor: '#327b2c',
                    borderColor: '#92e681',
                    bgColor: '#eaffe6',
                },
                onChange: function(values) {
                    loadSubCategories(values, 1);
                }
            });
            let levels = [2, 3, 4]
            levels.forEach(level => {

                new MultiSelectTag(`sub-cat-level-${level}`, {
                    rounded: true,
                    shadow: true,
                    placeholder: 'Search',
                    tagColor: {
                        textColor: '#327b2c',
                        borderColor: '#92e681',
                        bgColor: '#eaffe6',
                    },
                    // onChange: function(subValues) {
                    //     loadSubCategories(subValues, nextLevel);
                    // }
                });
            });
        });



        function loadSubCategories(selectedOptions, level) {
            selectedOptions.forEach(option => {
                const parentId = option.value;

                fetch(`/categories/children/${parentId}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        const nextLevel = level + 1;
                        let selectElement = document.querySelector(`#sub-cat-level-${nextLevel}`);
                        // Add fetched options
                        console.log(selectElement)
                        data.forEach(category => {
                            const option = document.createElement('option');
                            option.value = category.id;
                            option.textContent = category.name;
                            selectElement.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching subcategories:', error));
            });
        }
    </script>
@endsection
