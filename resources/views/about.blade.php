<x-app-layout>

    <x-slot name="title">
        {{__('About Us')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('About Us')}}
    </x-slot>

    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item active" aria-current="page">Get to Know Us</li>
    </x-slot>


    <section class="about-us-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 pr-5">
                    <div class="section-title mb-30" style="text-align: center;">
                        <p>PRIMARY AIM OF SCAMREPORT</p>
                        <h1>The Core Solution We Provide</h1>
                    </div>

                    <p style="text-align:justify;">The primary aim of this project is to design and 
                        implement a web-based platform for e-commerce fraud reporting and 
                        prevention system.
                    </p>
                    
                    <div class="about-icon-box style-2">
                        <div class="icon">
                            <i class="fal fa-users"></i>
                        </div>
                        <div class="content">
                            <h3>A Unified Online Voice</h3>
                            <p>Users now have a collective voice, and can lay their complains and be rest assured it will be heard.</p>
                        </div>
                    </div>
                    <div class="about-icon-box style-2">
                        <div class="icon">
                            <i class="fal fa-bullseye-arrow"></i>
                        </div>
                        <div class="content">
                            <h3>Legit Recommendations</h3>
                            <p>Get recommendations on up-coming brands that have proven to be very efficent and reliable.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 pl-lg-5 mt-5 mt-lg-0 col-12">
                    <div class="about-right-img">
                        <span class="dot-circle"></span>
                        <div class="about-us-img" style="background-image: url('theme/assets/img/home4/about-us.png')">
                        </div>
                        <span class="triangle-bottom-right"></span>
                    </div>
                </div>
            </div>

            <div class="row mpt-50 pt-100">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-features-item">
                        <div class="icon">
                            <i class="flaticon-speech-bubble"></i>
                        </div>
                        <div class="content">
                            <h3>Expert Consultancy</h3>
                            <p>Avoid Getting Scam by getting Expert Advise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-features-item">
                        <div class="icon">
                            <i class="flaticon-unlock"></i>
                        </div>
                        <div class="content">
                            <h3>Cyber Best Practices</h3>
                            <p>Be your own first line of defence against scammers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-features-item">
                        <div class="icon">
                            <i class="flaticon-mobile-app"></i>
                        </div>
                        <div class="content">
                            <h3>Recommeded Techs</h3>
                            <p>Only use devices and softwares security certified.</p>
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
                </div>
            </div>
        </div>
        <div class="circle-shape d-none d-sm-block">
            <img src="{{asset('theme/assets/img/home4/ring.png')}}" alt="">
        </div>
    </section>

    <section class="funfact-wrapper bottom text-white">
        <div class="container">
            <div class="funfact-content-grid bg-cover" style="background-image: url('assets/img/funfact-line.png')">
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
    </section> 

    <section class="faq-section section-padding">
        <div class="faq-bg bg-cover d-none d-lg-block" style="background-image: url('theme/assets/img/faq_home_2.png')"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                    <div class="col-12 col-lg-12 mb-40">
                        <div class="section-title">
                            <p>Tactics Technique Protocols</p>
                            <h1>Prominent E-commerce Scam Tricks</h1>
                        </div>
                    </div>

                    <div class="faq-content">
                        <div class="faq-accordion">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="faq1">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                            The Chop and Run Scam
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        This strategy of the scams convinces the victims to pay for a products or service 
                                        immediately he or she makes the payment, the scammer ends every communication with 
                                        the victim without delivering the item. 
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq2">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">
                                                The Steady Chopping Scam
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                        This is a more calculated scam where the victim is being taking through a process that keeps 
                                        demanding him/her to make payment at every stage promising the victim to receive an item 
                                        after he makes the payment. Nevertheless, immediately the victim pays, the scam opens the next 
                                        stage further convincing the victim that it’s only this one stage that is left, 
                                        and he should make payment to finally claim the promised item. This loop continuous 
                                        in an endless manner until the victim is sucked dried. 
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                                The Fake vs Original Scam
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        Mainly common with tech products or with treasures such as gold and diamonds. In this situation, 
                                        victims end up realizing they got a counterfeit of an item they paid. For instance, a victim 
                                        can pay to get an iPhone 13, but he/she will end up receiving a cloned iPhone 13, which 
                                        is usually worth 10 times less than what the victim actually paid for.  
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                The Bad Agenda Kind of Scam
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        This kind of E-commerce fraud starts online, but it doesn't end online, it pulls through 
                                        to the physical and it's arguably the most dangerous kind of E-commerce fraud. Scammers 
                                        pull off these treacherous acts by attracting the victim using an E-commerce platform, 
                                        and after negotiation, the scammer will offer to deliver the product to the victim, or 
                                        they’ll ask the victim to come and pick up the item. Either way, at the point of delivery 
                                        or pickup of the item, victims are threatened usually at gunpoint to drop every valuable 
                                        they possess. This can potentially lead to loss of life especially if the victim resists. 
                                        </div>
                                    </div>
                                </div> <!-- /card -->

                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                The Account Take Over Fraud
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        This happens when a fraudster gains access to the account of a legitimate user. 
                                        This type of fraud is propagated through attacks like session hijacking, XSS, or 
                                        Password phishing. When the attacker is already in the account, he then makes a 
                                        purchase or withdrawal on-behalf of the real account owner. 
                                        </div>
                                    </div>
                                </div> <!-- /card -->

                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                The Chargeback Fraud
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        In this situation, a cardholder, intentionally opens a dispute requesting for a refund of a charge, 
                                        in a transaction he knew he performed and have received the package. 
                                        This is done with the intention not to pay anything for a received item. 
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

 
    
    <div class="client-brand-logo-wrap">
        <div class="container">
            <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
                <div class="single-client">
                    <img src="assets/img/brand/1.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets/img/brand/2.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets/img/brand/3.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets/img/brand/4.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets/img/brand/b4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <section class="cta-banner">
        <div class="container-fluid bg-cover section-bg" style="background-image: url('assets/img/cta_bg1.png')">
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

    
    
</x-app-layout>