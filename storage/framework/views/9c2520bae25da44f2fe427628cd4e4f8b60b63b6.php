

<?php $__env->startSection('title', 'Marques'); ?>
<?php $__env->startSection('styling'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mt-md-5 pt-md-5 mt-5 container">
        <div class="d-flex justify-content-between nos-marques mt-md-5">
            <p class="font-weight-bold title">Nos Marques</p>
            
        </div>
        <div class="container">
            <div class="my-md-5 my-2   marques ">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('store.marque.products', $item->id)); ?>" class="marque shadow rounded">
                        <div class=" bg-white text-center shadow-sm rounded marque ">
                            <img src="<?php echo e(asset('pictures/Brands/' . $item->picture)); ?>"
                            alt="marque">
                            <p><?php echo e($item->name); ?></p>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
        
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/marques.blade.php ENDPATH**/ ?>