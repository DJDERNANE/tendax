<!-- resources/views/store/cart.blade.php -->
@extends('layouts.storelayout')
@section('title', 'Store')
@section('content')

<div class="mt-5 pt-5 mx-auto row">
    <div class="col-10 container mt-4">
        <div class='row container g-2 my-4'>
            <table class="table bg-white rounded shadow my-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prix unitaire TTC</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total TTC</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <th>
                            <div class="d-flex justify-content-start align-items-center">
                                <img class="mr-3" src="{{ asset('pictures/Products/' . $item['picture']) }}"
                                    width="100" height="100" alt="Card image cap">
                                <h6>{{ $item['name'] }}</h6>
                            </div>
                        </th>
                        <td>{{ $item['price'] }} DA</td>
                        <td class="qte-cart">
                            Qte:
                            <button class='col-2 text-center' onclick="minQty(event, {{ $item['price'] }})">-</button>
                            <input class='col-4 text-center' id="qty-{{ $loop->index }}" min="1" max="10" value="{{ $item['quantity'] }}"
                                type="number" name="quantities[{{ $item['product_id'] }}]" onchange="updateQty({{ $loop->index }}, {{ $item['price'] }})" />
                            <button class='col-2 text-center' onclick="addQty(event, {{ $item['price'] }})">+</button>
                        </td>
                        <td id="total-{{ $loop->index }}">{{ $item['price'] * $item['quantity'] }} DA</td>
                        <td>
                            <a href="">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <th></th>
                        <td></td>
                        <td><h6>Total</h6></td>
                        <td id="grand-total">0 DA</td>
                    </tr>
                </tbody>
            </table>

            <form action="{{ route('orders.store') }}" method="POST" class="bg-white rounded shadow my-3 col-12 p-3">
                @csrf
                <input type="hidden" id="grand-total-input" name="total_price">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control bg-light" type="text" name="address" value="{{ old('address') }}" required>
                    </div>
                </div>
                <div class="col-12 form-group text-right">
                    <button type="submit" class="btn btn-primary">Commander</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        updateGrandTotal();
    });

    function minQty(event, price) {
        event.preventDefault();

        const card = event.target.closest('.qte-cart');
        const qtyInput = card.querySelector('input[name="qte"]');
        const index = qtyInput.id.split('-')[1];

        if (qtyInput.value > qtyInput.min) {
            qtyInput.value = parseInt(qtyInput.value) - 1;
            updateQty(index, price);
        }
    }

    function addQty(event, price) {
        event.preventDefault();

        const card = event.target.closest('.qte-cart');
        const qtyInput = card.querySelector('input[name="qte"]');
        const index = qtyInput.id.split('-')[1];

        if (qtyInput.value < qtyInput.max) {
            qtyInput.value = parseInt(qtyInput.value) + 1;
            updateQty(index, price);
        }
    }

    function updateQty(index, price) {
        const qtyInput = document.getElementById(`qty-${index}`);
        const totalCell = document.getElementById(`total-${index}`);
        const quantity = parseInt(qtyInput.value);

        totalCell.textContent = (quantity * price) + ' DA';

        updateGrandTotal();
    }

    function updateGrandTotal() {
        let grandTotal = 0;
        document.querySelectorAll('td[id^="total-"]').forEach(function(totalCell) {
            grandTotal += parseInt(totalCell.textContent);
        });

        document.getElementById('grand-total').textContent = grandTotal + ' DA';
        document.getElementById('grand-total-input').value = grandTotal;
    }
</script>
@endsection
