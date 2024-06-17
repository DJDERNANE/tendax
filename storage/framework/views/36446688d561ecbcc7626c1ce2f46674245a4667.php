

<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-4">

        <div class="row">
            <div class="col-8">
                <div class="d-flex justify-content-between align-items-center my-4 p-2 bg-white rounded-3 shadow ">
                    <div>
                        <img src="<?php echo e(asset('img/icons/user.png')); ?>" alt=""> <?php echo e($user->nom); ?>  <?php echo e($user->prenom); ?>

                    </div>
                    <div
                        class="pl-5 py-1 pr-2 m-0 d-flex justify-content-between align-items-center store-navbar text-white">
                        <form class="d-flex bg-light store-form align-items-center p-2 rounded-3">


                            <input type="text" placeholder="search..." class="px-2 py-1 bg-transparent border-0 search">
                            <button class="px-2 border-0  bg-transparent"><i
                                    class="bi bi-search text-primary text-black fs-5 "></i></button>


                        </form>

                    </div>
                </div>
                <table class="table text-center ">
                    <thead>
                        <tr>
                            <th scope="col">Ref</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Marque</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Remise</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->ref); ?></td>
                            <td> <img class="col-3 shadow-sm bg-white" width="40" height="40"
                                src="<?php echo e(asset('pictures/Products/'.$item->picture)); ?>" alt="payement methode">Otto</td>
                            <td><?php echo e($item->brand->name); ?></td>
                            <td> <?php echo e($item->price); ?> DA</td>
                            <td><?php echo e($item->quantity); ?></td>
                            <td><?php echo e($item->discount); ?>%</td>
                            <td>
                                <button class=" rounded fs-5 border-0 primary text-white p-1">
                                    Ajouter
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </tbody>
                </table>
            </div>
            
            <div class="col-4 rounded-3 bg-white panier p-0">
                <h3 class="p-2 my-1">Produits Ajoutés</h3>
                <div class="separate m-0"></div>

                <div class="card-item p-3">
                    <div class="d-flex align-items-center">
                        <img class="mr-2"  src="<?php echo e(asset('img/PRO.png')); ?>" alt="" height="70" width="70">
                        <p class="fs-3 ms-2">Otto </p>

                    </div>
                    <h5>15000 DA</h5>
                    <div>
                        <div class="d-flex jusitify-content-between">
                            <button class='col-2 text-center'>-</button>
                            <input class='col-7 text-center' value="Qte: 2" name='qte' />
                            <button class='col-2 text-center'>+</button>
                        </div>
                        <button class="border-0 bg-transparent fs-3">
                            <i class="bi bi-x-circle-fill text-danger"></i>
                        </button>
                    </div>
                    
                </div>

                <div class="d-flex justify-content-center">
                    <a href="<?php echo e(route('order.confirm')); ?>">
                        <button class="btn primary rounded-3 fs-5 create-order col-11  my-2">
                            Créer Commande
                        </button>
                    </a>
                   
                </div>
               
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storepanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/panel/orderProducts.blade.php ENDPATH**/ ?>