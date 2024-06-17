
<div class="my-2">
    <div class="bg-white px-3 pt-3 border rounded">
        <div class="row">
            <div class="col-9 col-md-10 font-weight-600">
               <?php echo e($offre->titre); ?>

            </div>
            <div class="col-3 col-md-2 text-right">
        
                    <?php if($offre->adminetab->category !== "AUTRE"): ?>
                        <img class="" src="<?php echo e(asset('img/1.png')); ?>" width="50px">
                    <?php else: ?>
                        <img class="rounded-circle" src="<?php echo e(asset('storage/logo/'.$offre->adminetab->logo)); ?>" width="50px">
                    <?php endif; ?>
              

            </div>
        </div>
            <div class="mt-3 mt-md-2" style="font-size: 88%;">
                <div class="mb-2">
                    <span class="font-weight-600">Annonceur: </span>
                  
                        <?php echo e($offre->adminetab->nom_etablissement); ?>   
                   
                </div>
                <div class="mb-2">
                    <span class="font-weight-600">Statut: </span>
                    <?php echo e($offre->statut); ?>

                </div>
                <?php if($offre->wilaya): ?>
                    <div class="mb-2">
                        <span class="font-weight-600">Wilaya: </span>
                       
                            <?php echo e($offre->wilaya); ?>

                     
                    </div>
                <?php endif; ?>

            </div>
            <div class="mb-2 d-flex">
                <div>
                    <?php if($offre->groupStatus == false): ?>
                        <a href="<?php echo e(route('grouped', $offre)); ?>" class="btn btn-sm btn-primary px-3 ml-auto">Triter</a>
                    <?php endif; ?>
                   
                    <a href="<?php echo e(route('groupMembers', $offre)); ?>" class="btn btn-sm btn-primary px-3 ml-auto ">Voir Group </a>
                </div>
            </div>
        
    </div>
</div><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/components/offre-group.blade.php ENDPATH**/ ?>