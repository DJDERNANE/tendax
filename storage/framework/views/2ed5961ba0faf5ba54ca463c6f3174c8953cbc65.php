<?php $__env->startSection('title', 'Mes Abonnements'); ?>


<?php $__env->startSection('link_abonnement', 'text-info'); ?>

<?php $__env->startSection('profile'); ?>
    <div class="container-fluid">
        <h5 class="mb-4">Mes Abonnements</h5>
        <?php if($current): ?>
            <small>   
                <div>
                    Abonnement Choisi: <b> <?php echo e($current->nom_abonnement); ?> </b>
                    <div class="row justify-content-center">
                        <div class=" col-md-4 col-sm-6 p-2 ">
                            <?php switch($current->nom_abonnement):
                                case ('bronze'): ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-orange mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">Pack de bronze</div>
                                        <div class="h1 text-center text-green my-4">
                                            <span>11000</span> DZD/an
                                        </div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Choisissez 1 secteur</li>
                                                <li>Toutes les fonctionnalités énumérées ci-dessus</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('silver'): ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-light-gray mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">pack Silver</div>
                                        <div class="h1 text-center text-green my-4">
                                            <span>17000</span> DZD/an
                                        </div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Choisissez 3 secteurs</li>
                                                <li>Toutes les fonctionnalités énumérées ci-dessus</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('gold'): ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-yellow mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">Pack gold</div>
                                        <div class="h1 text-center text-green my-4">
                                            <span>24000</span> DZD/an
                                        </div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Choisissez 6 secteurs </li>
                                                <li>Toutes les fonctionnalités énumérées ci-dessus</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('platine'): ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-red mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">pack platine</div>
                                        <div class="h1 text-center text-green my-4">
                                            <span>28000</span> DZD/an
                                        </div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Choisissez 10 secteurs</li>
                                                <li>Toutes les fonctionnalités énumérées ci-dessus</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('ultra'): ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-blue mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">pack ultra</div>
                                        <div class="h1 text-center text-green my-4">
                                            <span>34000</span> DZD/an
                                        </div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Touts les secteurs</li>
                                                <li>Toutes les fonctionnalités énumérées ci-dessus</li>
                                                <li>Assistance juridique</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('gratuit'): ?>
                                <?php default: ?>
                                    <div class="bg-white mx-auto pb-2 rounded-bottom h-100 border d-flex flex-column" style="max-width: 280px">
                                        <div class="bg-light-gray mb-3 rounded-top" style="height: 6px"></div>
                                        <div class="text-center bold">Forfait gratuit à vie</div>
                                        <div class="h1 text-center text-green my-4">0.00 DZD</div>
                                        <div class="my-2">
                                            <ul class="">
                                                <li>Découvrez le site pendant une période illimitée sans passer en revue tous les détails</li>
                                                <li>Sélection illimitée de secteurs</li>
                                            </ul>
                                        </div>
                                      
                                    </div>
                            <?php endswitch; ?>
                        </div>
                    </div>
                    
                </div>
                secteurs selectionné:
                
                <ul class="my-2">
                    <?php if($secteurs): ?>
                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($sect->secteur); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    <?php endif; ?>
                </ul>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="mb-2">
                            Debut de l'abonnement
                        </div>
                        <div class="mb-2">
                            <?php echo e($current->date_debut); ?>

                        </div>
                    </div>
                    <div class="text-right">
                        <div class="mb-2">
                            Fin de l'abonnement
                        </div>
                        <div class="mb-2">
                            <?php echo e($current->date_fin); ?>

                        </div>
                    </div>
                </div>
                <div class="progress" style="border-radius: 20px">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo e($progress); ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </small>
        <?php else: ?>
            <div class="display-3">Aucune Abonnement en cours</div>
        <?php endif; ?>
        

        <div class="my-4">
            <h5>Historique de mes abonnements</h5>
            <small>
                <table class="table table-sm">
                    <tr>
                        <td>Type d'abonnement</td>
                        <td>Date debut</td>
                        <td>Date fin</td>
                    </tr>
                    <tbody class="bg-light">
                        <?php $__currentLoopData = Auth::user()->abonnement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($abon->nom_abonnement); ?></td>
                                <td><?php echo e($abon->date_debut); ?></td>
                                <td><?php echo e($abon->date_fin); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </small>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/user/abonnement.blade.php ENDPATH**/ ?>