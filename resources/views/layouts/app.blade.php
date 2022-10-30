<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ======== Page title ============ -->
    <title>{{config('app.name')}} - {{$title?? "Report Fraudulent E-commerce Vendors"}}</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('theme/assets/img/favicon.png')}}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/icons.css')}}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/animate.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/metismenu.css')}}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/owl.theme.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('theme/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/progress_timeline.css')}}">
    @livewireStyles
    
</head>

<body class="body-wrapper">    
    
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        X
                    </span>
                </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class="header-wrap header-2">
        <div class="top-header d-none d-md-block">
            <div class="container-flud">
                <div class="row">
                    <div class="col-md-7 pr-md-0 col-12">
                        <div class="header-cta">
                            <ul>
                                <li>
                                  <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i> support@gmail.com</a>
                                </li>
                                <li>
                                  <a href="tel:+8801700080702"><i class="fal fa-phone"></i> +012 (345) 67 89</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-right-cta d-flex justify-content-end">
                            <div class="social-profile mr-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            |
                            <div class="lan-select ml-30">
                                <form>
                                    <select id="lan">
                                        <option>English</option>
                                        <option>China</option>
                                        <option>Bangla</option>
                                        <option>Hindi</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('theme/assets/img/logo-2.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                            <li><a href="/">Home</a> </li>

                                <li><a href="#">Scam Types <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">scam 1</a></li>
                                        <li><a href="index-2.html">Scam 2</a></li>
                                        <li><a href="index-3.html">Scam 3</a></li>
                                        <li><a href="index-4.html">scam 4</a></li>
                                        <li><a href="index-5.html">scam 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a> </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="cases-grid.html">Case Study</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <div class="header-btn-cta">
                            <a href="contact.html" class="theme-btn">Consultancy <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">                    
                                <div id="hamburger">
                                    <i class="fal fa-bars"></i>
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class="mobile-nav">
                                    <button type="button" class="close-nav">
                                        <i class="fal fa-times-circle"></i>
                                    </button>
                                    <nav class="sidebar-nav">
                                        <ul class="metismenu" id="mobile-menu">
                                            <li><a class="has-arrow" href="#">Homes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Homepage 1</a></li>
                                                    <li><a href="index-2.html">Homepage 2</a></li>
                                                    <li><a href="index-3.html">Homepage 3</a></li>
                                                    <li><a href="index-4.html">Homepage 4</a></li>
                                                    <li><a href="index-5.html">Homepage 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li>
                                                <a class="has-arrow" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="faq.html">faq</a></li>
                                                    <li><a href="services-details.html">services details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="cases-grid.html">Case Grid</a></li>
                                                    <li><a href="case-2.html">Case Grid 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
        
                                    <div class="action-bar">
                                        <a href="mailto:modinatheme@gmail.com"><i class="fal fa-envelope-open-text"></i>info@webmail.com</a>
                                        <a href="tel:123-456-7890"><i class="fal fa-phone"></i>987-098-098-09</a>
                                        <a href="contact.html" class="d-btn theme-btn black">Consultancy</a>
                                    </div>
                                </div>                            
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <section class="page-banner-wrap bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="banner-text">techex</div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <div class="page-heading text-white">
                        <div class="page-title">
                            <h1>{{$page_title?? ""}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          {{ $breadcrumb_items?? ""}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>   
    <main>
        {{ $slot }}    
    </main>

    <footer class="footer-3 mt-4  p-0 footer-wrap bg-cover" style="background-image: url({{asset('theme/assets/img/home3/footerbg.jpg')}})">
        <div class="footer-widgets p-0">            
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3 col-12 pr-xl-4">
                        <div class="single-footer-wid site_footer_widget">
                            <a href="/">
                                <img src="{{asset('theme/assets/img/footer-whitel-logo.png')}}" alt="">
                            </a>
                            <p class="mt-4">Sed ut perspiciatis unde omnis natus voluptatem accusa ntiumy doloremque laudantium.omnis natus voluptatem accusa ntiumy doloremque laudantium</p>
                            <div class="social-link mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">                        
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">                        
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-footer-wid recent_post_widget">
                            <div class="wid-title">
                                <h4>News News</h4>
                            </div>
                            <div class="recent-post-list">
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/blog/b1.jpg')}};"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>24th Nov 2020</span>
                                        <h5><a href="news-details.html">User’s Perspes Using Story Structure</a></h5>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/blog/b2.jpg')}};"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>15th July 2021</span>
                                        <h5><a href="news-details.html">Optimiz For Assistive Technology Users</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container text-center">
                <div class="footer-bottom-content text-white">
                    <p>© 2021 <a href="index.html">Techex</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    @stack('modals')

    @livewireScripts

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/imageload.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/easypiechart.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/counterup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/metismenu.js')}}"></script>
    <script src="{{asset('theme/assets/js/timeline.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/ajax-mail.js')}}"></script>
    <script src="{{asset('theme/assets/js/active.js')}}"></script>
</body>

</html>