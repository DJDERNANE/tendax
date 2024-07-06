<div class="mt-4 sidebar-categories">
    <div class="subcategories-side">
        rgergerg
    </div>
    <div class="categories-header p-2 d-flex align-items-center  font-weight-bold">
        <i class="bi bi-list mr-2 text-primary" style="font-size: 20px"></i>Categories
    </div>
    <ul class="list-group">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item category">
                <div class="text-center d-flex align-items-center fs-5 justify-content-between">
                    <div>
                        <img  src="<?php echo e(asset('img/cat.png')); ?>">
                        <a href='#' class="ml-2" style="color: black"><?php echo e($item->name); ?></a>
                    </div>
                    <i class="bi bi-caret-down-fill ms-auto"></i>
                </div>
                
                <ul class="my-2 subcats" style="list-style-type: none">
                    <hr>
                    <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li>
                            <a href=""  style="color: black"><?php echo e($subcat->name); ?></a>
                       </li>
                       <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</div><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/components/side-bar.blade.php ENDPATH**/ ?>