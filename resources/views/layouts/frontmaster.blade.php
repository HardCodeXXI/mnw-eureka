<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Jobs | Matchandwork</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('panel/assets/images/dark mnw.webp')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{URL::asset('frontend/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home-style6">

        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{URL::asset('panel/assets/images/dark mnw.webp')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style2 modify1 header-home6">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area d-none">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-6">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="#">matchandwork</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:+0885898745">(+088) 1321312</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="{{route('login')}}">Login</a>/<a href="{{route('register')}}">Register</a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-3">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a href="index.html">
                                            <img src="{{URL::asset('panel/assets/images/dark mnw.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-90 md-pr-15">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                           <ul class="nav-menu">
                                              <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="{{url('/')}}">Home</a>
                                              </li>
                                               <li class="menu-item-has-children">
                                                   <a href="#">About</a>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Career Lab</a>
                                                   <ul class="sub-menu">
                                                      <li><a href="#">Self Exploration</a> </li>
                                                      <li><a href="#">Self Assesment</a> </li>
                                                   </ul>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Career Ready</a>
                                                   <ul class="sub-menu">
                                                      <li><a href="#">Career Consultation</a> </li>
                                                   </ul>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Community</a>
                                                   <ul class="sub-menu">
                                                      <li><a href="#">Drea-lity Board</a> </li>
                                                      <li><a href="#">Discussion Board</a> </li>
                                                      <li><a href="#">Digital Ambasador</a> </li>
                                                   </ul>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Job </a>
                                                   <ul class="sub-menu">
                                                      <li><a href="contact4.html">Contact Four</a> </li>
                                                   </ul>
                                               </li>
                                           </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="icon-bar cart-inner mini-cart-active">
                                              @guest
                                                <a class="cart-icon" href="{{route('login')}}">
                                                    <i class="flaticon-user"></i> Login
                                                </a>
                                              @endguest
                                              @auth
                                                <a class="cart-icon menu-item-has-children" href="javascript:;">
                                                    <i class="flaticon-user"></i> {{ Auth::user()->first_name }}
                                                </a>
                                                <div class="woocommerce-mini-cart text-left">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                            <li class="display-flex">
                                                                <div class="product-info">
                                                                    <a href="cart.html">My Profile</a><br>
                                                                </div>
                                                            </li>
                                                            <li class="display-flex">
                                                                <div class="product-info">
                                                                  <form method="POST" action="{{ route('logout') }}">
                                                                      @csrf
                                                                      <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                             this.closest('form').submit();" >Logout</a><br>
                                                                  </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                              @endauth
                                            </li>
                                            <li>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
          @yield('content')
        </div>
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style6">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 footer-widget md-mb-50 sm-mb-30">
                            <h4 class="widget-title">PT. Akselerasi Digitalenta Anak Bangsa
                            </h4>
                            <p class="text-white"><b class="text-white">@matchandwork @digitalent.acc @mentorinc.acc</b> <br> Rukan Sentra Niaga Bulevar Hijau <br> Pejuang, Medan Satria, Kota Bekasi <br> (+62) 822 0688 8402 </p>
                            <br>
                            <h4 class="widget-title">About Us</h4>
                            <ul class="site-map">
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Work with us </a></li>
                            </ul>

                            <br>
                            <b class="text-white">Community</b>
                            <ul class="site-map">
                                <li><a href="#">Mentors (mentorinc.acc)</a></li>
                                <li><a href="#">Digitalents (digitalent.acc) </a></li>
                                <li><a href="#">Discussion board</a></li>
                                <li><a href="#">Dreality board (Dream Reality)</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50 sm-mb-30">
                            <h4 class="widget-title">Services</h4>
                            <b class="text-white">Self Exploration</b>
                            <ul class="site-map">
                                <li><a href="#">Skills Match Questionnaire</a></li>
                                <li><a href="#">Startup Trivia Quiz </a></li>
                                <li><a href="#">Digi-blogs</a></li>
                            </ul>
                            <br>
                            <b class="text-white">Self Development</b>
                            <ul class="site-map">
                                <li><a href="#">DILC (Integrated Learning Center)</a></li>
                                <li><a href="#">Product Management Course</a></li>
                                <li><a href="#">Project Management Course</a></li>
                                <li><a href="#">UI/UX Design Course</a></li>
                                <li><a href="#">Techathon(Competition)</a></li>
                                <li><a href="#">Webinar</a></li>
                                <li><a href="#">Workshop</a></li>
                                <li><a href="#">Digitalent Ambasador</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                          <h4 class="widget-title">Ready-2-Work</h4>
                          <b class="text-white">Career Preparation</b>
                          <ul class="site-map">
                              <li><a href="#">CV Check</a></li>
                              <li><a href="#">Career Consultation </a></li>
                              <li><a href="#">Job Portal</a></li>
                              <li><a href="#">Internship Vacancies</a></li>
                              <li><a href="#">Career Fair</a></li>
                              <li><a href="#">Digitalen.acc Internship</a></li>
                          </ul>
                          <br>
                          <h4 class="widget-title">Here our talents! <br> <small>(For companies)</small> </h4>
                          <b class="text-white">Hiring platform <br> Corporate training </b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                  <div class="container">
                      <div class="main-part">
                          <div class="row y-middle">
                              <div class="col-lg-4 md-mb-20">
                                  <div class="footer-logo md-text-center">
                                      <a href="index.html"><img src="assets/images/logo-yellow.png" alt=""></a>
                                  </div>
                              </div>
                              <div class="col-lg-4 md-mb-20">
                                  <div class="copyright text-center md-text-left">
                                      <p>&copy; 2021 All Rights Reserved. <a href="#">Matchandwork</a></p>
                                  </div>
                              </div>
                              <div class="col-lg-4 text-right md-text-left">
                                  <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Event Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{URL::asset('frontend/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{URL::asset('frontend/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{URL::asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{URL::asset('frontend/assets/js/rsmenu-main.js')}}"></script>
        <!-- op nav js -->
        <script src="{{URL::asset('frontend/assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{URL::asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick js -->
        <script src="{{URL::asset('frontend/assets/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{URL::asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{URL::asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{URL::asset('frontend/assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{URL::asset('frontend/assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{URL::asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
         <!-- counter top js -->
        <script src="{{URL::asset('frontend/assets/js/waypoints.min.js')}}"></script>
        <!-- video js -->
        <script src="{{URL::asset('frontend/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{URL::asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- tilt js -->
        <script src="{{URL::asset('frontend/assets/js/tilt.jquery.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{URL::asset('frontend/assets/js/plugins.js')}}"></script>
        <!-- contact form js -->
        <script src="{{URL::asset('frontend/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{URL::asset('frontend/assets/js/main.js')}}"></script>
    </body>

</html>
