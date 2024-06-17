@extends('layouts.storelayout')

@section('title', 'Acceuil')

@section('content')

    <header class="d-flex flex-column justify-content-around">
        <div class="container mx-auto row">

            <div class="text-white">
                <div id="wlc" class=" mb-md-4  text-center">Trouvez vos projets préférés,
                    Simplifiez vos Achats B2B</div>
                <div class="text-center wlc-phrase ">
                    TendAxe- Votre Plateforme de Référence pour les Achats Professionnels B2B ,et lesmarchés publics
                    incluant les appels d'offres, les consultations et les ventes aux enchères
                </div>
                <div class="btns">
                    <a href="" class="d-flex align-items-center text-center">
                        <div class="bg-white d-flex align-items-center justify-content-center">
                            TENDAXE <br> STORE
                        </div>
                        <div class="bg-primary p-2 d-flex align-items-center  ">
                            <i class="bi bi-shop  text-white"></i>
                        </div>
                    </a>
                    <a href="" class="d-flex align-items-center    text-center  ">
                        <div class="bg-white d-flex align-items-center justify-content-center">
                            APPELS <br>  D'OFFRE
                        </div>
                        <div class="bg-primary p-2 d-flex align-items-center  ">
                            <i class="bi bi-files text-white"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </header>

    <section class="container my-5">
        <div class="row mx-0">
            <div class="col-md-4 px-md-0">
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector.png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">Simplifiez vos achats</span>

                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Achetez en toute confiance sur notre plateforme conviviale. Simplifiez vos processus d'achat
                            grâce à des fonctionnalités intuitives telles que la recherche avancée, le suivi des commandes
                            et le paiement sécurisé
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector (1).png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">demande de devis</span>
                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Publiez vos demandes achats, appels d'offres et sous-traitance sur notre plateforme et recevez
                            des offres de fournisseurs qualifiés
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector (2).png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">Garantie de qualité</span>
                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Achetez en toute tranquillité d'esprit avec notre engagement envers la qualité. Nous travaillons
                            avec des fournisseurs professionnels et veillons à ce que chaque produit réponde à des normes
                            élevées.
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center my-2">
                <img class="img-fluid" src="{{ asset('img/figure1.png') }}">
            </div>
            <div class="col-md-4 px-md-0">
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector (3).png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">Soyez informés des marchés publics</span>
                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Nous publions quotidiennement tous les appels d'offres, consultations, ventes aux enchères et
                            attributions disponibles sur le marché public
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector1.png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">service clientèle dédié</span>
                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Notre équipe de service clientèle est disponible pour répondre à vos questions, vous assister
                            dans vos achats et résoudre tout problème éventuel de manière rapide et efficace.
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/icons/Vector (4).png') }}" width="30px" height="40px">
                        <span class="ml-3 font-weight-700">milleurs prix</span>
                    </div>
                    <div class="mt-2">
                        <small class="font-weight-500">
                            Tendaxe se distingue par ses prix concurrentiels sur une gamme variée d'articles qu'il propose
                            grâce à des partenariats et des conventions avec ses partenaires à travers le monde.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class=" d-flex flex-column align-items-center">
            <img src="{{ asset('img/logo4.png') }}" alt="STORE">
            <div class="my-5 tendax-store-section">
                <img src="{{ asset('img/STORE.png') }}" alt="" class="store-section-img">
                <div class="container my-4">
                    <p class="text-justify ">
                        TendAxe Store est une plateforme centralisée et référentielle pour les entreprises, rassemblant une
                        multitude de fabricants, importateurs, prestataires et des grands fournisseurs afin de répondre aux
                        besoins d'achats diversifiés des différents organismes.
                    </p>
                    <div class="my-4">
                        <p>
                            <img src="{{ asset('img/icons/start.png') }}" alt="image" class="mr-2"> Soyez guidés par
                            nos experts
                        </p>
                        <p>
                            <img src="{{ asset('img/icons/annaux.png') }}" alt="image" class="mr-2"> Pour toutes les
                            organismes
                        </p>
                        <p>
                            <img src="{{ asset('img/icons/24.png') }}" alt="image" class="mr-2"> Devis en 24 heurs
                        </p>
                        <p>
                            <img src="{{ asset('img/icons/card.png') }}" alt="image" class="mr-2"> Commandez vos
                            articles
                        </p>

                    </div>

                    <p class="my-4">
                        <b>
                            Tous les achats de votre organisation, quel que soit votre secteur d'activité.
                        </b>
                    </p>
                    <div class="text-center">
                        <a href="{{ route('store') }}" class="btn btn-lg btn-primary">
                            Accéder à TendAxe Store <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                    <form class="bg-white border px-4 pt-3 rounded" method="POST" action="{{ route('facteurProforma.store') }}" enctype="multipart/form-data">
                        @csrf
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
                                        value="{{ old('prenom') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input class="form-control bg-light" type="text" name="prenom"
                                        value="{{ old('prenom') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input class="form-control bg-light" type="email" name="email" required
                                    value="{{ old('email') }}">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control bg-light" type="text" name="phone"
                                        value="{{ old('phone') }}" required>
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
                    <img src="{{ asset('img/facture.png') }}" alt="pFACTURE" class="facture">
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class='populair-products container'>
            <div class='title d-flex f justify-content-center align-items-center'>
                <span></span>
                <p class='title font-weight-bold text-center m-4'>catégories_d'articles</p>
                <span></span>
            </div>
            <div class="swiper mySwiper  mySwiper1 px-4">
                <div class="swiper-wrapper m-4 mx-auto">
                    @foreach ($cats as $item)
                    <div class="swiper-slide ">
                        <a href="{{ route('category.products', $item->id) }}">
                            <div class="cat-card-container">
    
                                <img src="{{ asset('pictures/Category/' . $item->picture) }}" alt="category">
                                <h6 class="p-3">
                                    {{ $item->name }}
                                </h6>
                                <div class="black-bg">
    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                   
                    


                </div>

                <div class="swiper-button-next1 swiper-button-next">
                    <img src="{{ asset('img/right.png') }}" alt="">
                </div>
                <div class="swiper-button-prev swiper-button-prev1">
                    <img src="{{ asset('img/left.png') }}" alt="">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('store.marques') }}">
                    <button class="btn btn-primary ">Voir Tous</button>
                </a>

            </div>


        </div>
    </section>

    <section id="howto" class="my-5">
        <h3 class="text-center font-weight-600">Comment s'inscrire</h3>
        <div class="container row mt-4 mx-auto">
            <div class="col-md-8">
                <div class="d-flex">
                    <span class="bold mr-4 h4">1</span>
                    <p class="font-weight-500">
                        Inscrivez gratuitement en tant que nouveau <span class="">utilisateur remplissant le
                            formulaire d'inscription (nom, prénom, e-mail, numéro de téléphone et certains champs) et
                            bénéficiez de 3 jours d'éssai gratuit.</span>
                    </p>
                </div>
                <div class="d-flex">
                    <span class="bold mr-4 h4">2</span>
                    <p class="font-weight-500">
                        Connectez-vous avec votre e-mail et votre mot de passe.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="bold mr-4 h4">3</span>
                    <p class="font-weight-500">
                        choisissez le pack qui vous conviendrez (bronz, silver, gold, platine, Ultra).
                    </p>
                </div>
                <div class="d-flex">
                    <span class="bold mr-4 h4">4</span>
                    <p class=" font-weight-500">
                        votre compte professionnel annuel sera activé dés la réception de votre reçu de payement
                    </p>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex align-items-center justify-content-center">
                <a href="{{ route('register') }}" class="btn btn-lg btn-primary">
                    <b>Inscrivez-vous gratuitement</b>
                    <br>
                    avec <span class="">3</span> jours d’essai
                </a>
            </div>
        </div>
    </section>

    <section id="latest" class="container my-5">
        <h3 class="text-center  mb-4 font-weight-600">Derniers annonces</h3>
        @foreach (App\Models\Offre::where('etat', 'active')->latest()->take(4)->get() as $item)
            <x-offre :exp="false" :offre="$item" />
            {{-- <div class="my-2">
				<div class="bg-white px-3 pt-3 border rounded">
					<div class="row mb-3">
						<div class="col-9 col-md-10 pr-0 bold">
							<div>
								{{ $item->titre }}
							</div>
						</div>
						<div class="col-3 col-md-2 pl-md-0 text-right">
							<img class="" src="{{ asset('img/icons/lock2.png') }}" width="64px">
						</div>
					</div>
						<div class="mb-2">
							<span class="bold">Annonceur: </span>
							<img src="{{ asset('img/icons/lock.png') }}">
							Réservé aux abonnés
						</div>
						<div class="mb-2">
							<span class="bold">Statut: </span>
							{{ $item->statut }}
						</div>
						<div class="mb-2">
							<span class="bold">Wilaya: </span>
							<img src="{{ asset('img/icons/lock.png') }}">
							Réservé aux abonnés
						</div>
						<div class="my-3 d-flex">
							<span class="mx-auto mt-2"> <img src="{{ asset('img/icons/play.png') }}"> {{ $item->date_pub }}</span>
							<span class="mx-auto mt-2"> <img src="{{ asset('img/icons/stop.png') }}"> {{ $item->date_limit }}</span>
							<a href="{{ route('detail', $item) }}" class="btn btn-sm btn-primary ml-auto">Detail</a>
						</div>
				</div>
			</div> --}}
        @endforeach

        <div class="text-right">
            <a href="{{ route('search') }}" class="btn btn-primary font-weight-600">Tous les appels d’offre <img
                    class="pl-4" src="{{ asset('img/icons/arrow.png') }}"></a>
        </div>
    </section>

    <section id="servies" class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center px-4 my-2 ">
                <div class="bg-white p-3 border h-100">
                    <img class="img-fluid mx-auto my-3" src="{{ asset('img/icons/doc.png') }}">
                    <div class="h4 bold">+<span class="counter">1900</span></div>
                    <small class="bold">Publications / Semaine</small>
                </div>
            </div>
            <div class="col-md-4 text-center px-4 my-2">
                <div class="bg-white p-3 border h-100">
                    <img class="img-fluid mx-auto my-3" src="{{ asset('img/icons/building.png') }}">
                    <div class="h4 bold">+<span class="counter">10000</span></div>
                    <small class="bold">
                        Entreprises sur l’annuaire
                        (disponible bientôt)
                    </small>
                </div>
            </div>
            <div class="col-md-4 text-center px-4 my-2 ">
                <div class="bg-white p-3 border h-100">
                    <img class="img-fluid mx-auto my-3" src="{{ asset('img/icons/annouce.png') }}">
                    <div class="h4 bold">+<span class="counter">170</span></div>
                    <small class="bold">sources d’annonces</small>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class='populair-products px-5'>
            <div class='title d-flex f justify-content-center align-items-center'>
                <span></span>
                <p class='title font-weight-bold text-center m-4'>Produits_populaires</p>
                <span></span>
            </div>
            <div class="swiper mySwiper  mySwiper1 px-4">
                <div class="swiper-wrapper m-4 mx-auto">
                    @foreach ($products as $item)
                    <div class="swiper-slide ">
                        <div>
                            <div class="card">
                                @if ($item->discount > 0)
                                    <p class='promo'>promo 80%</p>
                                @endif
                               
                                <img class='mx-auto py-2' src="{{ asset('pictures/Products/'.$item->picture) }}"alt="Card image cap">
                                <div class="p-2 desc">
                                    <p class="font-weight-bold mb-1">{{$item->name}}</p>
                                    <p class="marque mb-1"><span>Marque </span>{{$item->category->name}}</p>
                                    <div>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        (24)
                                    </div>
                                    <p class="font-weight-bold mb-1">{{$item->price}} DA</p>
                                    <form class='px-3 my-2'>
                                        <div class='row my-2'>
                                            <button class='col-2 text-center'>-</button>
                                            <input class='col-6 text-center' value="Qte: 2" name='qte' />
                                            <button class='col-2 text-center'>+</button>
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
                    @endforeach
                   
                </div>

                <div class="swiper-button-next1 swiper-button-next">
                    <img src="{{ asset('img/right.png') }}" alt="">
                </div>
                <div class="swiper-button-prev swiper-button-prev1">
                    <img src="{{ asset('img/left.png') }}" alt="">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('store.marques') }}">
                    <button class="btn btn-primary ">Voir Tous</button>
                </a>

            </div>


        </div>
    </section>

    <section class="create-store">
        <h3 class="font-weight-600 text-center mb-3">Créez votre boutique en ligne</h3>
        <h4 class="font-weight-500 text-center mb-3">Présentez vos produit sur TendAxe et obtenez plus de clients</h4>
        <p class=" text-center mb-3 w-75 mx-auto">
            En tant que Distributeur Digital et marketplace B2B TendAxe, vousproposez d'avoir une boutique en ligne avec une
            solution complète de gestiondes commandes et des ventes; garantissant une présence en ligne avec uneexpérience
            client optimale
        </p>
        <div class="my-4 create-store-points py-5">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('img/store-create.png') }}" alt="">
                    <h6 class="my-3">Création de Boutique en Ligne</h6>
                    <p class="desc-store">Nous concevrons et configurerons une boutique en ligne personnaliséesur TendAxe,
                        mettant en valeur vos gamme de produits supergros.</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('img/chartup.jpg') }}" alt="" height="60" width="80">
                    <h6 class="my-3">Augmenter les ventes</h6>
                    <p class="desc-store">Nous concevrons et configurerons une boutique en ligne personnaliséesur TendAxe,
                        mettant en valeur vos gamme de produits supergros.</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('img/orders.png') }}" alt="">
                    <h6 class="my-3">Création de Boutique en Ligne</h6>
                    <p class="desc-store">Nous concevrons et configurerons une boutique en ligne personnaliséesur TendAxe,
                        mettant en valeur vos gamme de produits supergros.</p>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <a href="{{ route('store.create') }}" class="mt-5">
                    <button class="btn btn-primary ">Créer Votre Store</button>
                </a>
            </div>
        </div>
    </section>

    

    <section id="payement" class="container my-5">
        <h4 class="bold ">Payement</h4>
        <ul class="font-weight-500">
            <li>Payez les frais de l’abonnement choisis Par un dépôt ou virement sur le compte postal:
                <br>
                nom: <b>HAMMOU</b> prénom: <b>KACEM AMINE - CCP: 0022782357/14</b>
            </li>
            <li>Veuillez envoyer une copie de la preuve de paiement par Viber à l'un des numéros suivants:<b> 07 78 33 00 81
                </b> Ou Via l'e-mail suivant: <b>tendaxe@gmail.com</b></li>
            <li>Payez en espèces ou par chèque en vous rendant dans nos bureaux situés à l'adresse suivante:
                Rue Aouicha Amer</li>
            <li>Votre compte sera activé dés la réception de votre reçu payment.</li>
        </ul>
    </section>

    <section id="acheteurs" class="container" style="margin-top: 30vh; margin-bottom: 20vh;">
        <h1 class="font-weight-600 text-center text-gray">Nos acheteurs actifs</h1>
        <div class="text-center my-5">
            <img class="img-fluid" src="{{ asset('img/acheteurs/1.png') }}" alt="">
        </div>
        <div class="row justify-content-center my-4 hide-md">
            @for ($i = 2; $i <= 8; $i++)
                <div class="col text-center">
                    <img class="img-fluid" src="{{ asset('img/acheteurs/' . $i . '.png') }}" alt="">
                </div>
            @endfor
        </div>
        <div class="row justify-content-center my-4 hide-md">
            @for ($i = 9; $i <= 15; $i++)
                <div class="col text-center">
                    <img class="img-fluid" src="{{ asset('img/acheteurs/' . $i . '.png') }}" alt="">
                </div>
            @endfor
        </div>

        {{-- mobile acheteurs --}}
        <div class="row show-md justify-content-center">
            <div class="col-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/9.png') }}" alt="">
            </div>
            <div class="col-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/14.png') }}" alt="">
            </div>

        </div>
        <div class="row show-md">
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/4.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/5.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/6.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/7.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/8.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/2.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/10.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/11.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/3.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/15.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/12.png') }}" alt="">
            </div>
            <div class="col-3 my-3 text-center">
                <img class="img-fluid" src="{{ asset('img/acheteurs/13.png') }}" alt="">
            </div>


        </div>
    </section>

    <!-- demander Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Demander un Pack</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="form-control selectpicker" onchange="UpdateMaxSect(this)" name="pack"
                                id="pack">
                                <option value="bronze">Bronze</option>
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                                <option value="platine">Platine</option>
                                <option value="ultra">Ultra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control selectpicker" multiple data-title="Secteurs" name="secteurs[]"
                                id="sect">
                                @foreach (App\Models\Secteur::All() as $sect)
                                    <option value="{{ $sect->id }}" data-tokens="{{ $sect->secteur }}">
                                        {{ $sect->secteur }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary" id="demander"
                            onclick="demander_pack($(this))">Demander</button>
                        <button class="btn btn-info" type="button" id="loading" disabled style="display: none">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Demander
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body" id="resultat_demande">
                    <h5 class="bold mb-4">
                        voila les détails de l'abonnement choisie:
                    </h5>
                    <div class="mb-2">
                        <b>Le pack: </b>
                        <span id="selected_pack"></span>
                    </div>
                    <div class="bold">Les secteurs:</div>
                    <ul class="mb-0" id="selected_secteurs">

                    </ul>
                    <div class="">
                        <b>Prix:</b>
                        <span id="prix"></span>
                    </div>
                    <div class="mt-4">
                        votre demande va prendre en charge <span class="">par les administrateurs dés la réception de
                            votre reçu de payement ( par viber 0778 33 00 81 , notre e-mail tendaxe@gmail.com ou à travers
                            une présence au niveau de notre bureau )</span>
                    </div>
                    <div class="mt-3 text-right">
                        <button type="button" class="btn btn-primary px-4" data-dismiss="modal">OK</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Erreur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Votre demande n'a pas été effectuer, veuillez réessayer plus tard.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary px-3" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // navbar
        // $(".navbar").removeClass("bg-light");
        // $(".navbar").removeClass("navbar-light");
        // $(".navbar").addClass("navbar-dark");
        // $("#logo").addClass("text-white");

        // $("#custom-toggle-icon").attr("src", "{{ asset('img/icons/navbar_button_light.png') }}");

        // $(window).scroll(function(event) {
        //     var height = $(window).scrollTop();

        //     if (height <= 0) {
        //         $(".navbar").removeClass("bg-light shadow navbar-light");
        //         $(".navbar").addClass("navbar-dark");

        //         $("#logo").addClass("text-white");

        //         $("#custom-toggle-icon").attr("src", "{{ asset('img/icons/navbar_button_light.png') }}");

        //     } else {
        //         $(".navbar").addClass("bg-light shadow navbar-light");
        //         $(".navbar").removeClass("navbar-dark");

        //         $("#logo").removeClass("text-white");

        //         $("#custom-toggle-icon").attr("src", "{{ asset('img/icons/navbar_button_dark.png') }}");

        //     }

        // });

        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1000,
            });
            // init animate on scroll
            AOS.init();
        });

        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('abonnement')
            $('#pack').selectpicker('val', id).change();
        });

        $('#exampleModal').on('hidden.bs.modal', function(e) {
            $('#demander').show();
            $('#loading').hide();

            $('#sect').prop('disabled', false);
            $('#sect').selectpicker('refresh');
        });

        function UpdateMaxSect(e) {
            // console.log(e.value);
            $('#sect').selectpicker('deselectAll')

            var max = 1;
            var prix = "";
            switch (e.value) {
                case 'bronze':
                    max = 1;
                    prix = "11000 DA/an";
                    break;
                case 'silver':
                    max = 3;
                    prix = "17000 DA/an";
                    break;
                case 'gold':
                    max = 6;
                    prix = "24000 DA/an";
                    break;
                case 'platine':
                    max = 10;
                    prix = "28000 DA/an";
                    break;
                case 'ultra':
                    max = false;
                    prix = "34000 DA/an";
                    $('#sect').selectpicker('selectAll');
                    break;
            }

            $('#sect').data('max-options', max).selectpicker('refresh');
            $('#prix').text(prix);
        }

        function demander_pack(e) {
            $('#demander').hide();
            $('#loading').show();

            $('#sect').prop('disabled', true);
            $('#sect').selectpicker('refresh');

            $.ajax({
                type: 'post',
                url: "{{ route('user.pack.add') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "secteurs": $('#sect').val(),
                    "nom_abonnement": $('#pack').val(),
                },
                error: function() {
                    // error

                    $('#exampleModal').modal('hide');
                    $('#errorModal').modal('show');

                },
                success: function(res) {
                    console.log(res);
                    // console.log(data);

                    if (res) {
                        // insert data to success model
                        $('#selected_pack').text(res.data.abonnement);
                        var secteurs = "";
                        for (var k in res.data.secteurs) {
                            secteurs += '<li>' + res.data.secteurs[k].secteur + '</li>';
                        }
                        console.log(secteurs);
                        $('#selected_secteurs').html(secteurs);
                        $('#exampleModal').modal('hide');
                        $('#successModal').modal('show');
                    }
                }
            });


        }
    </script>
@endsection
