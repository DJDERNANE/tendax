

<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="<?php echo e(route('products.pending.all')); ?>" class="me-2">En Attente</a> </h6>
                <h6><a href="<?php echo e(route('products.accepted.all')); ?>" class="active">Accepter</a> </h6>
            </div>
            <a href="<?php echo e(route('admin.products.create')); ?>">
                <button class="btn primary ">+ Ajouter</button>
            </a>
        </div>

        <form  action="<?php echo e(route('products.filter')); ?>" method="GET" class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">

            <div class="d-flex align-items-center">
                <div class="d-flex bg-light store-form align-items-center p-2 rounded-3">
                    <input name="product_name" type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search" value="<?php echo e(old('product_name', request('product_name'))); ?>">
                </div>
                <div id="sub-categories-container-1">
                    <label for="cat">L1</label> <br>
                    <select name="category_id" id="level-1" class="sub-cat">
                        <option value="">select</option>
                        <?php $__currentLoopData = $cats1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', request('category_id')) == $category->id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div id="sub-categories-container-2">
                    <label for="level-2">L 2</label> <br>
                    <select name="category_id" id="level-2" class="sub-cat">

                    </select>
                </div>
                <div id="sub-categories-container-3">
                    <label for="level-3">L3</label> <br>
                    <select name="category_id" id="level-3" class="sub-cat">

                    </select>
                </div>
                <div id="sub-categories-container-4">
                    <label for="level-4">L4</label> <br>
                    <select name="category_id" id="level-4" class="sub-cat">

                    </select>
                </div> 

                <div id="sub-categories-container-3">
                    <label for="store_id">Store</label>
                    <select name="store_id" id="store_id" class="form-control">
                        <option value="">Select Store</option>
                        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($store->id); ?>" <?php echo e(old('store_id', request('store_id')) == $store->id ? 'selected' : ''); ?>><?php echo e($store->storeName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div id="sub-categories-container-4">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="">Select Brand</option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand->id); ?>" <?php echo e(old('brand_id', request('brand_id')) == $brand->id ? 'selected' : ''); ?>><?php echo e($brand->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button class="primary border-0 px-4 mx-1 rounded-3">Filter</button>
            </div>

        </form>
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">Boutique</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">details</th>
                    <th scope="col">rejeter</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($item->store->storeName); ?></th>
                        <td> <img class="col-3 shadow-sm bg-white" width="40" height="40"
                                src="<?php echo e(asset('pictures/Products/' . $item->picture)); ?>"
                                alt="payement methode"><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->brand->name ?? 'NO BRAND'); ?></td>
                        <td><?php echo e($item->store->user->phone); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.product.edit', $item->id)); ?>" target="_blanck">
                                <button class="btn btn-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('product.reject', $item->id)); ?>">

                                <i class="bi bi-trash3-fill btn btn-danger"></i>

                            </a>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      
        function loadChildren(parentId, level) {
            // Find the next level
            let nextLevel = level + 1;
            if (nextLevel > 4) return;

            // Select the next level element
            let nextSelectElement = $(`#level-${nextLevel}`);
            nextSelectElement.html(''); // Clear previous options

            // Perform AJAX request to load children categories
            $.ajax({
                type: 'GET',
                url: `/categories/children/${parentId}`,
                success: function(data) {
                    $.each(data, function(index, category) {
                        nextSelectElement.append('<option value="' + category.id + '">' +
                            category.name + '</option>');
                    });
                }
            });
        }

        // Attach change event handlers to each select element
        $('.sub-cat').on('change', function(e) {
            let selectedParentId = $(this).val();
           
            let currentLevel = parseInt(this.id.split('-').pop());

            // Clear all subsequent levels
            for (let level = currentLevel + 1; level <= 4; level++) {
                $(`#level-${level}`).html('');
            }

            // Load children for the next level
            if (selectedParentId) {
                loadChildren(selectedParentId, currentLevel);
            }
        });
    });
</script>

<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/products.blade.php ENDPATH**/ ?>