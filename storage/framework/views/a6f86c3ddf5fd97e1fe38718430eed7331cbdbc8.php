

<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container my-4">
        <div  class="d-flex justify-content-between align-items-center">
            <h3>Produits</h3>
            <div>
                <button class="btn btn-danger rounded-3">X Supprimer</button>
                <a href="<?php echo e(route('addProduct')); ?>">
                    <button class="btn primary ">+ Ajouter</button>
                </a>
                
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
                <th scope="col"><input type="checkbox" name="all"></th>
                <th scope="col">#</th>
                <th scope="col">Ref</th>
                <th scope="col">Nom</th>
                <th scope="col">Marque</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantite</th>
                <th scope="col">Remise</th>
                <th scope="col">Ajouter Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" name="item" ></td>
                <th scope="row">1</th>
                <td>45353</td>
                <td> <img class="col-3 shadow-sm bg-white" width="40" height="40" src="<?php echo e(asset('img/PRO.png')); ?>" alt="payement methode">Otto</td>
                <td>legrand</td>
                <td>2500DA</td>
                <td>50</td>
                <td>5%</td>
                <td>
                    <button class="add-qty px-4 rounded fs-5 border-0">
                        +
                    </button>
                </td>
              </tr>
            
            </tbody>
          </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storepanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/panel/products.blade.php ENDPATH**/ ?>