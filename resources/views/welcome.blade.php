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
    
    <!-- <div id="preloader" class="preloader">
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
    </div> -->

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
                                <li><a href="{{route('about')}}">About</a> </li>
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
                                            <li><a href="{{route('about')}}">about</a></li>
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
                        <p>ScamReport Specific Objectives</p>
                        <h1>Satistically Stating: 4 out every 5 Nigerian Have Been Scammed.</h1>
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
                            <h3>Evaluate Fraudsters TTP</h3>
                            <p>And further use These Tactics Technique Procedures
                                to educate the public on how to avoid such scams.
                            </p>
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
                            <h3>System Modelling</h3>
                            <p>From the TTP knowledge obtained, 
                                this will help spot fraudulent e-commerce 
                                vendors even before they defraud victims. 
                            </p>
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
                            <h3>Design Implementation</h3>
                            <p>Develop and implement a web-based e-commerce fraud 
                                reporting platform using PHP, Laravel, Python, etc. 
                            </p>
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
                            <h3>Resource Center</h3>
                            <p>Provide a valid source of information to law authorities 
                                on how to better catch and prosecute e-commerce fraudsters. 
                            </p>
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
                        <p>About ScamReport</p>
                        <h1>Serving the Public <br>Through being a Panacea</h1>
                    </div>
                    <p>The increasing rate of online scams that uses e-commerce system to defraud people is alarming. 
                        The problem is the fact that victims are voiceless after being scammed either by a 
                        perceived legitimate or illegitimate e-commerce vendor. Since the process of filing 
                        a scam report in Nigeria is discouraging, also coupled with the fact that even if victims 
                        successfully files a report, law enforcement agencies (such as EFCC, Police, etc.) 
                        are likely not going to respond if the defrauded amount is not up to 500,000 naira. 
                        Countless solutions towards preventing or mitigating this issue have popped up over the years, 
                        but none have precisely allowed victims to easily report a scam on a platform where 
                        their issues will be attended to. 
                    </p>
                    <a href="about.html" class="theme-btn black mt-4">learn more <i class="fas fa-arrow-right"></i></a>

                    <div class="row text-center">
                        <div class="col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon">
                                    <i class="flaticon-speech-bubble"></i>
                                </div>
                                <h4><a href="services-details.html">Progressive Society</a></h4>
                                <p>Building a Stronger Economy Together</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon">
                                    <i class="flaticon-unlock"></i>
                                </div>
                                <h4><a href="services-details.html">Stay Cyber Alert</a></h4>
                                <p>Take personal charge of your security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-shape d-none d-sm-block">
            <img src="{{asset('theme/assets/img/home4/ring.png')}}" alt="">
        </div>
    </section>
    
    <section class="fun-fact-wrapper">
        <div class="funfact-box-bg bg-cover" style="background-image: url({{asset('theme/assets/img/home4/funfact-line.png')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 pl-xl-0 offset-xl-1 text-white">
                        <div class="section-title mb-30">
                            <p>PROJECT LITERATURE REVIEW</p>
                            <h1>Review of Existing <br> System and Works </h1>
                        </div>
                        <p>In recent years, there have been much research and project implementation to mollify 
                            e-commerce fraudulent activities to ensure safe and legitimate business transactions 
                            on the internet. This has led to the design and implementation of various e-commerce 
                            systems which include software, hardware, or even both using different strategies and 
                            technologies. Several e-commerce fraud detections, prevention and/or, reporting system’s 
                            methodology, technology, limitations, and related literature are reviewed in this section.</p>
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

    <section class="project-case-study-wrapper clear-fix section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-30">
                        <p>Research methodology</p>
                        <h1>Producedural Steps For<br> Scam Report Project</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-case-study owl-carousel owl-theme">
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs1.png')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">METHODOLOGY OVERVIEW</a></h3>
                    <p>Proper planning was undertaken to ensure that the right viable software and hardware 
                        technologies were selected for this project.</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs2.png')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">REQUIREMENT ELICITATION</a></h3>
                    <p>Are processes and methods used in getting information from
                        e-commerce scams, e-commerce vendors, and learning of the fraudster's tactics technique protocols.</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs3.png')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">SURVEY METHOD</a></h3>
                    <p>There are two broad categories of survey methods, namely questionnaires and interviews. 
                        Questionnaires are usually paper and pencil instrument while interviews are usually oral.</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs4.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">QUESTIONNAIRE STANDARDIZATION</a></h3>
                    <p>Standardization can be defined as the method of putting together questions so that they will have the exact meaning 
                        when interpreted by different survey participant.</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs5.jpg')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">ARCHITECTURAL DESIGN</a></h3>
                    <p>The design of the system properly states what the proposed finished project will look like. 
                        It includes the actions or user, or an admin can or cannot take in the system.</p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url({{asset('theme/assets/img/home4/cs3.png')}})"></div>
                <div class="contents text-center">
                    <h3><a href="project-details.html">ARCHITECTURAL IMPLEMENTATION</a></h3>
                    <p>The structured languages define the structure of the website, while the programming languages define the functional purposes of the website. </p>
                    <a href="project-details.html" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="circle-shape style-2 d-none d-sm-block">
            <img src="{{asset('theme/assets/img/home4/ring.png')}}" alt="">
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
                                <img src="{{asset('theme/assets/img/ScamReport-white.png')}}" width="230px" height="39px" alt="logo">
                            </a>
                            <p class="mt-4" style ="align: justify" >We saw a need to restore trust in the online transaction system by giving consumers 
                                a unified online voice, thus putting businesses on their toes. 
                                </p>
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
                                <h4>Project Stages</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">Idea Conception</a></li>
                                <li><a href="about.html">Feasibity Study</a></li>
                                <li><a href="contact.html">System Design</a></li>
                                <li><a href="project-details.html">Design Implementation</a></li>
                                <li><a href="news.html">Testing & Maintainance</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">                        
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>User Actions</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">Report a Scam</a></li>
                                <li><a href="about.html">Drop Testimonies</a></li>
                                <li><a href="about.html">View Scams</a></li>
                                <li><a href="contact.html">Drop Scam Reviews</a></li>
                                <li><a href="project-details.html">Recommended Brands</a></li>
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
                                        <span><i class="fal fa-calendar-alt"></i>15th July 2022</span>
                                        <h5><a href="news-details.html">Optimize For Assistive Technology Users</a></h5>
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
                    <p>© 2022 <a href="index.html">ScamReport</a>. All Rights Reserved</p>
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