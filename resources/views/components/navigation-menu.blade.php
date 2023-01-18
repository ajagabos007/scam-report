<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
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

                                <li><a href="#">Scam Report <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('report-scams.index')}}">Report Index</a></li>
                                        <li><a href="{{route('report-scams.export-to-csv')}}">Export to CSV</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route ('about')}}">About</a> </li>
                                <li><a href="{{route ('report-scams.create')}}">Open a new case</a></li>
                                
                              {{--  <li><a href="{{route ('predict.spam-email')}}">Predict Spam Email</a></li> --}}
                                <li><a href="http://127.0.0.1:8000/scam-report/api/upload-file">Predict Spam Email</a></li>
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
                                            <li><a href="{{route ('about')}}">about</a></li>
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
</div>