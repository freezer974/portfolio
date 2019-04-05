@extends('layouts.app')
@section('content')
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!--  Preloader-->
    <div class="site-wrapper">
        <div class="site-wrapper-inner text-light text-center">
            <i class="fas fa-spinner fa-pulse fa-4x"></i>
        </div>
    </div>
    <!-- Main Menu area end -->
    <!-- Slider area start -->
    <div id="home" class="slider" >
        <div class="single-slider justify-content-center d-flex">
            <div class="container">
                <div class="slider-content my-auto clip text-light">
                    <h2>@lang('Salut, Je suis') Tony Chevalier</h2>
                    <h2 class="ah-headline">
                        <span>@lang('Un auto-entrepreneur dans le domaine du ')</span>
                        <span class="ah-words-wrapper">
                            <b class="is-visible">@lang('Graphisme')</b>
                            <b>@lang('Site web')</b>
                            <b>@lang('Coaching')</b>
                        </span>
                    </h2>
                    <a href="#contact" role="button" class="btn btn-outline-light js-scroll-trigger">@lang('Contactez-moi')</a>
                </div>
                <div>
                    <ul class="navigation">
                        <li>
                            <a href="#about" class="go-down">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider area end -->
    <!-- About area start -->
    <div id="about" class="about-top pt-5 pb-2 bg-white">
        <div class="container">
           <div class="section-title text-center">
               <h2>À propos de moi</h2>
               <p>J'aime aider les autres dans les domaines qui me passionnent, trouver une solution à leurs problématiques, tant bien professionnelles, que personnelles.</p>
               <hr class="mx-auto col-4 my-5">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                    <div class="success-story">
                        <h2>Nous avons quelques Success Story</h2>
                        <p>Fort de 15 ans d'expériences dans l'infographie et le web, j'ai su mettre mes compétences aux services d'entreprises, de professionnels et de particuliers, afin de réaliser des produits pour promouvoir leur image et prestations au sein de la société réunionnaise et francophone.</p>
						<p class="hidden-sm">Je souhaite vous faire profiter de ses années d'expériences en réalisant vos projets par un suivi rigoureux, des conseils judicieux, une exécution rapide afin de vous fournir dans les meilleurs délais vos travaux graphiques ou web. Je suis aussi engagé pour le respect de l'environnement pour cela vos travaux et sites internet que j'héberge sont stockés sur des serveurs écologiques.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                    <div class="skill">
                        <h2>Mes compétences</h2>
                        <div class="skill py-2">
                            <h5>Conception graphique <span>90%</span></h5>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-info wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-duration="1s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                        <div class="skill py-2">
                            <h5>Image de marque <span>75%</span></h5>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-info wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" data-wow-duration="1s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                        <div class="skill py-2">
                            <h5>Développement de produits <span>80%</span></h5>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-info wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-wow-duration="1s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                        <div class="skill py-2">
                            <h5>Développement web <span>80%</span></h5>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-info wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;" data-wow-duration="1s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                        <div class="skill py-2">
                            <h5>Conception de packaging <span>85%</span></h5>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-info wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" data-wow-duration="1s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-hire pb-5 pt-5 text-center bg-info text-white">
        <div class="container my-4">
            <div class="hire-content">
                <h3>Nous sommes prêts pour vos projets.</h3>
            </div>
            <div class="mt-3">
                <a href="#contact" class="btn btn-outline-light mx-2 js-scroll-trigger">Demandez un devis</a>
                <a href="#contact" class="btn btn-outline-light mx-2 js-scroll-trigger">Contactez-moi</a>
            </div>
        </div>
    </div>
    <!--About area end-->
    <!--Process area start-->
    <div class="pt-5 pb-3 bg-white">
        <div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12 mb-3">
					<div class="text-left">
							<h2>Le processus</h2>
							<hr>
							<p>Pour un meilleur rapport qualité / prix et une meilleure rapidité d'exécution, voici comment nous travaillons avec vous.</p>
					</div>
				</div>
				<div class="col-md-3 mb-3 col-sm-4 col-xs-12">
					<div class="single-process bg-gray">
						<div class="text-secondary mb-2">
							<i class="fa fa-chart-bar fa-2x"></i>
						</div>
						<div class="process-content">
							<h3>Planning</h3>
							<p>Mettre en place votre projet de manière fluide dans le temps afin de vous fournir un service de qualité dans un temps record.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-3 col-sm-4 col-xs-12">
					<div class="single-process bg-gray">
						<div class="text-secondary mb-2">
							<i class="fa fa-pencil-alt fa-2x"></i>
						</div>
						<div class="process-content">
							<h3>Création</h3>
							<p>Convenir de la meilleure stratégie pour définir votre identité visuelle et/ou l’adapter au site internet que nous allons créer ensemble.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-3 col-sm-4 col-xs-12">
					<div class="single-process bg-gray">
						<div class="text-secondary mb-2">
							<i class="fa fa-code fa-2x"></i>
						</div>
						<div class="process-content">
							<h3>Développement</h3>
							<p>Définir les meilleurs outils à intégrer à votre site pour le rendre le plus performant et pertinent dans son utilisation pour vos clients.</p>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!--Process area end-->
    <!--counter area start-->
    <div class="counters pb-3 pt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="text-white">
                        <h2>Facteurs intéressants</h2>
                        <p class="para">La synergie de création utilise un capital intellectuel initiant des clics et du matériel performant.</p>
                        <hr class="mx-auto col-4 my-5 bg-light">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3 mb-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-tasks fa-2x pb-2 text-dark"></i>
                        <h1 class="counter text-info">169</h1>
                        <p>Projets réalisés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3 mb-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-users fa-2x pb-2 text-dark"></i>
                        <h1 class="counter text-info">43</h1>
                        <p>clients heureux</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3 mb-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-clock fa-2x pb-2 text-dark"></i>
                        <h1 class="counter text-info">2179</h1>
                        <p>Heures travaillées</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-glass-martini fa-2x pb-2 text-dark" aria-hidden="true"></i>
                        <h1 class="counter text-info">475</h1>
                        <p>Jus frais consommés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--counter area start-->
    <!--  Services Area start-->
    <div id="service" class="services-area py-5 bg-light">
        <div class="container">
           <div class="section-title text-center upcase">
               <h2>Services</h2>
               <p>Des clients satisfaits du service à la carte, permettant d'être au plus proche de leurs exigences.</p>
               <hr class="mx-auto col-4 my-5">
           </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="service-content">
                            <h4>Design</h4>
                            <p>Donner la meilleure image de votre entreprise à vos clients. Pour une communication qui précise de manière visuelle votre identité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-content">
                            <h4>Développement web</h4>
                            <p>Donner de la visibilité à votre entreprise sur internet en lui offrant la meilleure stratégie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="service-content">
                            <h4>Média sociaux</h4>
                            <p>Poster, publier, liker, twitter votre entreprise et vos produits pour élargir votre interaction avec vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-mobile-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4>App & iOS</h4>
                            <p>Évoluer votre entreprise vers le monde du numérique, en la connectant aux clients par une interaction mobile.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-pen-square"></i>
                        </div>
                        <div class="service-content">
                            <h4>Design Graphique</h4>
                            <p>Plébiscité votre entreprise et ses produits pour une communication visuelle impactante avec des produits publicitaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie"></i>
                        </div>
                        <div class="service-content">
                            <h4>Résultat fiable</h4>
                            <p>Garantissez-vous des résultats performants avec une communication à plusieurs niveaux et sur de multiples supports.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="service-content">
                            <h4>Mail Marketing</h4>
                            <p>Communiquer sur vos projets, vos produits, votre image en lançant des campagnes de mailing et fidélisez votre clientèle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="service-content">
                            <h4>Copy Writing</h4>
                            <p>Nous vous proposons des solutions pour protéger votre image et votre nom sur le web et dans le commerce.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fab fa-weixin"></i>
                        </div>
                        <div class="service-content">
                            <h4>Relations publiques</h4>
                            <p>Valorisez votre communication au moyen de technique d'information percutante et innovante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Services Area End-->
    <!--  Testimonial Area start-->
    <div id="testimonial" class="testimonial bd-grey">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="testimonial-section-title">
                        <i class="fa fa-quote-right fa-3x text-info"></i>
                        <h4>Ce que les clients disent</h4>
                        <hr class="mx-auto col-4 my-5 bg-light">
                    </div>
                    <div class="testimonial-active carousel slide" data-ride="carousel">
                        <div class="single-testimonial carousel-item active">
                            <p>Beau travail, rapide et éfficace. A l'écoute dans la demande du client, suivi de la demande du client et de ses exigences, force de propositions et de créativité.</p>
                            <h5> par <strong>Mme Marie-France Ah-sing</strong></h5>
                        </div>
                        <div class="single-testimonial carousel-item">
                            <p>De bon conseil, généreux, patient. Respectieux de mes exgigences, vous avez su fournir un travail remarquable, votre professionnalisme à permis de structurer ma demande.</p>
                            <h5> par <strong>Mme Annick Veloupoullé </strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Testimonial Area end-->
    <!--Home Portfolio Start -->
    <div id="portfolio" class="portfolio-area pt-5 bg-light">
        <div class="container-fluid">
            <div class="section-title text-center upcase">
                <h2>Portfolio</h2>
                <p>Nous répondrons à toutes les exigences dans les meilleurs délais</p>
                <hr class="mx-auto col-4 my-5">
            </div>
               <div class="portfolio-menu">
                   <div class="button-group filter-button-group">
                        <a class="button" href="{{ route('all') }}">Voir tous</a>
                        @foreach($categories as $category)
                            <button data-filter=".cat{{ $category->id }}">{{ $category->name }}</button>
                        @endforeach
                    </div>
               </div>
            <div class="grid gallery row">
                @foreach($images as $image)
                    <div class="col-lg-4 col-sm-6 cat{{ $image->category_id }} grid-item p-1">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="{{ url('images/' . $image->name) }}" class="image-link" data-url="{{ $image->url }}" data-link="{{ route('image.click', $image->id) }}" title="{{ $image->title }}" data-user="{{ $image->user->name }}"><img src="{{ url('thumbs/' . $image->name) }}" alt="image"></a>
                            </div>
                            <div class="portfolio-content">
                                @isset($image->title)
                                    <h4 class="text-dark">{{ $image->title }}</h4>
                                @endisset
                                @isset($image->description)
                                    <span class="text-muted">{{ $image->description }}</span>
                                @endisset
                                @isset($image->url)
                                    <em class="d-block"><a href="{{ $image->url }}" data-toggle="tooltip" title="{{ __('Voir le site web') }}">Site web</a></em>
                                @endisset
                                <div class="float-right">
                                    <em>
                                        (<span class="image-click">{{ $image->clicks }}</span> {{ trans_choice(__('vue|vues'), $image->clicks) }})
                                        <?php /* corriger les date insertion {{ $image->created_at->formatLocalized('%x') }} */ ?>
                                    </em>
                                </div>
                                <?php /* rating en attente
                                <div class="star-rating" id="{{ $image->id }}">
                                    <span class="count-number">({{ $image->users->count() }})</span>
                                    <div id="{{ $image->id . '.5' }}" data-toggle="tooltip" title="5" @if($image->rate > 4) class="star-yellow" @endif>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div id="{{ $image->id . '.4' }}" data-toggle="tooltip" title="4" @if($image->rate > 3) class="star-yellow" @endif>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div id="{{ $image->id . '.3' }}" data-toggle="tooltip" title="3" @if($image->rate > 2) class="star-yellow" @endif>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div id="{{ $image->id . '.2' }}" data-toggle="tooltip" title="2" @if($image->rate > 1) class="star-yellow" @endif>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div id="{{ $image->id . '.1' }}" data-toggle="tooltip" title="1" @if($image->rate > 0) class="star-yellow" @endif>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="float-right">
                                        @adminOrOwner($image->user_id)
                                        <a class="toggleIcons"
                                            href="#">
                                        <i class="fa fa-cog"></i>
                                        </a>
                                        <span class="menuIcons" style="display: none">
                                            <a class="form-delete text-danger"
                                                href="{{ route('image.destroy', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Supprimer cette photo')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a class="description-manage"
                                                href="{{ route('image.description', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Gérer la description')">
                                                <i class="fa fa-comment"></i>
                                            </a>
                                            <a class="albums-manage"
                                                href="{{ route('image.albums', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Gérer les albums')">
                                                <i class="fa fa-folder-open"></i>
                                            </a>
                                            <a class="category-edit"
                                                data-id="{{ $image->category_id }}"
                                                href="{{ route('image.update', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Changer de catégorie')">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="adult-edit"
                                                href="{{ route('image.adult', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Changer de statut')">
                                                <i class="fa @if($image->adult) fa-graduation-cap @else fa-child @endif"></i>
                                            </a>
                                        </span>
                                        <form action="{{ route('image.destroy', $image->id) }}" method="POST" class="hide">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        @endadminOrOwner
                                    </span>
                                </div>
                                */ ?>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Portfolio end-->
    <!--Contact Us area-->
    <div id="contact" class="contact-area pt-5 pb-3 bg-white">
        <div class="container">
            <div class="section-title text-center upcase">
                <h2>Contactez Moi</h2>
                <p>Nous répondrons de la meilleure façon pour votre projet, dans les meilleurs délais à La Réunion et dans le reste du monde</p>
                <hr class="mx-auto col-4 my-5">
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="contact-details d-flex">
                        <div class="col-sm-4 mb-5">
                            <div class="contact-box">
                                <span class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true" class="p-3"></i>
                                </span>
                                <h3>Adresse</h3>
                                <p>574 rocade sud, 97440, Saint-André</p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-5">
                            <div class="contact-box">
                                <span class="contact-icon">
                                    <a href="mailto:contact@tatoumi.com"><i class="fa fa-envelope" aria-hidden="true"  class="p-3"></i></a>
                                </span>
                                <h3>Email</h3>
                                <p><a href="mailto:contact@tatoumi.com">contact@tatoumi.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-5">
                            <div class="contact-box">
                                <span class="contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                                <h3>Service Client</h3>
                                <p>(+262) 692 24 84 33</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-6 mb-3" id="form-contact">
                    <form method="POST" action="{{ route('contactus.store') }}">
                        @csrf
                        <div class="form-row">
                            @include('partials.form-group', [
                                'title' => __('Votre nom'),
                                'type' => 'text',
                                'class' => 'col-sm-12 col-lg-6',
                                'name' => 'name',
                                'placeholder' => __("Ex: Payet Marc"),
                                'required' => true,
                            ])
                            @include('partials.form-group', [
                                'title' => __('Votre email'),
                                'type' => 'email',
                                'class' => 'col-sm-12 col-lg-6',
                                'name' => 'email',
                                'placeholder' => __("Ex: votre-nom@mail.com"),
                                'required' => true,
                            ])
                        </div>
                        @include('partials.form-group', [
                            'title' => __('Numéro de téléphone'),
                            'type' => 'tel',
                            'name' => 'phone',
                            'placeholder' => __("Ex: 0262123456"),
                            'required' => true,
                        ])
                        @include('partials.textarea-form-group', [
                            'title' => __('Votre message'),
                            'name' => 'message',
                            'placeholder' => __("Ici votre message ou demande de devis"),
                            'rows' => '4',
                            'required' => true,
                        ])
                        @include('partials.recaptcha-hidden', [
                            'name' => 'recaptcha',
                            'required' => true,
                        ])
                        @component('components.button')
                            @slot('color')
                                outline-info
                            @endslot
                            @slot('col')
                                col
                            @endslot
                            @lang('Envoyer')
                        @endcomponent
                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-6 mb-3">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact US end-->
    <!-- Footer start-->
    <div class="footer-area">
        <footer>
			<div class="basic-footer text-center gray-bg py-2">
				<div class="container">
					<div class="footer-logo">
						<a href="{{ route('home') }}"><h5>Tatoumi Création</h5></a>
					</div>
                    <div class="footer-social-icon">
                        <a href="https://www.facebook.com/tonychevalier974"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://twitter.com/ChevalierTony"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.linkedin.com/in/tonychevalier974/"> <i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="https://github.com/freezer974"><i class="fab fa-github fa-lg"></i></a>
                    </div>
					<div class="copyright mt-2">
						<p>&copy; Tous droits réservés par <a href="{{ route('home') }}">Tatoumi Création</a> 2018-2019 • <a href="{{ route('mentionslegales') }}">Mentions Légales</a> </p>
					</div>
				</div>
			</div>
		</footer>
    </div>
@endsection
@section('script')
    <script src="https://www.google.com/recaptcha/api.js?render={{ Config::get('app.googlerecaptchakey')}}"></script>

    <script>

    grecaptcha.ready(function() {
        grecaptcha.execute('{{ Config::get("app.googlerecaptchakey")}}', {action: "contact_us"}).then(function(token) {
            if (token) {
                document.getElementById('recaptcha').value = token;
            }
        });
    });

    if ($("#contact").offset().top < ($(window).scrollTop() + 58)) {
        $(".grecaptcha-badge").removeClass('d-none');
    }

    $(window).on('scroll', function () {
       
        if ($("#contact").offset().top < ($(window).scrollTop() + 58))
        {
            $(".grecaptcha-badge").removeClass('d-none');
        } else {
            $(".grecaptcha-badge").addClass('d-none');
        }
    });

    window.onload = function () {

        // jQuery and everything else is loaded
        $(document).ready(function() {

            $('body').css('margin-top', 0)

            $('.site-wrapper').fadeOut(1000)

            $('a.toggleIcons').click((e) => {
                e.preventDefault();
                let that = $(e.currentTarget)
                that.next().toggle('slow').end().children().toggleClass('fa-cog').toggleClass('fa-play')
            })

            $('a.form-delete').click((e) => {
                e.preventDefault();
                let href = $(e.currentTarget).attr('href')
                swal.fire({
                    title: '@lang('Vraiment supprimer cette photo ?')',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '@lang('Oui')',
                    cancelButtonText: '@lang('Non')'
                }).then((result) => {
                    if (result.value) {
                        $("form[action='" + href + "'").submit()
                    }
                })
            })

            $('.clip').animatedHeadline()
        })

        const swallAlertServer = () => {
            swal.fire({
                title: '@lang('Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...')',
                type: 'warning'
            })
        }

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        })

        $('a.description-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let text = that.parents('.card').find('.card-text').text()
            $('#description').val(text)
            $('#descriptionForm').attr('action', that.attr('href')).find('input').removeClass('is-invalid').next().text()
            $('#changeDescription').modal('show')
        })

        $('#descriptionForm').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('action'),
                data: that.serialize()
            })
            .done((data) => {
                let card = $('#image' + data.id)
                let body = card.find('.card-body')
                if(body.length) {
                    body.children().text(data.description)
                } else {
                    card.children('a').after('<div class="card-body"><p class="card-text">' + data.description + '</p></div>')
                }
                $('#changeDescription').modal('hide')
            })
            .fail((data) => {
                if(data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $('#descriptionForm input[name=' + key + ']').addClass('is-invalid').next().text(value)
                    })
                } else {
                    swallAlertServer()
                }
            })
        })

        $('a.category-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $('select').val(that.attr('data-id'))
            $('#editForm').attr('action', that.attr('href'))
            $('#changeCategory').modal('show')
        })

        $('a.adult-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let icon = that.children()
            let adult = icon.hasClass('fa-graduation-cap')
            if(adult) {
                icon.removeClass('fa-graduation-cap')
            } else {
                icon.removeClass('fa-child')
            }
            icon.addClass('fa-cog fa-spin')
            adult = !adult
            $.ajax({
                method: 'put',
                url: that.attr('href'),
                data: { adult: adult }
            })
            .done(() => {
                that.tooltip('hide')
                let icon = that.children()
                icon.removeClass('fa-cog fa-spin')
                let card = that.parents('.card')
                if(adult) {
                    icon.addClass('fa-graduation-cap')
                    card.addClass('border-danger')
                } else {
                    icon.addClass('fa-child')
                    card.removeClass('border-danger')
                }
            })
            .fail(() => {
                swallAlertServer()
            })
        })

        $('a.albums-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            that.tooltip('hide')
            that.children().removeClass('fa-folder-open').addClass('fa-cog fa-spin')
            e.preventDefault()
            $.get(that.attr('href'))
            .done((data) => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                $('#listeAlbums').html(data)
                $('#manageAlbums').attr('action', that.attr('href'))
                $('#editAlbums').modal('show')
            })
            .fail(() => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                swallAlertServer()
            })
        })

        $('#manageAlbums').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('action'),
                data: that.serialize()
            })
                .done((data) => {
                    if(data === 'reload') {
                        location.reload();
                    } else {
                        $('#editAlbums').modal('hide')
                    }
                })
                .fail(() => {
                    swallAlertServer()
                })
        })

        let memoStars = []
        $('.star-rating div').click((e) => {
            @auth
                let element = $(e.currentTarget)
                let values = element.attr('id').split('.')
                element.addClass('fa-spin')
                $.ajax({
                    url: "{{ url('rating') }}" + '/' + values[0],
                    type: 'PUT',
                    data: {value: values[1]}
                })
                .done((data) => {
                    if (data.status === 'ok') {
                        let image = $('#' + data.id)
                        memoStars = []
                        image.children('div')
                            .removeClass('star-yellow')
                            .each(function (index, element) {
                                if (data.value > 4 - index) {
                                    $(element).addClass('star-yellow')
                                    memoStars.push(true)
                                }
                                memoStars.push(false)
                            })
                            .end()
                            .find('span.count-number')
                            .text('(' + data.count + ')')
                        if(data.rate) {
                            if(data.rate == values[1]) {
                                title = '@lang("Vous avez déjà donné cette note !")'
                            } else {
                                title = '@lang("Votre vote a été modifié !")'
                            }
                        } else {
                            title = '@lang("Merci pour votre vote !")'
                        }
                        swal.fire({
                            title: title,
                            type: 'warning'
                        })
                    } else {
                        swal.fire({
                            title: '@lang('Vous ne pouvez pas voter pour vos photos !')',
                            type: 'error'
                        })
                    }
                    element.removeClass('fa-spin')
                })
                .fail(() => {
                    swallAlertServer()
                    element.removeClass('fa-spin')
                })
            @else
                swal.fire({
                    title: '@lang('Vous devez être connecté pour pouvoir voter !')',
                    type: 'error'
                })
            @endauth
        })

        $('.star-rating').hover(
            (e) => {
                memoStars = []
                $(e.currentTarget).children('div')
                    .each((index, element) => {
                        memoStars.push($(element).hasClass('star-yellow'))
                    })
                    .removeClass('star-yellow')
            }, (e) => {
            $.each(memoStars, (index, value) => {
                if(value) {
                    $(e.currentTarget).children('div:eq(' + index + ')').addClass('star-yellow')
                }
            })
        })

        $(".go-down").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault()
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - $("nav.navbar").height()
                }, 800, function(){
                    window.location.hash = hash;
                })
            }
        })

        $('.counter').counterUp({
            delay: .8,
            time: 150
        })

        $('.carousel').carousel()

        $('.grid').imagesLoaded( function() {
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
                }
            })
            // filter items on button click
            $('.filter-button-group').on( 'click', 'button', function() {
                $('.button-group > button').removeClass('active');
                $(this).addClass('active');

                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            })
            $grid.magnificPopup({
                delegate: 'a.image-link',
                type: 'image',
                tLoading: '<i class="fas fa-spinner fa-pulse fa-2x"></i>  @lang("Chargement...")',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current image
                    tCounter: '<span class="mfp-counter">%curr% @lang("sur") %total%</span>'
                },
                image: {
                    tError: '<a href="%url%">@lang("L\'image #%curr%</a> n\'a pas pu être chargée.")',
                    titleSrc: function(item) {
                        let title = item.el.attr('title')
                            title += (item.el.attr('data-url'))? ' - <a href="' + item.el.attr('data-url') + '">@lang("Site web")</a>' : ''
                            title += '<small>@lang("de") ' + item.el.attr('data-user') + '</small>'
                        return title
                    }
                }
            })
        })

        $('.portfolio-box').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'patch',
                url: that.find('a.image-link').attr('data-link')
            }).done((data) => {
                if(data.increment) {
                    let numberElement = that.find('.image-click')
                    numberElement.text(parseInt(numberElement.text()) + 1)
                }
            })
        })
    }
    </script>
    <!--    Google Maps-->
    <script>
        var map;
        function initMap() {
            // The location of tatoumi

            var tatoumi = {lat: -20.971463, lng: 55.651408};

            map = new google.maps.Map(
                document.getElementById('map'), {
                center: tatoumi,
                scrollwheel: false,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: tatoumi,
                map: map,
                title: 'Tatoumi Création'
            });

        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('app.googlekey') }}&callback=initMap" async defer></script>

@endsection




