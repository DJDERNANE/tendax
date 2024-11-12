

<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-danger rounded-3 supp-btn" id="supp-btn">X Supprimer <span
                        id="count1"></span></button>
                <button type="button" class="btn primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter une PUB</h5>
                            </div>
                            <div class="modal-body">
                                <form class="  store-form align-items-center p-2 rounded-3" method="post" action="<?php echo e(route('pubs.store')); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Image : </label>
                                        <input class="form-control" type="file" name="picture" required>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="">Zone : </label>
                                        <select name="zone" id="">
                                           
                                            <option value="1">Zone 1</option>
                                            <option value="2">Zone 2</option>
                                            <option value="3">Zone 3</option>
                                            <option value="4">Zone 4</option>
                                        </select>
                                    </div>
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

        <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow">
            <div class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
                <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">
                    <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                    <button class="px-2 border-0  bg-transparent"><i
                            class="bi bi-search text-primary text-black fs-5 "></i></button>
                </form>
            </div>
            <div class="d-flex col-5">
                <form action="<?php echo e(route('pubs.filter')); ?>" method="post"
                    class="d-flex align-items-center">
                    <?php echo csrf_field(); ?>
                    <div id="sub-categories-container-1">
                        <select name="zone"  class="sub-cat">
                            <option value="0">all</option>
                            <option value="1">Zone 1</option>
                            <option value="2">Zone 2</option>
                            <option value="3">Zone 3</option>
                            <option value="4">Zone 4</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
         
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        <input type="checkbox" id="select-all">
                    </th>
                    <th scope="col">ID</th>
                    <th scope="col">Zone</th>
                    <th scope="col">Image</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="item[]" value="<?php echo e($pub->id); ?>">
                        </td>
                        <td><?php echo e($pub->id); ?></td>
                        <td><?php echo e($pub->zone); ?></td>
                        <td>
                            <img src="<?php echo e(asset('pictures/Pubs/' . $pub->picture)); ?>" alt="pub image" width="50">
                        </td>
                       
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>

<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAll = document.getElementById('select-all');
        let items = document.querySelectorAll('input[name="item[]"]');
        const suppBtn = document.getElementById('supp-btn');
        const count1 = document.getElementById('count1');

        // Function to log and manage selected items
        function logSelectedItems() {
            const selectedItems = Array.from(items).filter(item => item.checked);
            if (selectedItems.length == 0) {
                suppBtn.disabled = true;
                count1.innerHTML = ""; // Clear the text or set to default text if needed
            } else {
                suppBtn.disabled = false;
                count1.innerHTML = "(" + selectedItems.length +
                    ")"; // Set the actual number or use `selectedItems.length`
            }
        }

        // Initially call to set button state
        logSelectedItems();

        // Event listener for 'elect all' checkbox
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
        suppBtn.addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this item?')) {
                // Recompute selectedValues just before the request
                const selectedValues = Array.from(items)
                    .filter(item => item.checked)
                    .map(item => item.value);
                   
                $.ajax({
                    url: '/admin/store/pubs/delete',
                    type: 'DELETE',
                    data: JSON.stringify({
                        ids: selectedValues,
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    }),
                    contentType: 'application/json',
                    success: function(response) {
                        selectedValues.forEach(id => {
                            $('input[value="' + id + '"]').closest('tr').remove();
                        });
                        // Update the items variable
                        items = document.querySelectorAll('input[name="item[]"]');
                        logSelectedItems();
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>





<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/pubs.blade.php ENDPATH**/ ?>