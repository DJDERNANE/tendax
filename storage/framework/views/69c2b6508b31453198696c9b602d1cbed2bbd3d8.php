

<?php $__env->startSection('title', 'Marques'); ?>
<?php $__env->startSection('styling'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mt-5 pt-5 container">
        <div class="mt-5">
            <img width="300" height="100" src="<?php echo e(asset('pictures/Brands/' . $brand->picture)); ?>"
            alt="marque">
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis in nibh massa eget. Lorem velit, commodo
                vitae nulla sed volutpat rhoncus sed.
            </p>
        </div>
        <div class=" nos-marques">
            <p class="title font-weight-bold mt-5">List des produits “<?php echo e($brand->name); ?>”</p>
            <div class='products  my-4'>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="card">
                            <?php if($item->discount > 0): ?>
                                <p class='promo'>promo <?php echo e($item->discount); ?>%</p>
                            <?php endif; ?>
                            <a href="<?php echo e(route('store.product.details', $item->id)); ?>">
                                <img class='mx-auto py-2'
                                    src="<?php echo e(asset('pictures/Products/' . $item->picture)); ?>"alt="Card image cap">
                            </a>
                            <div class="p-2 desc">
                                <a href="<?php echo e(route('store.product.details', $item->id)); ?>">
                                    <p class="font-weight-bold mb-1"><?php echo e($item->name); ?></p>
                                </a>

                                <p class="marque mb-1"><span>Marque </span><?php echo e($item->category->name); ?></p>
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    (24)
                                </div>
                                <p class="font-weight-bold mb-1"><?php echo e($item->price); ?> DA</p>
                                <form class='px-3 my-2' method="post" action="<?php echo e(route('cart.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" value="<?php echo e($item->id); ?>" name="product_id" readonly>
                                    <div class='row my-2'>
                                        Qte :
                                        <button class='col-2 text-center' onclick="minQty(event)">-</button>
                                        <input class='col-4 text-center' id="qty" min="1"
                                            max="<?php echo e($item->quantity); ?>" value="1" type="number" name="qte" />
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/marqueProducts.blade.php ENDPATH**/ ?>