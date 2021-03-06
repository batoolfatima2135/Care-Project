<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets')}}/img/favicon.png" type="image/png">
    <title>Medcare Medical</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>care@gmail.com</a>
                    <span class="dn_btn"> <i class="ti-location-pin"></i>Find our Location</span>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-skype"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('department')}}">Department</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('doctor')}}">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('patient.create')}}">As a patient</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('doctor.create')}}">As a Doctor</a></li>

                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

			<main class="content">
                @yield('body')
            </main>

		  <!-- start footer Area -->
          <footer class="footer-area area-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 single-footer-widget">
                        <h4>MEDCARE</h4>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('department')}}">Department</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('doctor')}}">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-skype"></i></a></li>
                            <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>You can trust us. we only send promo offers,</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                            required="" type="email" />
                            <button class="click-btn btn btn-default">
                                <i class="ti-arrow-right"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets')}}/{{asset('assets')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/stellar.js"></script>
    <script src="{{asset('assets')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/mail-script.js"></script>
    <script src="{{asset('assets')}}/js/contact.js"></script>
    <script src="{{asset('assets')}}/js/jquery.form.js"></script>
    <script src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset('assets')}}/js/mail-script.js"></script>
    <script src="{{asset('assets')}}/js/theme.js"></script>
    </body>
    </html>
