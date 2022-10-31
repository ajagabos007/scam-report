<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>ScamReport - Report Fraudulent E-commerce Vendors</title>
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
    
</head>

<body class="body-wrapper">    
    
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <div class="txt-loading">
                    @foreach(str_split(strtoupper(config('app.name'))) as $char)
                        <span data-text-preloader="{{$char}}" class="letters-loading">
                            {{$char}}
                        </span>
                   @endforeach 
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

    <header class="header-wrap header-4">
        <div class="top-header d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-md-0 col-12">
                        <div class="header-cta">
                            <ul>
                                <li>
                                  <a href="mailto:support@scamreport.ng"><i class="fal fa-envelope"></i> support@scamreport.ng</a>
                                </li>
                                <li>
                                  <a href="tel:+2347017518376"><i class="fal fa-phone"></i> +234 701 751 8376</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 text-white">
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
                                        </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('theme/assets/img/ScamReport-white.png')}}" width="200px" height="35px" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                                <li ><a href="/">Home</a> </li>
                                <li><a href="scamreminder.html">About</a> </li>
                                <li><a href="scamreminder.html">Services</a></li>
                                <li><a href="scamreminder.html">Case Study</a></li>
                                <li><a href="scamreminder.html">News</a></li>
                                <li><a href="scamreminder.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <div class="header-btn-cta">
                            <a href="{{route('report-scams.create')}}" class="theme-btn">Report a Scam <i class="fas fa-arrow-right"></i></a>
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
                                            <li><a class="has-arrow" href="#">Homes</a> </li>
                                            <li><a href="scamreminder.html">about</a></li>
                                            <li><a href="scamreminder.html">services</a></li>
                                            <li>
                                                <a class="has-arrow" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="scamreminder.html">faq</a></li>
                                                    <li><a href="scamreminder.html">services details</a></li>
                                                    <li><a href="scamreminder.html">Team</a></li>
                                                    <li><a href="scamreminder.html">Case Grid</a></li>
                                                    <li><a href="scamreminder.html">Case Grid 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="scamreminder.html">News</a></li>
                                            <li><a href="scamreminder.html">Contact</a></li>
                                        </ul>
                                    </nav>
        
                                    <div class="action-bar">
                                        <a href="mailto:modinatheme@gmail.com"><i class="fal fa-envelope-open-text"></i>support@scamreport.ng</a>
                                        <a href="tel:123-456-7890"><i class="fal fa-phone"></i>+234 701 751 8376</a>
                                        <a href="{{route('report-scams.create')}}" class="d-btn theme-btn black">Report A Scam</a>
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

    <section class="hero-slide-wrapper hero-4">
        <div class="hero-slider">
            <div class="single-slide bg-cover">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="hero-contents">
                                <span>Scam_Report Nigeria</span>
                                <h1>Best IT Solutions To Combat Fraud</h1>
                                <p>Help make the internet a safer place for e-commerce, by reporting any e-commerce fraud which might have cost you a fortune.</p>
                                <a href="{{route('report-scams.create')}}" class="theme-btn">Report A Scam <i class="fas fa-arrow-right"></i></a>
                                <a href="{{route('report-scams.index')}}" class="theme-btn minimal-btn">Learn More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0 col-12 pl-lg-5">
                            <div class="hero-banner">
                                <div class="dot"></div>
                                <img src="{{asset('theme/assets/img/home4/hero-4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-elements"></div>
            </div>
        </div>
    </section>

    <section class="cta-wrapper section-bg-2">
        <div class="container">
            <div class="cta-content-banner-4 bg-cover" style="background-image: url({{asset('theme/assets/img/cta-bg4.png')}}">
                <div class="row align-items-center">
                    <div class="col-lg-7 offset-lg-1 text-white text-center text-lg-left">
                        <h1>Not Only About Reporting A Scam, <br> You Can Do More. </h1>
                    </div>
                    <div class="col-lg-3 text-center text-lg-right mt-3 mt-lg-0">
                        <a href="scamreminder.html" class="theme-btn off-white">Learn More<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service-wrapper section-bg-2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-30">
                        <p>Have you ever been scammed?</p>
                        <h1>At least 1 out of every 5 Nigerians have been scammed
                            Using e-commerce platforms, its time to report those fraudsters.</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-vcard">
                        <a href="scamreminder.html" class="link"><i class="fas fa-arrow-right"></i></a>
                        <div class="icon">
                            <i class="flaticon-monitor"></i>
                        </div>
                        <div class="content">
                            <h3>Quality Service</h3>
                            <p>Sed perspe unde omnis 
                                natus sit voluptatem accu
                                doloremue laudantum</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-vcard">
                        <a href="scamreminder.html" class="link"><i class="fas fa-arrow-right"></i></a>
                        <div class="icon">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="content">
                            <h3>Exckusive Members</h3>
                            <p>Sed perspe unde omnis 
                                natus sit voluptatem accu
                                doloremue laudantum</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-vcard">
                        <a href="scamreminder.html" class="link"><i class="fas fa-arrow-right"></i></a>
                        <div class="icon">
                            <i class="flaticon-tool"></i>
                        </div>
                        <div class="content">
                            <h3>Excellent Support</h3>
                            <p>Sed perspe unde omnis 
                                natus sit voluptatem accu
                                doloremue laudantum</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-vcard">
                        <a href="scamreminder.html" class="link"><i class="fas fa-arrow-right"></i></a>
                        <div class="icon">
                            <i class="flaticon-video"></i>
                        </div>
                        <div class="content">
                            <h3>Supper Managment</h3>
                            <p>Sed perspe unde omnis 
                                natus sit voluptatem accu
                                doloremue laudantum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="about-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12 text-center text-xl-left">
                    <div class="about-img clip-path">
                        <img src="{{asset('theme/assets/img/home4/about.jpg')}}" alt=" no image">
                    </div>
                </div>
                <div class="col-12 text-center text-xl-left col-xl-6 mt-5 mt-xl-0 pl-xl-5">
                    <div class="section-title mb-30">
                        <p>About Company</p>
                        <h1>25 Years Of Experience <br> In IT Solutions</h1>
                    </div>
                    <p>Sed ut perspiciatis unde omnis natus error sity
                        voluptatem accusa ntium doloremque laudantie
                        totam rem aperiamea queipsa quae abillonven
                        tore veritatis et quasi architecto 
                        beatae vitae dicta sunt explicabo.</p>
                    <a href="about.html" class="theme-btn black mt-4">learn more <i class="fas fa-arrow-right"></i></a>

                    <div class="row text-center">
                        <div class="col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon">
                                    <i class="flaticon-speech-bubble"></i>
                                </div>
                                <h4><a href="services-details.html">IT Consultancy</a></h4>
                                <p>Faster Smart Solutions</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon">
                                    <i class="flaticon-unlock"></i>
                                </div>
                                <h4><a href="services-details.html">Cyber Security</a></h4>
                                <p>Faster Smart Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-banner-5 bg-cover" style="background-image: url({{asset('theme/assets/img/cta5.png')}})}}}}                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 pl-xl-0 col-12 text-center text-xl-left">
                        <h2>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h2>
                        <p>Sed ut perspiciatis unde omnis natus error voluptatems 
                            accusa ntium doloremque laudantium totam.</p>
                    </div>
                    <div class="col-xl-4 mt-4 mt-xl-0 offset-xl-1 col-12 text-center text-xl-left">
                        <a href="about.html" class="theme-btn">Get a quote <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-shape d-none d-sm-block">
            <img src="{{asset('theme/assets/img/home4/ring.png')}}" alt="">
        </div>
    </section>

    <section class="our-service-provide section-bg text-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-30">
                        <p>How can help you</p>
                        <h1>We Provide Awesome Solutions To <br>
                            Growth Your Business</h1>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s1.jpg')}}"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-monitor"></i>
                            </div>
                            <h3><a href="services-details.html">Web Development</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s2.jpg')}}"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-pyramid"></i>
                            </div>
                            <h3><a href="services-details.html">Marketing Strategy</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s3.jpg')}})"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-diagram"></i>
                            </div>
                            <h3><a href="services-details.html">Product Engineering</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s4.jpg')}})"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-diagram-1"></i>
                            </div>
                            <h3><a href="services-details.html">UX/UI Strategy</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s5.jpg')}})"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <h3><a href="services-details.html">Tech Consultations</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/s6.jpg')}})"></div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-mobile-app"></i>
                            </div>
                            <h3><a href="services-details.html">Apps Development</a></h3>
                            <p>Quis autem veleum reprehenderit quin volupta esse quam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="our-process clear-fix section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-40">
                        <p>our Working process</p>
                        <h1>We Follow 3 Steps to Grow Business</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-work-process">
                        <div class="icon">
                            <i class="fal fa-mug-hot"></i>
                            <span>01</span>
                        </div>
                        <div class="content">
                            <h3>Take Your Coffee</h3>
                            <p>Sed utperspiciatis unde omniste natus error sit volupta accusantium doloremque laudantium</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-work-process">
                        <div class="icon">
                            <i class="fal fa-bullseye-arrow"></i>
                            <span>02</span>
                        </div>
                        <div class="content">
                            <h3>Market Analysis</h3>
                            <p>Sed utperspiciatis unde omniste natus error sit volupta accusantium doloremque laudantium</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-work-process">
                        <div class="icon">
                            <i class="fal fa-trophy-alt"></i>
                            <span>03</span>
                        </div>
                        <div class="content">
                            <h3>Get Your Results</h3>
                            <p>Sed utperspiciatis unde omniste natus error sit volupta accusantium doloremque laudantium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="work-link d-none d-lg-block">
            <svg width="1292px" height="136px">
            <path fill-rule="evenodd"  stroke="rgb(9, 107, 216)" stroke-width="2px" stroke-dasharray="8, 8" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.2" fill="none"
            d="M1.000,131.999 C1.000,131.999 190.931,8.144 400.000,91.999 C626.535,182.860 763.243,66.417 833.000,32.000 C931.956,-16.824 1115.947,-22.085 1289.774,130.874 "/>
            </svg>
        </div>
    </section>

    <section class="our-team-wrapper section-bg-2 section-padding bg-contain" style="background-image: url({{asset('theme/assets/img/cta5.png')}})">       <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-12 col-md-7 text-center text-md-left">
                    <div class="section-title">
                        <p>Exclusive Members</p>
                        <h1>Meet Our Experience <br> Team Members</h1>
                    </div>
                </div>
                <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                    <a href="team.html" class="theme-btn">View all Member <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-member-card">
                        <div class="member-img bg-cover bg-center" style="background-image: url({{asset('theme/assets/img/home4/tm1.jpg')}})">
                        </div>
                        <div class="member-bio">
                            <h4>Wallace S. Camacho</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-member-card active">
                        <div class="member-img bg-cover bg-center" style="background-image: url({{asset('theme/assets/img/home4/tm2.jpg')}})">
                        </div>
                        <div class="member-bio">
                            <h4>Lawrence Pacheco</h4>
                            <p>Web Developer</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-member-card">
                        <div class="member-img bg-cover bg-center" style="background-image: url({{asset('theme/assets/img/home4/tm3.jpg')}})">
                        </div>
                        <div class="member-bio">
                            <h4>Timothy L. Figueroa</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-member-card">
                        <div class="member-img bg-cover bg-center" style="background-image: url({{asset('theme/assets/img/home4/tm4.jpg')}})">
                        </div>
                        <div class="member-bio">
                            <h4>Michael L. Branch</h4>
                            <p>Product Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="project-case-study-wrapper clear-fix section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-30">
                        <p>Latest case studies</p>
                        <h1>We Have Successfully Completed One <br> IT Solutions Project</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-case-study owl-carousel owl-theme">
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs1.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs2.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs3.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs1.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs2.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs3.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">IT Solutions For Growth Business</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error luptatem accusantium doloremque laudantium totam</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="circle-shape style-2 d-none d-sm-block">
            <img src="{{asset('theme/assets/img/home4/ring.png')}}" alt="">
        </div>
    </section>

    <section class="fun-fact-wrapper">
        <div class="funfact-box-bg bg-cover" style="background-image: url({{asset('theme/assets/img/home4/funfact-line.png')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 pl-xl-0 offset-xl-1 text-white">
                        <div class="section-title mb-30">
                            <p>Latest case studies</p>
                            <h1>Let’s See Our Great <br> Achievement </h1>
                        </div>
                        <p>Sed ut perspiciatis unde omnis natus error sit voluptatem 
                            accusa ntium doloremque laudantium totam rem aperiamea
                            queipsa quae abillo inventore veritatis et quasi architecto 
                            beatae vitae dicta sunt explicabo.</p>
                            <a href="about.html" class="theme-btn mt-4 minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-xl-5 mt-5 mt-xl-0">
                        <div class="fun-fact-grid">
                            <div class="single-funfact-item">
                                <div class="icon">
                                    <i class="fal fa-gem"></i>
                                </div>
                                <h3>368</h3>
                                <p>Project Completed</p>
                            </div>
                            <div class="single-funfact-item">
                                <div class="icon">
                                    <i class="fal fa-drafting-compass"></i>
                                </div>
                                <h3>785</h3>
                                <p>Expert Consultants</p>
                            </div>
                            <div class="single-funfact-item">
                                <div class="icon">
                                    <i class="fal fa-stars"></i>
                                </div>
                                <h3>896</h3>
                                <p>5 Stars Rating</p>
                            </div>
                            <div class="single-funfact-item">
                                <div class="icon">
                                    <i class="fal fa-trophy-alt"></i>
                                </div>
                                <h3>125</h3>
                                <p>Awards Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section section-padding">
        <div class="container">
            <div class="row mb-30">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <p>Latest News & Blog</p>
                        <h1>Get Every Single Updates</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-news-card">
                        <div class="blog-featured-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/blog1.jpg')}})">
                            <div class="date">
                                <span>25</span>Jan
                            </div>
                        </div>
                        <div class="content">
                            <div class="post-author">
                                <a href="news-details.html"><i class="fal fa-user-circle"></i> Michael K. Steven</a>
                            </div>
                            <h3><a href="news-details.html">Make Honest Design Work As For Digital Business.</a></h3>
                            <p>Perspiciatis unde omnis natus volupt accusa ntium dolorem laudan</p>
                            <div class="btn-link-share">
                                <a href="news-details.html" class="theme-btn off-white">read more <i class="fas fa-arrow-right"></i></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-news-card active">
                        <div class="blog-featured-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/blog2.jpg')}})">
                            <div class="date">
                                <span>25</span>Jan
                            </div>
                        </div>
                        <div class="content">
                            <div class="post-author">
                                <a href="news-details.html"><i class="fal fa-user-circle"></i> Salman Ahmed</a>
                            </div>
                            <h3><a href="news-details.html">Should You Do When A Webs Design Trend Becomes</a></h3>
                            <p>Perspiciatis unde omnis natus volupt accusa ntium dolorem laudan</p>
                            <div class="btn-link-share">
                                <a href="news-details.html" class="theme-btn off-white">read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-news-card">
                        <div class="blog-featured-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/blog3.jpg')}})">
                            <div class="date">
                                <span>25</span>Feb
                            </div>
                        </div>
                        <div class="content">
                            <div class="post-author">
                                <a href="news-details.html"><i class="fal fa-user-circle"></i> Michael K. Steven</a>
                            </div>
                            <h3><a href="news-details.html">How To Space And Kern Punct Marks Other Symbols</a></h3>
                            <p>Perspiciatis unde omnis natus volupt accusa ntium dolorem laudan</p>
                            <div class="btn-link-share">
                                <a href="news-details.html" class="theme-btn off-white">read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section class="cta-banner style-2">
        <div class="container-fluid bg-cover section-bg" style="background-image: url({{asset('theme/assets/img/cta_bg1.png')}}">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                        <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                    </div>
                    <div class="col-xl-5 col-12 text-center text-xl-right">
                        <a href="contact.html" class="theme-btn mt-4 mt-xl-0">Get a quote <i class="fas fa-arrow-right"></i></a>
                        <a href="services-details.html" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <footer class="footer-3 footer-wrap bg-cover" style="background-image: url({{asset('theme/assets/img/home3/footerbg.jpg')}})">
        <div class="footer-widgets">            
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