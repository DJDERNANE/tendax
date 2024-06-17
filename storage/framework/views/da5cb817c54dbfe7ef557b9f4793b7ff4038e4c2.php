<?php $__env->startSection('title', 'add admin'); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="text-center">Add admin</h3>
    <form class="bg-white p-3 my-3" action="<?php echo e(route('admin.admins.add')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">nom</label>
                <input class="form-control" type="text" name="nom" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="">prenom</label>
                <input class="form-control" type="text" name="prenom" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="">email</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="">phone</label>
                <input class="form-control" type="text" name="phone" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="">password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="">password</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>
            <div class="col-md-6 form-group">
                <select class="form-control selectpicker" name="type_admin" id="">
                    <option value="admin" selected>Admin</option>
                    <option value="publisher">publisher</option>
                </select>
            </div>
            <div class="text-right">
                <button class="btn btn-info">Ajouter</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/add_admin.blade.php ENDPATH**/ ?>