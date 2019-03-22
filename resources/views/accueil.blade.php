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
                    <h2>Salut, Je suis Tony</h2>
                    <h2 class="ah-headline">
                        <span>Un auto-entrepreneur dans le domaine du </span>
                        <span class="ah-words-wrapper">
                            <b class="is-visible">Graphisme</b>
                            <b>Site web</b>
                            <b>Coaching</b>
                        </span>
                    </h2>
                    <button type="button" class="btn btn-outline-light">Contactez-moi</button>
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
						<p class="hidden-sm hidden-sm">Je souhaites vous faire profiter de ses années d'expériences en réalisant vos projets par un suivi rigoureux, des conseils judicieux, un excécution rapide afin de vous fournir dans les meilleurs délais vos travaux graphiques ou web. Je suis aussi engagé pour le respect de l'environnement pour cela vos travaux et sites internet que j'héberges sont stockés sur des serveurs écologiques.</p>
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
                            <h5>Illustrator <span>85%</span></h5>
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
                <a href="#contact" class="btn btn-outline-light mx-2">Demandez un devis</a>
                <a class="btn btn-outline-light mx-2" href="#contact">Contactez-moi</a>
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
							<div class="devider">
								<hr>
							</div>
							<p>Pour un meilleur rapport qualité / prix, et une meilleure rapidité d'exécution, voici comment nous travaillons avec vous.</p>
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
                    <div class="pb-5 text-white">
                        <h2>Facteurs intéressants</h2>
                        <p class="para">La synergie de création utilise un capital intellectuel initiant des clics et du matériel performant.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3 mb-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-tasks fa-2x pb-2 text-dark"></i>
                        <h1 class="counter text-info">69</h1>
                        <p>Projets fait</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 col-md-3 mb-3">
                    <div class="bg-white p-4">
                        <i class="fa fa-users fa-2x pb-2 text-dark"></i>
                        <h1 class="counter text-info">95</h1>
                        <p>Client heureux</p>
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
                        <h1 class="counter text-info">104</h1>
                        <p>jus de fruit énergétique</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--counter area start-->
    <!--  Services Area start-->
    <div id="service" class="services-area pt-5 pb-2 bg-light">
        <div class="container">
           <div class="section-title text-center upcase">
               <h2>Services</h2>
               <p>Des clients satisfaits du service à la carte, permettant d'être au plus proche de leurs exigences</p>
               <hr class="mx-auto col-4 my-5">
           </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
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
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-content">
                            <h4>Développement web</h4>
                            <p>Donner de la visibilité à votre entreprise sur internet en lui offrant la meilleur stratégie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
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
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-mobile-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4>App & iOS</h4>
                            <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-pen-square"></i>
                        </div>
                        <div class="service-content">
                            <h4>Design Graphique</h4>
                            <p>Plébicité votre entreprise et ses produits pour une communication visuelle impactante avec des produits publitaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie"></i>
                        </div>
                        <div class="service-content">
                            <h4>Résultat fiable</h4>
                            <p>Garantissez-vous des résultats performants avec une communication à plusieurs niveau et sur de multiples supports.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="service-content">
                            <h4>Email Marketing</h4>
                            <p>Communiquer sur vos projets, vos produits, votre image en lancant des campagne d'emailing et fidélisez votre clientèle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-3">
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
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4">
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
    <div id="testimonial" class="testimonial">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="testimonial-section-title">
                        <i class="fa fa-quote-right"></i>
                        <h4>Ce que les gens disent</h4>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <p>Beau travail, rapide et éfficace. A l'écoute dans la demande du client, suivi de la demande du client et de ses exigences, force de propositions et de créativité.</p>
                            <h5> par <strong>Mme Marie-France Ah-sing</strong></h5>
                        </div>
                        <div class="single-testimonial">
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
    <div id="portfolio" class="portfolio-area pt-5">
        <div class="container-fluid">
            <div class="section-title text-center upcase">
                <h2>Portfolio</h2>
                <p>Nous répondrons à toute les exigences de vos demandes dans les meilleurs délais</p>
                <hr class="mx-auto col-4 my-5">
            </div>
               <div class="portfolio-menu">
                   <div class="button-group filter-button-group">
                      <button data-filter="*">Tout</button>
                      <button data-filter=".cat1">Conception graphique</button>
                      <button data-filter=".cat2">Photoshop</button>
                      <button data-filter=".cat3">Développement web</button>
                      <button data-filter=".cat4">Photographie</button>
                      <button data-filter=".cat5">Entrepreneur</button>
                    </div>
               </div>
            <div class="row">
                <div class="portfolio-wrapper">
                    <div class="grid">
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat1 cat5 cat3 cat2 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Calendrier souple A4</h4></a>
                                <a href=""><p>fait par TC</p></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat1 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/2.jpg?=" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Calendrier carton A4</h4></a>
                                <a href=""><p>fait par TC</p></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat2 cat5 cat4 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Déplaint en Z A4</h4></a>
                                <a href=""><p>fait par TC</p></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat1 cat3 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Dépliant roulé 150x210mm</h4></a>
                                <a href=""><p>fait par TC</p></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat3 cat5 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Brochure A4</h4></a>
                                <a href=""><p>fait par TC</p></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 cat1 cat4 cat2 grid-item p-0">
                        <div class="portfolio-box">
                            <div class="portfolio-img">
                                <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-content">
                                <a href=""><h4>Etiquette 50x50</h4></a>
                                <a href=""><p>retouché par TC</p></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Portfolio end-->
    <!--Contact Us area-->
    <div id="contact" class="contact-area pt-5 pb-3">
        <div class="container">
            <div class="section-title text-center upcase">
                <h2>Contactez Moi</h2>
                <p>Nous répondrons de la meilleure façon pour votre projet, dans les meilleurs délais à La Réunion et dans le reste du monde</p>
                <hr class="mx-auto col-4 my-5">
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="contact-details">
                        <div class="col-sm-3 mb-3">
                            <div class="contact-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h3>Addresse</h3>
                                <p>220, chemin valentin, Saint-André</p>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="contact-box">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:support@dbuggers.com">contact@tatoumi.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="contact-box">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3>Numéro de contact</h3>
                                <p>(+262) 692 24 84 33</p>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="contact-box">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                <h3>Service Client</h3>
                                <p>(+262) ‭262 83 27 54‬</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mb-3">
                    <form action="#">
                        <div class="contact-form">
						  <div class="form-group">
							<div class="col-sm-6 mb-30">
							  <input type="text" class="form-control" placeholder="Votre nom">
							</div>
							<div class="col-sm-6 mb-30">
							  <input type="email" class="form-control" placeholder="Votre email">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-12 mb-30">
							  <input type="text" class="form-control" placeholder="Numéro de téléphone">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-12 mb-30">
							  <textarea class="form-control" rows="3" placeholder="Votre message"></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-12">
								<button class="btn default-btn submit-btn" type="submit">Envoyer</button>
							</div>
						  </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mb-3">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact US end-->
    <!-- Footer start-->
    <div class="foter-area">
        <footer>
			<div class="basic-footer text-center gray-bg ptb-20">
				<div class="container">
					<div class="footer-logo">
						<a href="index.html"><h5>Tatoumi Création</h5></a>
					</div>
                    <div class="footer-social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"> <i class="fa fa-google-plus"></i></a>
                    </div>
					<div class="copyright mt-10">
						<p>&copy; Tous droits réservés par <a href="tatoumi.com">Tatoumi Création</a> 2018</p>
					</div>
				</div>
			</div>
		</footer>
    </div>
@endsection
@section('script')


    <!--    Google Maps-->
        <script src="https://maps.googleapis.com/maps/api/js?key=<?= GOOGLE_KEY; ?>" ></script>
		<script>

            $('.site-wrapper').fadeOut(1000)

            $(".go-down").on('click', function(event) {
                if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
                }
            });

            $(function() {
                $('.clip').animatedHeadline();
            })

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-20.9549613, 55.6725596), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
					 styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-20.9549613, 55.6725596),
                    map: map,
                    title: 'Snazzy!'
                });
            }
		</script>
@endsection
