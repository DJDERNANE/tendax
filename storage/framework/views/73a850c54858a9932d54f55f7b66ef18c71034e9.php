<!-- resources/views/store/cart.blade.php -->

<?php $__env->startSection('title', 'Store'); ?>
<?php $__env->startSection('content'); ?>

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
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th>
                            <div class="d-flex justify-content-start align-items-center">
                                <img class="mr-3" src="<?php echo e(asset('pictures/Products/' . $item['picture'])); ?>"
                                    width="100" height="100" alt="Card image cap">
                                <h6><?php echo e($item['name']); ?></h6>
                            </div>
                        </th>
                        <td><?php echo e($item['price']); ?> DA</td>
                        <td class="qte-cart">
                            Qte:
                            <button class='col-2 text-center' onclick="minQty(event, <?php echo e($item['price']); ?>)">-</button>
                            <input class='col-4 text-center' id="qty-<?php echo e($loop->index); ?>" min="1" max="10" value="<?php echo e($item['quantity']); ?>"
                                type="number" name="quantities[<?php echo e($item['product_id']); ?>]" onchange="updateQty(<?php echo e($loop->index); ?>, <?php echo e($item['price']); ?>)" />
                            <button class='col-2 text-center' onclick="addQty(event, <?php echo e($item['price']); ?>)">+</button>
                        </td>
                        <td id="total-<?php echo e($loop->index); ?>"><?php echo e($item['price'] * $item['quantity']); ?> DA</td>
                        <td>
                            <a href="">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th></th>
                        <td></td>
                        <td><h6>Total</h6></td>
                        <td id="grand-total">0 DA</td>
                    </tr>
                </tbody>
            </table>

            <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="bg-white rounded shadow my-3 col-12 p-3">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="grand-total-input" name="total_price">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control bg-light" type="text" name="address" value="<?php echo e(old('address')); ?>" required>
                    </div>
                </div>
                <div class="col-12 form-group text-right">
                    <button type="submit" class="btn btn-primary">Commander</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/cart.blade.php ENDPATH**/ ?>