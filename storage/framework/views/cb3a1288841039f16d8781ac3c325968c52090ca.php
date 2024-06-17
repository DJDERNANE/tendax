<?php $__env->startSection('title', 'list offers'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center h3">Members</div>

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
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                   
                    <th scope="col">Nom Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Entrprise</th>
                    <th scope="col">Wilaya</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      
                        <td><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                        <td><?php echo e($user->nom_entreprise); ?></td>
                        <td><?php echo e($user->wilaya); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
            
        </table>
        <a href="<?php echo e(route('grouped', $offre)); ?>" class="btn btn-sm btn-primary px-3 ml-auto">Triter</a>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/offerGroupMembers.blade.php ENDPATH**/ ?>