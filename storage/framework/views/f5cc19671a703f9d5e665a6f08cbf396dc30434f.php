

<?php $__env->startSection('title', 'orders'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <h6><a href="" class="me-2 active">Orders</a> </h6>
                
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">
            <div class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
                <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">


                    <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                    <button class="px-2 border-0  bg-transparent"><i
                            class="bi bi-search text-primary text-black fs-5 "></i></button>


                </form>

            </div>
            <div class="d-flex">
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Marque
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <div class="dropdown bg-light p-1 mx-1 rounded-3">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Quantite
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
                <button class="primary border-0 px-4 mx-1 rounded-3">Filter</button>
            </div>

        </div>
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user</th>
                    <th scope="col">Total</th>    
                    <th scope="col">Details</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($item->id); ?></th>
                        <th scope="row"><?php echo e($item->user->nom); ?></th>
                        <th scope="row"><?php echo e($item->total_price); ?></th>
                        <td>
                            <a href="<?php echo e(route('orders.details', $item->id)); ?>">
                                <button class="border-0 btn btn-primary">
                                    Details
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminStorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/admin/store/orders.blade.php ENDPATH**/ ?>