

<?php $__env->startSection('title', 'Facteurs Proforma'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-5 pt-5">
        <div>
            <b>Nom  : </b> <?php echo e($facteurProforma->fName); ?> <?php echo e($facteurProforma->Lname); ?>

        </div>
        <div>
            <b>Email : </b> <?php echo e($facteurProforma->email); ?>

        </div>
        <div>
            <b>Phone : </b> <?php echo e($facteurProforma->phone); ?>

        </div>

        <div>
            <b>Raison :</b> <?php echo e($facteurProforma->raison); ?>

        </div>
        
<div>
            <b>paye : </b> <?php echo e($facteurProforma->contry); ?>

        </div>
        <div>
            <b>Region : </b> <?php echo e($facteurProforma->region); ?>

        </div>

        <div>
            <b>Desription  : </b><br><?php echo e($facteurProforma->desc); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/factureDetails.blade.php ENDPATH**/ ?>