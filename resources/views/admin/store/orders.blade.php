@extends('layouts.adminStorePanel')

@section('title', 'orders')
@section('content')
    <div class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="" class="me-2 active">Orders</a> </h6>
                
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">
            <div class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
                <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">


                    <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                    <button class="px-2 border-0  bg-transparent"><i
                            class="bi bi-search text-primary text-black fs-5 "></i></button>


                </form>

            </div>
            <div class="d-flex">
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Marque
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Quantite
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <button class="primary border-0 px-4 mx-1 rounded-3">Filter</button>
            </div>

        </div>
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user</th>
                    <th scope="col">Total</th>    
                    <th scope="col">Details</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th scope="row">{{ $item->user->nom }}</th>
                        <th scope="row">{{ $item->total_price }}</th>
                        <td>
                            <a href="{{route('orders.details', $item->id)}}">
                                <button class="border-0 btn btn-primary">
                                    Details
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
