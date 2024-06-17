

<?php $__env->startSection('title', 'Boutiques'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-4">
        <div class="col-sm-12">
            <form class="bg-white border px-4 pt-3 rounded" method="POST" action="<?php echo e(route('admin.store.edit', $store->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nom de Boutique</label>
                            <input class="form-control bg-light" type="text" name="nom" value="<?php echo e($store->storeName); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="form-group">
                            <label>Changer Logo</label>
                            <input class="form-control bg-light" type="file" name="logo"  >
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="form-group">
                            <label>Changer Couverture</label>
                            <input class="form-control bg-light" type="file" name="cover"  >
                        </div>
                    </div>
                </div>
                <div class="form-group text-right my-4">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/editStore.blade.php ENDPATH**/ ?>