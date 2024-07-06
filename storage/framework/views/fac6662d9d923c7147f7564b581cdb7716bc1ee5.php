

<?php $__env->startSection('title', 'Marques'); ?>
<?php $__env->startSection('styling'); ?>
    <style>
        .price {
            font-size: 25px;
        }

        button {
            outline: none;
            border: 1px solid gray;
            background-color: white
        }

        .item {
            background-color: white;
            border: 1px solid #BDBDBD
        }

        .item p:first-child {
            font-weight: bold;
            font-size: 13px
        }

        .item i {
            font-size: 30px
        }

        .populair-products .title p {
            font-size: 24px;
        }

        .populair-products .title span {
            width: 100%;
            height: 2px;
            background-color: #BDBDBD;
        }

        .pro-title {
            font-size: 24px
        }

        .doc {
            border: 1px solid #BDBDBD
        }

        .card {
            position: relative;
            overflow: hidden;
            height: 290px;

            cursor: pointer;
        }

        .products {
            display: grid;
            grid-template-columns: auto auto auto auto;
            /* Four columns with equal width */
            gap: 26px;
        }

        i {
            font-size: 22px;
        }

        .card img {
            height: 150px;
            width: 150px;
        }

        .marque {
            font-size: 12px;
        }

        .marque span {
            opacity: 0.5;
        }

        .bi.bi-star-fill {
            font-size: 15px;
            color: gold;
        }

        .promo {
            background-color: red;
            color: white;
            text-align: center;
            transform: rotate(-45deg);
            position: absolute;
            left: -40px;
            top: 20px;
            padding: 2px 40px;
            font-size: 10px
        }

        button {
            border: solid #E0E0E0 1px;
            background-color: white;
            text-align: center;
            font-size: 15px
        }

      

        .desc {
            position: absolute;
            bottom: 0;
            background-color: white;
        }

        .card .btn {
            font-size: 10px;
        }

        .bi.bi-cart {
            font-size: 12px
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="mt-5 pt-md-5 container">
        <div class="mt-md-5 row">
            <div class="d-md-none flex-column d-flex p-2 col-12">
                <p class="font-weight-bold pro-title">
                    <?php echo e($product->name); ?>

                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-column d-flex">
                        <p><span style="font-size: 13px"> La Marque : </span> <b><?php echo e($product->brand->name); ?></b> </p>
                        <p><span style="font-size: 13px">Reference : </span> <b><?php echo e($product->ref); ?></b> </p>
                    </div>
                    <div class="flex-column d-flex">
                        <img width="80" height="40" src="<?php echo e(asset('pictures/Category/' . $product->brand->picture)); ?>"
                            alt="payement methode">
                        <div style="font-size: 10px">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            (24)
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4 ">
                <img src="<?php echo e(asset('pictures/Products/' . $product->picture)); ?>" alt="payement methode"
                    class="text-center shadow-lg" id="main-image">
                <div class="gallery mt-3 justify-content-around g-2">
                    <img onmouseover="changeImage(this)" class="shadow-sm bg-white"
                        src="<?php echo e(asset('pictures/Products/' . $product->picture)); ?>" alt="payement methode"  />
                    <?php $__currentLoopData = $product->pictures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="shadow-sm bg-white" onmouseover="changeImage(this)"
                            src="<?php echo e(asset('pictures/Products/pictures/' . $product->picture . '/' . $item->path)); ?>"
                            alt="payement methode">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-12 col-md-8 ">
                <div class="d-md-flex flex-column d-none">
                    <p class="font-weight-bold pro-title">
                        <?php echo e($product->name); ?>

                    </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <p><span> La Marque : </span> <?php echo e($product->brand->name); ?></p>
                        <img width="200" height="100"
                            src="<?php echo e(asset('pictures/Category/' . $product->brand->picture)); ?>" alt="payement methode">
                       
                    </div>
                    <p><span>Reference : </span> <?php echo e($product->ref); ?></p>
                    <div>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        (24)
                    </div>
                </div>

                <p class="font-weight-bold price mt-4">
                    <?php echo e($product->price); ?> DA
                </p>
                <p class="primaryDesc" id="desc">
                    <?php echo $product->primary_desc; ?>

                </p>
                <form class='row my-2 '>
                    <input type="hidden" value="<?php echo e($item->id); ?>" name="product_id" readonly>
                    <div class='row my-2 pl-4 qteadd'>
                        Qte :
                        <button class='col-2 text-center' onclick="minQty(event)">-</button>
                        <input class='col-4 text-center' id="qty" min="1" max="<?php echo e($item->quantity); ?>"
                            value="1" name='qte' type="number" name="qte" />
                        <button class='col-2 text-center' onclick="addQty(event)">+</button>
                    </div>
                    <div class='row'>
                        <button class="btn btn-primary col-12"><i class="bi bi-cart"></i> Ajouter au
                            panier</button>
                    </div>
                </form>
                <div class="row justify-content-between mt-5">
                    <div class="item  col-md-3 col-12 text-md-center p-2 rounded shadow-sm d-flex flex-md-column align-items-center p-3 my-3">
                        <i class="bi bi-truck text-primary font-weight-bold mr-4"></i>
                        <div>
                            <p class="font-weight-bold text-md-center mb-0">Livraison au choix</p>
                            <p class="text-black-50 font-weight-normal mb-0" style="font-size: 12px">Domicile, Point relais, Retrait
                                au Dépöt
                            </p>
                        </div>
                        
                    </div>
                    <div class="item  col-md-3 col-12 text-md-center p-2 rounded shadow-sm d-flex flex-md-column align-items-center p-3 my-3">
                        <i class="bi bi-truck text-primary font-weight-bold mr-4"></i>
                        <div>
                            <p class="font-weight-bold text-md-center mb-0">Paiement sécurisé</p>
                            <p class="text-black-50 font-weight-normal mb-0" style="font-size: 12px">Paiement par cheque ou à
                                livraison, virement bancaire
                            </p>
                        </div>
                       
                    </div>
                    <div class="item  col-md-3 col-12 text-center p-2 rounded shadow-sm d-flex flex-md-column align-items-center p-3 my-3">
                        <i class="bi bi-truck text-primary font-weight-bold  mr-4"></i>
                        <div>
                            <p class="font-weight-bold text-md-center mb-0">SUPPORT EN LIGNE 24/7</p>
                            <p class="text-black-50 font-weight-normal mb-0" style="font-size: 12px">En une ou plusieurs fois
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='populair-products px-5'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Documents_et_notices</p>
            <span></span>
        </div>
        <div class="d-flex justify-content-around">
            <div class="text-center">
                <p class="font-weight-bold text-primary">
                    Disjoncteur DNX å Vis - Fiche
                </p>
                <button class="btn doc"> Voir le document</button>
            </div>
            <div class="text-center">
                <p class="font-weight-bold text-primary">
                    Disjoncteur DNX å Vis - Fiche
                </p>
                <button class="btn doc"> Voir le document</button>
            </div>
            <div class="text-center">
                <p class="font-weight-bold text-primary">
                    Disjoncteur DNX å Vis - Fiche
                </p>
                <button class="btn doc"> Voir le document</button>
            </div>

        </div>
    </div>
</div>
    
   

    

    <div class='populair-products px-5'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Description</p>
            <span></span>
        </div>
        <div id="details">
            <?php echo $product->full_desc; ?>

        </div>
    </div>

    <div class='populair-products px-5'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Produits_similaires</p>
            <span></span>
        </div>
        <div class="swiper mySwiper  mySwiper1 px-4">
            <div class="swiper-wrapper m-4 mx-auto">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide ">
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
                                                max="<?php echo e($item->quantity); ?>" value="1" type="number"
                                                name="qte" />
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
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="swiper-button-next1 swiper-button-next">
                <img src="<?php echo e(asset('img/right.png')); ?>" alt="">
            </div>
            <div class="swiper-button-prev swiper-button-prev1">
                <img src="<?php echo e(asset('img/left.png')); ?>" alt="">
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
            const card = event.target.closest('.card') || event.target.closest('.qteadd');
            const qtyInput = card.querySelector('input[name="qte"]');

            if (qtyInput.value > qtyInput.min) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }


        }

        function addQty(event) {
            // Prevent the default button behavior
            event.preventDefault();

            // Find the closest parent card and the quantity input within it
            const card = event.target.closest('.card') || event.target.closest('.qteadd');
            const qtyInput = card.querySelector('input[name="qte"]');

            qtyInput.value = parseInt(qtyInput.value) + 1;

        }
    </script>

    <script>
        var main = document.getElementById('main-image');

        function changeImage(e) {
            main.src = e.src
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/productDetails.blade.php ENDPATH**/ ?>