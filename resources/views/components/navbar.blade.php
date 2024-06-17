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
            @guest
                <ul class="cnx list-group list-group-horizontal">
                    <li class="nav-item px-2 ">
                        <a class="btn bg-white text-primary fw-bold" href="{{ route('login') }}">Connexion</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn bg-white text-primary fw-bold" href="{{ route('register') }}">Inscription</a>
                    </li>
                </ul>

            @endguest

        </div>
    </div>

    {{-- <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
    <div class="dropdown show-md">

        <div class="dropdown-menu dropdown-menu-right bg-light mx-0" style="max-width: none; margin-top: 29px;"
            id="custom_nav_drop" aria-labelledby="custom_nav_drop">
            <a class="dropdown-item pl-2 d-flex align-items-center" href="/">
                <div style="width: 40px">
                    <img class="mr-2 p-1" src="{{ asset('img/icons/home.png') }}" alt="">
                </div>
                <span>
                    Acceuil
                </span>
            </a>
            <a class="dropdown-item pl-2 d-flex align-items-center" href="{{ route('search') }}">
                <div style="width: 40px">
                    <img class="img-fluid mr-2 p-1" src="{{ asset('img/icons/annouce2.png') }}" alt="">
                </div>
                <span>
                    Appel d’offre
                </span>
            </a>



            <a class="dropdown-item pl-2 d-flex align-items-center" href="{{ route('help') }}">
                <div style="width: 40px">
                    <img class="mr-2 p-1" src="{{ asset('img/icons/help2.png') }}" alt="">
                </div>
                <span>Aide</span>
            </a>
            @guest
                <a class="dropdown-item pl-2 d-flex align-items-center" href="{{ route('login') }}">
                    <div style="width: 40px">
                        <img class="mr-2 p-1" src="{{ asset('img/icons/login.png') }}" alt="">
                    </div>
                    <span>Connexion</span>
                </a>
                <a class="dropdown-item px-1 d-flex align-items-center" href="{{ route('register') }}">
                    <div class="btn btn-primary flex-fill">Inscription</div>
                </a>
            @endguest
            {{-- <a class="dropdown-item" data-toggle="collapse" href="sub_dropdown" data-target="#sub_dropdown" aria-expanded="false" aria-controls="sub_dropdown">Something else here</a> --}}
            {{-- <div class="collapse bordered rounded bg-light" id="sub_dropdown">
                <a class="dropdown-item" href="#">test</a>
                <a class="dropdown-item" href="#">test 2</a>
                <a class="dropdown-item" href="#">test 3</a>
            </div> --}}

            @auth
                <a class="dropdown-item pl-2 d-flex align-items-center" href="{{ route('offre.favorit') }}">
                    <div style="width: 40px">
                        <img class="mr-2 p-1" width="32px" src="{{ asset('img/icons/star.png') }}"
                            alt="">
                    </div>
                    <span>Favories</span>
                </a>
                <a class="dropdown-item pl-2" href="#" id="sub_drop" role="button" data-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('img/icons/user.png') }}" width="30px" class="">
                    <img src="{{ asset('img/icons/dropdown.png') }}" width="25px">
                    <span class="">{{ Auth::user()->nom . ' ' . Auth::user()->prenom }}</span>
                </a>
                <div class="dropdown mr-4">
                    <form action="{{ route('logout') }}" method="POST"
                        class="dropdown-menu dropdown-menu-right bg-light mt-2" aria-labelledby="sub_drop"
                        style="max-width: none;">
                        @csrf
                        <a class="dropdown-item pl-2 pr-5" href="{{ route('profile') }}">
                            <img class="mr-2" width="25px" src="{{ asset('img/icons/user3.png') }}"
                                alt="">
                            Profile
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="{{ route('abonnement') }}">
                            <img class="mr-2" width="25px" src="{{ asset('img/icons/doc2.png') }}"
                                alt="">
                            Abonnement
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="{{ route('notification') }}">
                            <img class="mr-2" width="25px" src="{{ asset('img/icons/notifbell.png') }}"
                                alt="">
                            Notification
                        </a>
                        <a class="dropdown-item pl-2 pr-5" href="{{ route('user.offers') }}">
                            <img class="mr-2" width="25px" src="{{ asset('img/icons/stacked_doc.png') }}"
                                alt="">
                            Mes Offres
                        </a>
                        <button type="submit" class="dropdown-item pl-2 pr-5">
                            <img class="mr-2" width="25px" src="{{ asset('img/icons/out.png') }}"
                                alt="">
                            se deconnecter
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>


    <div class="collapse px-4 py-2 navbar-collapse d-flex justify-content-between align-items-center "
        id="navbarSupportedContent">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo2.png') }}" alt="" height="30">
        </a>
        <div>
            <ul class="navbar-nav ml-auto align-items-center p-1">
                <li class="nav-item px-2">
                    <a class="nav-link" href="/">Acceuil</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('search') }}">Appels d'offre</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('store') }}">Store</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('store') }}">Documents</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('store') }}">Blog</a>
                </li>
                @if (Auth::check() && Auth::user()->type_user === 'abonné')
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ route('offre.favorit') }}">Favories</a>
                    </li>
                @endif
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('help') }}">à propos</a>
                </li>
                @auth

                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2">{{ Auth::user()->nom . ' ' . Auth::user()->prenom }}</span>
                            <img src="{{ asset('img/icons/user.png') }}" class="img-fluid">
                            <img src="{{ asset('img/icons/dropdown.png') }}" width="25px">
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-menu dropdown-menu-right"
                            style="max-width: none;" aria-labelledby="navbarDropdownMenuLink">
                            @csrf
                            <a class="dropdown-item pl-2 pr-5" href="{{ route('profile') }}">
                                <img class="mr-2" width="25px" src="{{ asset('img/icons/user3.png') }}"
                                    alt="">
                                Profile
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="{{ route('abonnement') }}">
                                <img class="mr-2" width="25px" src="{{ asset('img/icons/doc2.png') }}"
                                    alt="">
                                Abonnement
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="{{ route('notification') }}">
                                <img class="mr-2" width="25px" src="{{ asset('img/icons/notifbell.png') }}"
                                    alt="">
                                Notification
                            </a>
                            <a class="dropdown-item pl-2 pr-5" href="{{ route('user.offers') }}">
                                <img class="mr-2" width="25px" src="{{ asset('img/icons/stacked_doc.png') }}"
                                    alt="">
                                Mes Offres
                            </a>
                            <button type="submit" class="dropdown-item pl-2 pr-5">
                                <img class="mr-2" width="25px" src="{{ asset('img/icons/out.png') }}"
                                    alt="">
                                se deconnecter
                            </button>
                        </form>

                    </li>
                @endauth



            </ul>
        </div>
       

        <div>
            <a class="show-md" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img id="custom-toggle-icon" src="{{ asset('img/icons/navbar_button_dark.png') }}"
                    alt="">
            </a>
            <div class="d-flex align-items-center">
                <i class="bi bi-cart-fill text-primary" style="font-size: 30px"></i>
                <h5 class="m-2 text-primary">17500 DA </h5>

            </div>
        </div>
    </div>

</nav>