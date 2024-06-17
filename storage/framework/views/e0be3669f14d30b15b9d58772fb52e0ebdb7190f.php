<nav class="navbar navbar-expand-md navbar-light bg-light  shadow fixed-top p-0">
    <div class="top px-4 bg-primary m-0    text-white">
        <div class="store-navbar d-flex justify-content-start align-items-center">
            <div class="social-media">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter-x"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
            <form class="d-flex bg-white store-form align-items-center">
                <input type="text" placeholder="Recherche..." class="px-2">
                <button class="px-2"><i class="bi bi-search text-primary "></i></button>
            </form>

        </div>

        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center mr-4">
                <i class="bi bi-telephone-fill mr-2"></i>
                <div>
                    <h5>06 99 88 77 66</h5>
                </div>
            </div>
            <?php if(auth()->guard()->guest()): ?>
                <ul class="cnx list-group list-group-horizontal">
                    <li class="nav-item px-2 ">
                        <a class="btn bg-white text-primary fw-bold" href="<?php echo e(route('login')); ?>">Connexion</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn bg-white text-primary fw-bold" href="<?php echo e(route('register')); ?>">Inscription</a>
                    </li>
                </ul>

            <?php endif; ?>

        </div>
    </div>

    
    <div class="dropdown show-md">

        <div class="dropdown-menu dropdown-menu-right bg-light mx-0" style="max-width: none; margin-top: 29px;"
            id="custom_nav_drop" aria-labelledby="custom_nav_drop">
            <a class="dropdown-item pl-2 d-flex align-items-center" href="/">
                <div style="width: 40px">
                    <img class="mr-2 p-1" src="<?php echo e(asset('img/icons/home.png')); ?>" alt="">
                </div>
                <span>
                    Acceuil
                </span>
            </a>
            <a class="dropdown-item pl-2 d-flex align-items-center" href="<?php echo e(route('search')); ?>">
                <div style="width: 40px">
                    <img class="img-fluid mr-2 p-1" src="<?php echo e(asset('img/icons/annouce2.png')); ?>" alt="">
                </div>
                <span>
                    Appel d’offre
                </span>
            </a>



            <a class="dropdown-item pl-2 d-flex align-items-center" href="<?php echo e(route('help')); ?>">
                <div style="width: 40px">
                    <img class="mr-2 p-1" src="<?php echo e(asset('img/icons/help2.png')); ?>" alt="">
                </div>
                <span>Aide</span>
            </a>
            <?php if(auth()->guard()->guest()): ?>
                <a class="dropdown-item pl-2 d-flex align-items-center" href="<?php echo e(route('login')); ?>">
                    <div style="width: 40px">
                        <img class="mr-2 p-1" src="<?php echo e(asset('img/icons/login.png')); ?>" alt="">
                    </div>
                    <span>Connexion</span>
                </a>
                <a class="dropdown-item px-1 d-flex align-items-center" href="<?php echo e(route('register')); ?>">
                    <div class="btn btn-primary flex-fill">Inscription</div>
                </a>
            <?php endif; ?>
            
            

            <?php if(auth()->guard()->check()): ?>
                <a class="dropdown-item pl-2 d-flex align-items-center" href="<?php echo e(route('offre.favorit')); ?>">
                    <div style="width: 40px">
                        <img class="mr-2 p-1" width="32px" src="<?php echo e(asset('img/icons/star.png')); ?>"
                            alt="">
                    </div>
                    <span>Favories</span>
                </a>
                <a class="dropdown-item pl-2" href="#" id="sub_drop" role="button" data-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="<?php echo e(asset('img/icons/user.png')); ?>" width="30px" class="">
                    <img src="<?php echo e(asset('img/icons/dropdown.png')); ?>" width="25px">
                    <span class=""><?php echo e(Auth::user()->nom . ' ' . Auth::user()->prenom); ?></span>
                </a>
                <div class="dropdown mr-4">
                    <form action="<?php echo e(route('logout')); ?>" method="POST"
                        class="dropdown-menu dropdown-menu-right bg-light mt-2" aria-labelledby="sub_drop"
                        style="max-width: none;">
                        <?php echo csrf_field(); ?>
                        <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('profile')); ?>">
                            <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/user3.png')); ?>"
                                alt="">
                            Profile
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('abonnement')); ?>">
                            <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/doc2.png')); ?>"
                                alt="">
                            Abonnement
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('notification')); ?>">
                            <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/notifbell.png')); ?>"
                                alt="">
                            Notification
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('user.offers')); ?>">
                            <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/stacked_doc.png')); ?>"
                                alt="">
                            Mes Offres
                        </a>
                        <button type="submit" class="dropdown-item pl-2 pr-5">
                            <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/out.png')); ?>"
                                alt="">
                            se deconnecter
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="collapse px-4 py-2 navbar-collapse d-flex justify-content-between align-items-center "
        id="navbarSupportedContent">
        <a class="navbar-brand" href="/">
            <img src="<?php echo e(asset('img/logo2.png')); ?>" alt="" height="30">
        </a>
        <div>
            <ul class="navbar-nav ml-auto align-items-center p-1">
                <li class="nav-item px-2">
                    <a class="nav-link" href="/">Acceuil</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('search')); ?>">Appels d'offre</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('store')); ?>">Store</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('store')); ?>">Documents</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('store')); ?>">Blog</a>
                </li>
                <?php if(Auth::check() && Auth::user()->type_user === 'abonné'): ?>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo e(route('offre.favorit')); ?>">Favories</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('help')); ?>">à propos</a>
                </li>
                <?php if(auth()->guard()->check()): ?>

                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2"><?php echo e(Auth::user()->nom . ' ' . Auth::user()->prenom); ?></span>
                            <img src="<?php echo e(asset('img/icons/user.png')); ?>" class="img-fluid">
                            <img src="<?php echo e(asset('img/icons/dropdown.png')); ?>" width="25px">
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="dropdown-menu dropdown-menu-right"
                            style="max-width: none;" aria-labelledby="navbarDropdownMenuLink">
                            <?php echo csrf_field(); ?>
                            <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('profile')); ?>">
                                <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/user3.png')); ?>"
                                    alt="">
                                Profile
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('abonnement')); ?>">
                                <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/doc2.png')); ?>"
                                    alt="">
                                Abonnement
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('notification')); ?>">
                                <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/notifbell.png')); ?>"
                                    alt="">
                                Notification
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="<?php echo e(route('user.offers')); ?>">
                                <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/stacked_doc.png')); ?>"
                                    alt="">
                                Mes Offres
                            </a>
                            <button type="submit" class="dropdown-item pl-2 pr-5">
                                <img class="mr-2" width="25px" src="<?php echo e(asset('img/icons/out.png')); ?>"
                                    alt="">
                                se deconnecter
                            </button>
                        </form>

                    </li>
                <?php endif; ?>



            </ul>
        </div>
       

        <div>
            <a class="show-md" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img id="custom-toggle-icon" src="<?php echo e(asset('img/icons/navbar_button_dark.png')); ?>"
                    alt="">
            </a>
            <div class="d-flex align-items-center">
                <i class="bi bi-cart-fill text-primary" style="font-size: 30px"></i>
                <h5 class="m-2 text-primary">17500 DA </h5>

            </div>
        </div>
    </div>

</nav><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/components/navbar.blade.php ENDPATH**/ ?>