

<?php $__env->startSection('title', 'Ajouter Produit'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-white rounded-3 container my-5  p-4 ">
        <h3>Ajouter Produit</h3>
        <form action="<?php echo e(route('admin.products.store')); ?>" method="post" enctype="multipart/form-data"
            class="fs-5 my-4 addproduct">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="my-4 col-6">
                            <label for="name" class="my-2">Nom de produit:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="name"
                                name="name">
                        </div>
                        <div class="my-4 col-6  ">
                            <label for="ref" class="my-2">Reference:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="ref"
                                name="ref">
                        </div>

                        <div class="my-4 col-7">
                            <label for="boutique">Boutique</label> <br>
                            <select name="boutique" id="boutique" class="px-2 py-2 bg-light border-0 rounded my-2"> <br>
                                <option value="" selected>Selectionner</option>
                                <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($store->id); ?>" selected><?php echo e($store->storeName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="col-5">
                            

                        </div>
                        <div class="my-4 col-10">
                            <label for="quantity" class="my-2">Quantite:</label>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="quantity"
                                        name="qty">
                                </div>
                                


                            </div>

                        </div>

                        <div class="my-4 col-6">
                            <label for="price" class="my-2">Prix:</label> <br>
                            <input type="text" class="px-2 py-1 bg-light border-0 rounded my-2" id="price"
                                name="price">
                        </div>
                        <div class="my-4 col-6 ">
                            <label for="remise" class="my-2">Remise:</label> <br>
                            <input type="number" class="px-2 py-1 bg-light border-0 rounded my-2" id="remise"
                                name="discount" min="0" value="0">
                        </div>
                        <div id="dateremise">
                            <div class="my-4 col-6  ">
                                <label for="debut" class="my-2">Debut:</label> <br>
                                <input type="date" class="px-2 py-1 bg-light border-0 rounded my-2" id="debut"
                                    name="debut">
                            </div>
                            <div class="my-4 col-6  ">
                                <label for="fin" class="my-2">Fin:</label> <br>
                                <input type="date" class="px-2 py-1 bg-light border-0 rounded my-2" id="fin"
                                    name="fin">
                            </div>
                        </div>


                        <div id="sub-categories-container-1" class="my-4 col-6">
                            <label for="cat">Categories Level 1</label>
                            <select name="cats[]" id="sub-cat-level-1" class="sub-cat" multiple>
                                <?php $__currentLoopData = $cats1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div id="sub-categories-container-2" class="my-4 col-6">
                            <label for="sub-cat-level-2">Categories Level 2</label>
                            <select name="cats[]" id="sub-cat-level-2" class="sub-cat" multiple>
                               
                            </select>
                        </div>
                        <div id="sub-categories-container-3" class="my-4 col-6">
                            <label for="sub-cat-level-3">Categories Level 3</label>
                            <select name="cats[]" id="sub-cat-level-3" class="sub-cat" multiple>
                                
                            </select>
                        </div>
                        <div id="sub-categories-container-4" class="my-4 col-6">
                            <label for="sub-cat-level-4">Categories Level 4</label>
                            <select name="cats[]" id="sub-cat-level-4" class="sub-cat" multiple>
                                
                            </select>
                        </div>



                        <div class="my-4 col-12">
                            <label for="brand">Marque : </label>
                            <div class="row">
                                <div class="col-9">
                                    <select name="brand" id="brand"
                                        class="px-2 py-2 bg-light border-0 rounded my-2">
                                        <br>
                                        <option value="" selected>Selectionner</option>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                

                            </div>


                        </div>
                    </div>


                </div>
                <div class="col-4">
                    <div class="col-12">
                        <div class="my-4">
                            <label for="">Image : </label>
                            <input type="file" name="picture" class="my-2">
                        </div>
                        <div class="my-4">
                            <label for="">Gallery : </label>
                            <input type="file" name="gallery[]" multiple class="my-2">
                        </div>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <label for="desc"> Description</label> <br>
                    <textarea name="desc" id="desc" rows="8" class="col-12 my-2 rounded-3 p-2" placeholder="text ... "></textarea>
                </div>
                <div class="col-12 my-4">
                    <label for="details"> Description Detaile</label><br>
                    <textarea name="details" id="details" rows="8" class="col-12 my-2 rounded-3 p-2" placeholder="text ... "></textarea>
                </div>

                <div class="col-12 my-4">
                    <label for="files"> Fichiers joints</label> <br>
                    <input type="file" name="files[]" multiple id="files" class="my-2 ">
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="primary rounded-3 py-1 px-5 border-0"> Valider </button>
                </div>



            </div>


        </form>




    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#details'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const remiseValue = document.querySelector('#remise');
            const remiseDate = document.querySelector('#dateremise');
            if (remiseValue.value > 0) {
                remiseDate.style.display = 'flex';
            } else {
                remiseDate.style.display = 'none';
            }

            remiseValue.addEventListener('change', function() {
                if (remiseValue.value > 0) {
                    remiseDate.style.display = 'flex';
                } else {
                    remiseDate.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize Select2 for all select elements
            $('.sub-cat').select2({
                placeholder: 'Search',
                theme: 'classic'
            });

            function loadChildren(parentId, level) {
                // Find the next level
                let nextLevel = level + 1;
                if (nextLevel > 4) return;

                // Select the next level element
                let nextSelectElement = $(`#sub-cat-level-${nextLevel}`);
                nextSelectElement.html(''); // Clear previous options

                parentId.forEach(id => {
                    $.ajax({
                        type: 'GET',
                        url: `/categories/children/${id}`,
                        success: function(data) {
                            $.each(data, function(index, category) {
                                nextSelectElement.append('<option value="' + category.id + '">' + category.name + '</option>');
                            });
                        }
                    });
                });
            }

            // Attach change event handlers to each select element
            $('.sub-cat').on('change', function(e) {
                let selectedParentId = $(this).val();
                let currentLevel = parseInt(this.id.split('-').pop());

                // Clear all subsequent levels
                for (let level = currentLevel + 1; level <= 4; level++) {
                    $(`#sub-cat-level-${level}`).html('');
                }

                // Load children for the next level
                if (selectedParentId.length > 0) {
                    loadChildren(selectedParentId, currentLevel);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/addProduct.blade.php ENDPATH**/ ?>