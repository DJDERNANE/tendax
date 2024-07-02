<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('title', 'Store'); ?>
<?php $__env->startSection('content'); ?>


    <div class="mt-4 mt-md-5 pt-0 pt-md-5  mx-auto row ">
        <div class="col-0 col-md-3 ">
            <?php if (isset($component)) { $__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SideBar::class, ['categories' => $cats]); ?>
<?php $component->withName('side-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e)): ?>
<?php $component = $__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e; ?>
<?php unset($__componentOriginale47f40099c86fea5864fd2233ee8f4e20e104e1e); ?>
<?php endif; ?>
        </div>
        <div class="col-12 col-md-9 mt-4">
            <div class='row'>
                <div class='col-12 col-md-9'>
                    <img style="width:100%" class="banner" src="<?php echo e(asset('img/banner.png')); ?>">
                </div>
                <div class='col-0 col-md-3 d-md-flex flex-md-column d-none justify-content-between characteristic'>
                    <div class='d-flex align-items-center font-weight-bold p-2 shadow-lg'>
                        <i class="bi bi-truck mr-2 text-primary"></i>LIVRAISON GRATUITE
                    </div>
                    <div class='d-flex align-items-center font-weight-bold p-2 shadow-lg'>
                        <i class="bi bi-ui-radios-grid mr-2 text-primary"></i>DIVERSITÉ DES PRODIUITS
                    </div>
                    <div class='d-flex align-items-center font-weight-bold p-2 shadow-lg'>
                        <i class="bi bi-person-raised-hand mr-2 text-primary"></i>SUPPORT EN LIGNE 24/7
                    </div>
                </div>
            </div>
            <div class=" my-4 category-conent">
                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('category.products', $item->id)); ?>">
                        <div class="cat-card-container">

                            <img src="<?php echo e(asset('pictures/Category/' . $item->picture)); ?>" alt="category">
                            <h6 class="p-md-3 p-1">
                                <?php echo e($item->name); ?>

                            </h6>
                            <div class="black-bg">

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($cats->links()); ?>

        </div>
    </div>

    <div class='populair-products container'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Produits_populaires</p>
            <span></span>
        </div>
        <div class="swiper mySwiper  mySwiper1 px-4">
            <div class="swiper-wrapper m-4 mx-auto">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide ">
                        <div>
                            <div class="card">
                                <?php if($item->discount > 0): ?>
                                    <p class='promo'>promo <?php echo e($item->discount); ?>%</p>
                                <?php endif; ?>
                                <a href="<?php echo e(route('store.product.details', $item->id)); ?>">
                                    <img class='mx-auto py-2'
                                        src="<?php echo e(asset('pictures/Products/' . $item->picture)); ?>"alt="Card image cap">
                                </a>
                                <div class="p-2 desc">
                                    <a href="<?php echo e(route('store.product.details', $item->id)); ?>">
                                        <p class="font-weight-bold mb-1"><?php echo e($item->name); ?></p>
                                    </a>

                                    <p class="marque mb-1"><span>Marque </span><?php echo e($item->brand->name); ?></p>
                                    <div>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        (24)
                                    </div>
                                    <p class="font-weight-bold mb-1"><?php echo e($item->price); ?> DA</p>
                                    <form class='px-3 my-2' method="post" action="<?php echo e(route('cart.store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($item->id); ?>" name="product_id" readonly>
                                        <div class='row my-2'>
                                            Qte :
                                            <button class='col-2 text-center' onclick="minQty(event)">-</button>
                                            <input class='col-4 text-center' id="qty" min="1"
                                                max="<?php echo e($item->quantity); ?>" value="1" type="number" name="qte" />
                                            <button class='col-2 text-center' onclick="addQty(event)">+</button>
                                        </div>
                                        <div class='row'>
                                            <button class="btn btn-primary col-12"><i class="bi bi-cart"></i> Ajouter au
                                                panier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
           

            <div class="swiper-button-next1 swiper-button-next">
                <img src="<?php echo e(asset('img/right.png')); ?>" alt="">
            </div>
            <div class="swiper-button-prev swiper-button-prev1">
                <img src="<?php echo e(asset('img/left.png')); ?>" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-md-end justify-content-center mt-md-4 mt-2">
            <a href="<?php echo e(route('showproducts')); ?>">
                <button class="btn btn-primary ">Voir Tous</button>
            </a>

        </div>

    </div>


    <section>
        <div class="facture populair-products container">
            <div class='title d-flex f justify-content-center align-items-center'>
                <span></span>
                <p class='title font-weight-bold text-center m-4'>Demmande_facture_proforma</p>
                <span></span>
            </div>
            <div>
                <h5>Fait-nous part de vous besoin</h5>
                <p>
                    Tendaxe est la pour vous accompagne à trouver les articles que vouschercher gratuitement alors n’hésiter
                    pas
                    à nous contacter.
                </p>
                <h5>Comment ça marche ?</h5>
                <ol>
                    <li>
                        Veuiller remplir le formulaire si dessous
                    </li>
                    <li>
                        Précisez les articles recherchés (désignation d'équipements, matériels,matières, outils ou autres)
                        avec
                        la quantité et le délai ; vous pouvez ajouterune photo ou un fichier de liste d'articles (liste de
                        produits demandé ou unbordereau de prix à remplir).
                    </li>
                    <li>
                        Des experts dédiés recherchent gratuitement les produit rependant àvotre besoin (demande de devis,
                        bon
                        de disponibilité, détails techniques )
                    </li>
                    <li>
                        vous recevez des réponse dans les 24 heur ouvré (devis,facteur-proforma, fiches techniques…)
                    </li>
                </ol>
            </div>

            <div class="row py-4">
                <div class="col-md-8 col-12">
                    <form class="bg-white border px-4 pt-3 rounded" method="POST" action="<?php echo e(route('facteurProforma.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nomination de Organisme (raison social)</label>
                                    <input class="form-control bg-light" type="text" name="raison" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="form-control bg-light" type="text" name="nom"
                                        value="<?php echo e(old('prenom')); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input class="form-control bg-light" type="text" name="prenom"
                                        value="<?php echo e(old('prenom')); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input class="form-control bg-light" type="email" name="email" required
                                    value="<?php echo e(old('email')); ?>">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control bg-light" type="text" name="phone"
                                        value="<?php echo e(old('phone')); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label>Paye</label>
                                    <input class="form-control bg-light" type="paye" name="paye" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label>Region</label>
                                    <input class="form-control bg-light" type="region" name="region" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">

                                    <label>Votre besoin</label> <br>

                                    <textarea class="form-control bg-light" name="besoin" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Insérer votre liste d'articles

                                        (photo, pdf ou excel)</label>
                                    <input class="form-control bg-light" type="file" name="files[]" multiple>
                                </div>
                            </div>


                        </div>

                        <div class="form-group text-right">
                            <button class="btn btn-primary">Demander facture proforma</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-12">
                    <img src="<?php echo e(asset('img/facture.png')); ?>" alt="pFACTURE" class="facture">
                </div>
            </div>
        </div>
    </section>


    <div class='populair-products container marques-swiper'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Nos_marques</p>
            <span></span>
        </div>
        <div class="swiper mySwiper  mySwiper1 px-4">
            <div class="swiper-wrapper m-4 mx-auto">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide text-center">
                        <a href="">
                            <img  src="<?php echo e(asset('pictures/Brands/' . $item->picture)); ?>"
                                alt="marque">
                        </a>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

            <div class="swiper-button-next1 swiper-button-next">
                <img src="<?php echo e(asset('img/right.png')); ?>" alt="">
            </div>
            <div class="swiper-button-prev swiper-button-prev1">
                <img src="<?php echo e(asset('img/left.png')); ?>" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-md-end justify-content-center mt-md-4 mt-2">
            <a href="<?php echo e(route('store.marques')); ?>">
                <button class="btn btn-primary ">Tous les marques</button>
            </a>

        </div>


    </div>


    <div class='populair-products container'>
        <div class='title d-flex f justify-content-center align-items-center'>
            <span></span>
            <p class='title font-weight-bold text-center m-4'>Boutiques</p>
            <span></span>
        </div>
        <div class="swiper mySwiper  mySwiper1 px-4">
            <div class="swiper-wrapper m-4 mx-auto">
                <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <a class="boutique-card" href="<?php echo e(route('store.show', $item->id)); ?>">
                            <div class="profile bg-white">
                                <img src="<?php echo e(asset('pictures/storeLogos/' . $item->logo)); ?>" alt="profile">
                            </div>

                            <div class="boutique-image">
                                <img src="<?php echo e(asset('pictures/storeCovera/' . $item->cover)); ?>" alt="profile">
                            </div>
                            <div class="boutique-name">
                                <h5>
                                    <?php echo e($item->storeName); ?>

                                </h5>
                            </div>
                        </a>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

            <div class="swiper-button-next1 swiper-button-next">
                <img src="<?php echo e(asset('img/right.png')); ?>" alt="">
            </div>
            <div class="swiper-button-prev swiper-button-prev1">
                <img src="<?php echo e(asset('img/left.png')); ?>" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-md-end justify-content-center mt-md-4 mt-2">
            <a href="<?php echo e(route('store.all')); ?>">
                <button class="btn btn-primary ">Tous les boutiques</button>
            </a>

        </div>


    </div>

    <div class="mx-md-5 mx-0 shadow-lg row bg-white my-5">
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-truck text-primary font-weight-bold"></i>
            <p class="font-weight-bold fs-6 text-center mb-1">Livraison au choix</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">Domicile, Point relais, Retrait au Dépöt
            </p>
        </div>
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-box text-primary font-weight-bold"></i>
            <p class="font-weight-bold text-center mb-1">Retour Facilité</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">14 jours pour changer davis
                30 jours pour les Pros</p>
        </div>
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-credit-card-2-back-fill text-primary font-weight-bold"></i>
            <p class="font-weight-bold text-center mb-1">Paiement sécurisé</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">Paiement par cheque ou à livraison,
                virement bancaire</p>
        </div>
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-person-raised-hand text-primary font-weight-bold"></i>
            <p class="font-weight-bold text-center mb-1">Support en ligne 24/7</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">En une ou plusieurs fois</p>
        </div>
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-boxes text-primary font-weight-bold"></i>
            <p class="font-weight-bold text-center mb-1">Plus de 50 000 produits</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">Répartis dans 14 univers du
                bricolage</p>
        </div>
        <div class="item col-md-2 col-6 text-center p-4">
            <i class="bi bi-boxes text-primary font-weight-bold"></i>
            <p class="font-weight-bold text-center mb-1">+600 marques Pro</p>
            <p class="text-black-50 font-weight-normal" style="font-size: 12px">Sélectionnées avec soin et
                toujours au meilleur prix</p>
        </div>
    </div>

    <div class="public-work mx-2 mx-md-5 row align-items-center my-5">
        <div class="col-md-3 col-12 text-center">
            <img src="<?php echo e(asset('img/work.png')); ?>" alt="">
        </div>
        <div class="col-md-9 col-12">
            <p class="title font-weight-bold">
                Travaux publiques
            </p>
            <p class="work-desc text-justify">
                Parce que les professionnels dans les secteurs spécialisés ont besoin de matériels adaptés à leur
                environnement et leurs activités, Domomat propose une sélection de produits spécifiques dans tous les corps
                de métier. <br> <br>

                Électricité industrielle, ventilation tertiaire, chauffage industriel ou encore équipements pour le secteur
                de l'hôtellerie-restauration, nous avons sélectionné, en collaboration avec les experts du marché, les
                gammes les plus adaptées aux besoins et contraintes des différents secteurs de l'industrie et de la
                collectivité.
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        function minQty(event) {
            // Prevent the default button behavior
            event.preventDefault();

            // Find the closest parent card and the quantity input within it
            const card = event.target.closest('.card');
            const qtyInput = card.querySelector('input[name="qte"]');

            if (qtyInput.value > qtyInput.min) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }


        }

        function addQty(event) {
            // Prevent the default button behavior
            event.preventDefault();

            // Find the closest parent card and the quantity input within it
            const card = event.target.closest('.card');
            const qtyInput = card.querySelector('input[name="qte"]');

            qtyInput.value = parseInt(qtyInput.value) + 1;

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/index.blade.php ENDPATH**/ ?>