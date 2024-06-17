

<?php $__env->startSection('title', 'Creer votre store'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container main">
        <h2 class="bold text-center pt-4">Créez votre boutique en ligne</h2>

        <form class="bg-white border px-4 pt-3 rounded my-5" method="POST" action="<?php echo e(route('store.save')); ?>"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nom de Boutique</label>
                        <input class="form-control bg-light" type="text" name="storeName"
                             required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Logo de Boutique</label>
                        <input class="form-control bg-light" type="file" name="logo"
                             required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Couverture</label>
                        <input class="form-control bg-light" type="file" name="cover"
                             required>
                    </div>
                </div>
                
               
            </div>
            <div class="form-group text-right">
                <button class="btn btn-primary">Soumettre</button>
            </div>
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/createStore.blade.php ENDPATH**/ ?>