

<?php $__env->startSection('title', 'Sous Categories'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-5 pt-5">
        <div  class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="<?php echo e(route('categories.all')); ?>" class="me-2">Categories <span id="count1"></span></a> </h6>
                <h6><a href="<?php echo e(route('subcategories.all')); ?>" class="active me-2">SubCategories <span id="count2"></span></a> </h6>
                <h6><a href="<?php echo e(route('subsubcategories.all')); ?>" >SubSubCategories <span id="count2"></span></a> </h6>
            </div>
            <div>
                <button class="btn btn-danger rounded-3 supp-btn" disabled id="supp-btn">X Supprimer</button>
                <button type="button" class="btn primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter une Sous-Category</h5>
                            </div>
                            <div class="modal-body">
                                <form  class="  store-form align-items-center p-2 rounded-3" method="post" action="<?php echo e(route('subcategories.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="">Nom : </label>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Icon : </label>
                                        <input class="form-control" type="file" name="icon">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Category : </label> <br>
                                        <select name="category" id="">
                                            <option value="" selected>selectionner une sous category</option>
                                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>

                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">
            <div
            class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
            <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">

              
                <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                <button class="px-2 border-0  bg-transparent"><i class="bi bi-search text-primary text-black fs-5 "></i></button>


            </form>
     
        </div>
           
           
        </div>
        <table class="table text-center ">
            <thead>
              <tr>
                <th scope="col"><input type="checkbox" name="all" id="select-all"></th>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $subCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><input type="checkbox" name="item[]" value="<?php echo e($item->id); ?>"></td>
                <th scope="row"><?php echo e($item->id); ?></th>
                <td> <img class="col-3 shadow-sm bg-white" width="50" height="50"
                    src="<?php echo e(asset('pictures/Category/Icons/' . $item->icon)); ?>" alt="image"> <?php echo e($item->name); ?></td>
                <td> <?php echo e($item->category->name); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            
            </tbody>
          </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.querySelector('#select-all');
            const items = document.querySelectorAll('input[name="item[]"]');
            const suppBtn = document.getElementById('supp-btn');
           
    
            // Function to log and manage selected items
            function logSelectedItems() {
                const selectedItems = Array.from(items).filter(item => item.checked);
                const count2 = document.getElementById('count2');
                if (selectedItems.length == 0) {
                    suppBtn.disabled = true;
                    count2.innerHTML = ""; // Clear the text or set to default text if needed
                } else {
                    suppBtn.disabled = false;
                    count2.innerHTML = "("+selectedItems.length+")"; // Set the actual number or use `selectedItems.length`
                }
            }

    
            // Initially call to set button state
            logSelectedItems();
    
            // Event listener for 'select all' checkbox
            selectAll.addEventListener('change', function() {
                items.forEach(item => {
                    item.checked = selectAll.checked;
                });
                logSelectedItems();
            });
    
            // Event listeners for each checkbox
            items.forEach(item => {
                item.addEventListener('change', logSelectedItems);
            });
    
            // Handle the delete button click event
            $('.supp-btn').click(function(event) {
                event.preventDefault();
                if (confirm('Are you sure you want to delete this item?')) {
                    // Recompute selectedValues just before the request
                    const selectedValues = Array.from(items)
                                               .filter(item => item.checked)
                                               .map(item => item.value);
                    $.ajax({
                        url: '/admin/store/subcategories/delete',
                        type: 'DELETE',
                        data: JSON.stringify({
                            ids: selectedValues,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        }),
                        contentType: 'application/json',
                        success: function(response) {
                            console.log('res : ' + response);
                            selectedValues.forEach(id => {
                                $('input[value="' + id + '"]').closest('tr').remove();
                            });
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/subCategories.blade.php ENDPATH**/ ?>