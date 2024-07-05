@extends('layouts.adminStorePanel')

@section('title', 'Categories')

@section('content')

    <div class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="{{ route('categories.level', ['level' => 0]) }}" class="{{ $level == 0 ? 'bold' : '' }}">Level 0</a></h6>
                <h6><a href="{{ route('categories.level', ['level' => 1]) }}" class="{{ $level == 1 ? 'bold' : '' }}">Level 1</a></h6>
                <h6><a href="{{ route('categories.level', ['level' => 2]) }}" class="{{ $level == 2 ? 'bold' : '' }}">Level 2</a></h6>
                <h6><a href="{{ route('categories.level', ['level' => 3]) }}" class="{{ $level == 3 ? 'bold' : '' }}">Level 3</a></h6>
                <h6><a href="{{ route('categories.level', ['level' => 4]) }}" class="{{ $level == 4 ? 'bold' : '' }}">Level 4</a></h6>
            </div>

            <div>
                <button class="btn btn-danger rounded-3 supp-btn" disabled id="supp-btn">X Supprimer</button>
                <button type="button" class="btn primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter une Category</h5>
                            </div>
                            <div class="modal-body">
                                <form class="  store-form align-items-center p-2 rounded-3" method="post"
                                    action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nom : </label>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Icon : </label>
                                        <input class="form-control" type="file" name="icon">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Photo : </label>
                                        <input class="form-control" type="file" name="picture" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_id">Parent Category:</label>
                                        <select id="parent_id" name="parent_id">
                                            <option value="">No Parent</option>
                                            @foreach ($cats as $category)
                                                <option value="{{ $category->id }}" {{ old('parent_id') == $category->id ? 'selected' : '' }}>
                                                    {{ str_repeat('—', $category->level) }} {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow">
            <div class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
                <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">
                    <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                    <button class="px-2 border-0  bg-transparent"><i
                            class="bi bi-search text-primary text-black fs-5 "></i></button>
                </form>
            </div>
            <div class="filter-selects">
                @if ($level > 0)
                    <form action="{{ route('categories.level', ['level' => $level]) }}" method="get">
                        <div class="form-group">
                            <label for="parent_category">Parent Category:</label>
                            <select id="parent_category" name="parent_category">
                                <option value="">All</option>
                                @foreach ($parentCategories as $cat)
                                    <option value="{{ $cat->id }}" {{ request('parent_category') == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>

        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" name="all" id="select-all"></th>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $item)
                    <tr>
                        <td><input type="checkbox" name="item[]" value="{{ $item->id }}"></td>
                        <th scope="row">{{ $item->id }}</th>
                        <td>
                            <img class="col-3 shadow-sm bg-white icon"
                                src="{{ asset('pictures/Category/Icons' . $item->icon) }}" alt="image">
                            {{ $item->name }}
                        </td>
                        <td>
                            <img class="col-3 shadow-sm bg-white"
                                src="{{ asset('pictures/Category/' . $item->picture) }}" alt="image">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
