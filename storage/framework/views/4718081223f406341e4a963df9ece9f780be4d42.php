
<?php $__env->startSection('title', 'Store'); ?>
<?php $__env->startSection('content'); ?>

    <div class="mt-4 mt-md-5 pt-0 pt-md-5  mx-auto row product-container ">
        <div class="col-0 col-md-3 d-md-block d-none    ">
            <?php if (isset($component)) { $__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SideBar::class, ['categories' => $cats]); ?>
<?php $component->withName('side-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e)): ?>
<?php $component = $__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e; ?>
<?php unset($__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e); ?>
<?php endif; ?>
        </div>
       
        <div class="col-12 col-md-9 mt-4">
            <div class=''>
                <img style="width:100%" class="banner" src="<?php echo e(asset('img/banner.png')); ?>">
            </div>
            <div class='category-conent my-md-4 my-1'>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="card">
                            <?php if($item->discount > 0): ?>
                                <p class='promo'>promo <?php echo e($item->discount); ?>%</p>
                            <?php endif; ?>
                            <a href="<?php echo e(route('store.product.details', $item->id)); ?>" class="text-center">
                                <img class='mx-auto py-md-2 py-0'
                                    src="<?php echo e(asset('pictures/Products/' . $item->picture)); ?>" alt="Card image cap">
                            </a>
                            <div class="p-md-2 p-1 desc">
                                <a href="<?php echo e(route('store.product.details', $item->id)); ?>">
                                    <p class="font-weight-bold mb-1"><?php echo e($item->name); ?></p>
                                </a>

                                <p class="marque mb-1"><span style="font-size: 12px">Marque : </span>
                                    <span class="category-name"><b><?php echo e($item->brand->name); ?></b></span></p>
                                <div class="d-md-flex d-none">
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
                                    <div class='row my-2 d-none'>
                                        Qte :
                                        <button class='col-2 text-center' onclick="minQty(event)">-</button>
                                        <input class='col-4 text-center' id="qty" min="1"
                                            max="<?php echo e($item->quantity); ?>" value="1"  type="number" name="qte" />
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
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/products.blade.php ENDPATH**/ ?>