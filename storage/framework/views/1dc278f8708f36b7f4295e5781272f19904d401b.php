<?php $__env->startSection('title', 'list offers'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center h3">List offers</div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                <?php echo e(session('success')); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                <?php echo e(session('error')); ?>

            </div>
        </div>
    <?php endif; ?>

    <div class="bg-white p-3">
        <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginale801699a616d0ba4974c8777579f0c49d00b598b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\OffreGroup::class, ['offre' => $offre]); ?>
<?php $component->withName('offre-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale801699a616d0ba4974c8777579f0c49d00b598b)): ?>
<?php $component = $__componentOriginale801699a616d0ba4974c8777579f0c49d00b598b; ?>
<?php unset($__componentOriginale801699a616d0ba4974c8777579f0c49d00b598b); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($offres->links()); ?>

        <!-- delete modal -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/offersGroup.blade.php ENDPATH**/ ?>