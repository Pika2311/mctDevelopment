<!DOCTYPE html>
<html>

    
<!-- parallax_405:52-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MCT Development</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="CreataThemes" />

        <link rel="shortcut icon" href="{{ url('images/favicon/favicon-16.png') }}">

        <!--Bootstrap Css-->
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}" />

        <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">

        <!-- Materialdesign icons Css -->
        <link href="{{ url('css/materialdesignicons.min.css') }}" rel="stylesheet">

        <!-- pe-icon-7 css -->
        <link href="{{ url('css/pe-icon-7.css') }}" rel="stylesheet">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}" />
        <link rel="stylesheet" href="{{ url('css/owl.theme.css') }}" />
        <link rel="stylesheet" href="{{ url('css/owl.transitions.css') }}" />


        <!-- Custom style Css -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="logo navbar-brand" href="index-2.html">
                    <img src="{{ url('images/logo-web-transparent.png') }}" alt="" class="img-fluid logo-light"> 
                    <img src="{{ url('images/logo-web-transparent.png') }}" alt="" class="img-fluid logo-dark">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Prestations</a>
                        </li>
<!--
                        <li class="nav-item">
                            <a href="#work" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Client</a>
                        </li>
                    -->                        
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
<!--                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Mon Espace</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!--Start Home-->
        <section class="home-bg jarallax section h-100vh" data-jarallax='{"speed": 0.2}' id="home">
            <div class="bg-overlay"></div>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                    <h1 class="header_title mb-0 mt-3 text-center text-white mx-auto">MCT Development</h1>
                                    <p class="header_subtitle text-white mx-auto mt-3 mb-0">There is never Problem, only Solutions.</p>
                                    <ul class="mb-0 list-inline text-center skill_home mt-5">
                                        <li class="list-inline-item mr-0">Living In France</li>
                                        <li class="list-inline-item mr-0">+33 613 475 906</li>
                                        <li class="list-inline-item mr-0">contact@mct-development.com</li>
                                    </ul>
<!--                                    <ul class="social_home list-unstyled text-center pt-5">
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                    <div class="header_btn">
                                        <a href="#" class="btn btn-outline-custom btn-rounded mt-4 mr-3">Learn More</a>
                                    </div>
                                -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home-->

        <!-- Start About -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3><span class="font-weight-bold">A propos de</span> Nous</h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Passionné et rigoureux, MCT Development sera toujours partant pour réaliser vos projets.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 vertical-content">
                    <div class="col-lg-6">
                        <div class="about_content mt-3">
                            <h6 class="mb-3">Bonjour & Bienvenue</h6>
                            <h3 class="mb-3 font-weight-bold text-custom">Je suis Hoai Chinh TRAN.</h3>
                            <ul class="mb-0 list-inline about-work">
                                <li class="list-inline-item mr-0 text-muted">Full Stack Developer</li>
                                <li class="list-inline-item mr-0 text-muted">Volley-Ball Trainer</li>
                            </ul>
                            <p class="text-muted mt-3">Spécialiste du développement web, application mobile et logiciel. Nous fournissons à notre clientèle une écoute personnalisée afin de répondre précisement à ses attentes.</p>
                            <div class="progress-bars skill-custom mt-4">
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">Development</div>
                                    <div class="text-muted float-right">90%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">WordPress</div>
                                    <div class="text-muted float-right">60%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">Analyst</div>
                                    <div class="text-muted float-right">80%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img mt-3">
                            <img src="{{ url('images/about.jpg') }}" alt="" class="img-fluid mx-auto d-block position-relative about-tween">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Start Services -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>Nos <span class="font-weight-bold">Prestations</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Nos clients ne seront jamais livrés à eux-mêmes tant qu'ils ne possèderont pas totalement le sujet.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>01.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Site Vitrine</h5>
                                <p class="text-muted mb-0 mt-2">Un site vitrine présentera votre entreprise, ses compétences, ses services, sa situation géographique… Alliée à un formulaire de contact intuitif ainsi qu'à une demande de devis en ligne, le site vitrine est la solution idéale pour faire ses premiers pas sur Internet et accroître son développement commercial.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="{{ url('siteVitrine')}}" class="text-custom"><i class="pe-7s-more"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>02.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Site E-commerce</h5>
                                <p class="text-muted mb-0 mt-2">Un site e-commerce représente le commerce électronique: tous les produits que vous souhaitez vendre seront accessibles 24h/24, 7 jours/7.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="{{ url('ecommerce')}}" class="text-custom"><i class="pe-7s-more"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>03.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Site sur mesure</h5>
                                <p class="text-muted mb-0 mt-2">Vous ne trouvez pas ce que vous souhaitez dans les CMS existant, alors nous vous proposons une solution de développement telle que vous l'auriez crée.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="{{ url('backoffice')}}" class="text-custom"><i class="pe-7s-more"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Start Contact -->
        <section class="section_all bg-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3 class="font-weight-bold">Get In Tuch</h3>
                            <div class="vr_line mx-auto d-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="contact_info_box">
                            <div class="contact_details_content bg-white p-3 mt-3">
                                <div class="contact_icon float-left  pull-left">
                                    <i class="pe-7s-mail-open text_custom mr-3"></i>
                                </div>
                                <div class="contact_detail">
                                    <h6 class="font-weight-bold">Mail</h6>
                                    <p class="text-muted mb-0">contact@mct-development.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_info_box">
                            <div class="contact_details_content bg-white p-3 mt-3">
                                <div class="contact_icon float-left  pull-left">
                                    <i class="pe-7s-phone text_custom mr-3"></i>
                                </div>
                                <div class="contact_detail">
                                    <h6 class="font-weight-bold">Phone Number</h6>
                                    <p class="text-muted mb-0">+33-613-475-906.</p>
                                </div>
                            </div>
                        </div>
<!--                        
                        <form class="business_form_custom">
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject..">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                </div>
                            </div>
                        </form>
                    -->                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Start Footer -->
        <footer class="footer_detail">
            <div class="container">
<!--                 
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Important Link</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Our Pages</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Client</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Support</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Live Chat</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Press Kit</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Locations</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Melbourne</a></li>
                            <li><a href="#">London</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#">San Francisco</a></li>
                            <li><a href="#">Ontario</a></li>
                        </ul>
                    </div>
                </div>
            -->                
                <div class="fot_bor"></div>
                <div class="row pt-3 pb-3">
                    <div class="col-lg-12">
                        <div class="float-right float_none">
<!--                            <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Back to top -->
        <a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>
            
        <!-- JAVASCRIPTS -->
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/popper.min.js') }}"></script>
        <script src="{{ url('js/jquery.easing.min.js') }}"></script>

        <!-- scrollspy js -->
        <script src="{{ url('js/scrollspy.min.js') }}"></script>

        <!-- isotope js -->
        <script src="{{ url('js/isotope.js') }}"></script>

        <!-- magnific js -->
        <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>

        <!-- Particles Js -->
        <script src="{{ url('js/particles.js') }}"></script>  
        <script src="{{ url('js/particles.app.js') }}"></script>

        <!-- isotope js -->
        <script src="{{ url('js/isotope.js') }}"></script>

        <!-- Parallax Js -->
        <script src="{{ url('js/parallax.js') }}"></script>

        <!-- custom js -->
        <script src="{{ url('js/custom.js') }}"></script>

        <script>
            $(".element").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
        </script>

    </body>


<!-- parallax_405:52-->
</html>