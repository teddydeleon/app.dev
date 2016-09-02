<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

     <title>@yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Style -->

    <link rel="stylesheet" href="{{ URL::asset('bootstrap-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/Lightbox/dist/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/Icons/et-line-font/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/animate.css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">


    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader
============================================= -->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
<!-- Header
============================================= -->
<section class="main-header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo/logo_seo.png" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                <div class="col-md-8 col-xs-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#owl-hero" class="page-scroll">Home</a></li>
                        <li><a href="#services" class="page-scroll">Services</a></li>
                        <li><a href="#portfolio" class="page-scroll">Works</a></li>
                        <li><a href="#team" class="page-scroll">About</a></li>
                        <li><a href="#contact" class="page-scroll">Contact</a></li>
                    </ul>
                </div>
                <div class="social-media hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item" style="background-image: url(img/sliders/marketing.jpg)">
            <div class="caption">
                <h6>Internet Marketing</h6>
                <h1>SEO <span>SEM</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>
        <div class="item" style="background-image: url(img/sliders/shopping_cart.jpg)">
            <div class="caption">
                <h6>Creat a Shopping Cart</h6>
                <h1>E-<span>Commerce</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>
		
		<!--optional slide three-->
		
        <!--<div class="item" style="background-image: url(img/sliders/Slide3.jpg)">
            <div class="caption">
                <h6>Branding / Design / Creativty</h6>
                <h1>Clean <span>Code</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>-->
		
    </div>
</section>

<!-- Welcome
============================================= -->
<section id="welcome">
    <div class="container">
        <h2>SeoSem&nbsp;<span> The Marketing Powerhouse</span></h2>
        <hr class="sep">
        <p>We will send you to the first page of google!</p>
        <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/welcome/SEOSEM.png" alt="logo">
    </div>
</section>

<!-- Services
============================================= -->
<section id="services">
    <div class="container">
        <h2>Hoe We Do It</h2>
        <hr class="light-sep">
        
        <div class="services-box">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-md-4">
                    <div class="media-left"><span class="icon-download"></span></div>
                    <div class="media-body">
                        <h3>Backlinks</h3>
                        <p>We go out get you all kinds of tier one backlinks all over the globe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-left"><span class="icon-mobile"></span></div>
                    <div class="media-body">
                        <h3>Keywords</h3>
                        <p>we will do all kinds of key word research!</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="media-left"><span class="icon-compass"></span></div>
                    <div class="media-body">
                        <h3>On page opt.</h3>
                        <p>We go out get you all kinds of tier one backlinks all over the globe.</p>
                    </div>

                </div>
				
				<!--more options-->
				
               <!-- <div class="row wow fadeInUp" data-wow-delay=".6s">
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-adjustments"></span></div>
                        <div class="media-body">
                            <h3>Easy To Customize</h3>
                            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-tools"></span></div>
                        <div class="media-body">
                            <h3>Photoshop</h3>
                            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-wallet"></span></div>
                        <div class="media-body">
                            <h3>Money Saver</h3>
                            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
                        </div>

                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio
============================================= -->
<section id="portfolio">
    <div class="container-fluid">
        <h2>My Work</h2>
        <hr class="sep">
        <p>This is not really my work but you get the picture.</p>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a class="portfolio-box" href="img/portfolio/AuditSEO.jpg" data-lightbox="image-1" data-title="Your caption">
                    <img src="img/portfolio/AuditSEO.jpg" class="img-responsive" alt="1">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                               Ideas
                            </div>
                            <div class="project-name">
                                Research
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="img/portfolio/Audit website.jpg" class="portfolio-box" data-lightbox="image-2" data-title="Your caption">
                    <img src="img/portfolio/Audit website.jpg" class="img-responsive" alt="2">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Full Audit
                            </div>
                            <div class="project-name">
                                Site Wide
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="img/portfolio/Audit site.jpg" class="portfolio-box" data-lightbox="image-3" data-title="Your caption">
                    <img src="img/portfolio/Audit site.jpg" class="img-responsive" alt="3">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Systems Audit
                            </div>
                            <div class="project-name">
                                Site Wide
                            </div>
                        </div>
                    </div>
                </a>
            </div>
			
			<!--more options--->
			
            <!--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="img/portfolio/4.jpg" class="portfolio-box" data-lightbox="image-4" data-title="Your caption">
                    <img src="img/portfolio/4.jpg" class="img-responsive" alt="4">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="img/portfolio/5.jpg" class="portfolio-box" data-lightbox="image-5" data-title="Your caption">
                    <img src="img/portfolio/5.jpg" class="img-responsive" alt="5">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="img/portfolio/6.jpg" class="portfolio-box" data-lightbox="image-6" data-title="Your caption">
                    <img src="img/portfolio/6.jpg" class="img-responsive" alt="6">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>--->
			
        </div>
    </div>
</section>
<!-- Work Process
============================================= -->
<section id="work-process">
    <div class="container">
        <h2>Where we are</h2>
        <hr class="sep">
        <p>What We are capabable of</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-3">
                <span class="icon-cloud"></span>
                <h4>1.cloud</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-chat"></span>
                <h4>2.gossip</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-dial"></span>
                <h4>3.turnt up</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-download"></span>
                <h4>4.download</h4>
            </div>
        </div>
    </div>
</section>
<!-- Some Fune Facts
============================================= -->
<section id="fun-facts">
    <div class="container">
        <h2>Some Fun Facts </h2>
        <hr class="light-sep">
        <p>Fun Facts</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-3">
                <span class="icon-happy"></span>
                <h2 class="number timer">367</h2>
                <h4>Happy Clients</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-trophy"></span>
                <h2 class="number timer">150</h2>
                <h4>Project Done</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-wine"></span>
                <h2 class="number timer">121</h2>
                <h4>Glass Of Wine</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-documents"></span>
                <h2 class="number timer">10000</h2>
                <h4>Lines Of Code</h4>
            </div>
        </div>
    </div>
</section>
<!-- Some Fune Facts
============================================= -->
<section id="team">
    <div class="container">
        <h2>Our Team</h2>
        <hr class="sep">
        <p>Designers Behind This Work</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/MariaDoe.jpg" alt="1">
                    <h4>Maria Doe</h4>
                    <p>Designer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/JasonDoe.jpg" alt="2">
                    <h4>Jason Doe</h4>
                    <p>Developer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/MikeDoe.jpg" alt="3">
                    <h4>Mike Doe</h4>
                    <p>Photographer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials
============================================= -->
<section id="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <hr class="light-sep">
        <p>What Clients Say About Us</p>
        <div id="owl-testi" class="owl-carousel owl-theme">
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us
============================================= -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <hr class="sep">
        <p>Get In Touch</p>
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>
                <a href="#" class="btn-block">Send</a>
            </form>
        </div>
    </div>
</section>
<!-- Google Map
============================================= -->
<div id="map"></div>
<!-- Footer
============================================= -->
<footer>
    <div class="container">
        <h1>Rise</h1>
        <div class="social">
            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
        </div>
        <h6>&copy; 2015 Rise.Development By BootstrapDev</h6>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins and really its necessary for just about everything) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->


<script src="{{ URL::asset('bootstrap-assets/js/bootstrap.min.js')}} "></script>

<!-- JS PLUGINS -->
<script src="{{ URL::asset('js/custom.js')}} "></script>
<script src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js')}} "></script>
<script src="{{ URL::asset('js/jquery.easing.min.js')}} "></script>
<script src="{{ URL::asset('plugins/waypoints/jquery.waypoints.min.js')}} "></script>
<script src="{{ URL::asset('plugins/countTo/jquery.countTo.js')}} "></script>
<script src="{{ URL::asset('plugins/inview/jquery.inview.min.js')}} "></script>
<script src="{{ URL::asset('plugins/Lightbox/dist/js/lightbox.min.js')}} "></script>
<script src="{{ URL::asset('plugins/WOW/dist/wow.min.js')}} "></script>

<!-- GOOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>