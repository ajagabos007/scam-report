<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
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
                                <li><a href="scamreminder.html">Sign In</a></li>
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
                                            <li><a href="scamreminder.html">Contact</a></li>
                                            <li><a href="scamreminder.html">SignUp/SignIn</a></li>
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
</div>