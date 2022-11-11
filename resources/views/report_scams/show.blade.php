<x-app-layout>

    <x-slot name="title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item"><a href="{{route('report-scams.index')}}">Report scams</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$report_scam->id}}</li>
    </x-slot>

    <section class="case-study-post-wrapper section-padding">
        <div class="container">
            
            <!-- <div class="case-grid-photos">
                <div class="single-photo-grid">
                    <img src="{{asset('theme/assets/img/case/p1.jpg')}}" alt="">
                </div>
                <div class="single-photo-grid">
                    <img src="{{asset('theme/assets/img/case/p2.jpg')}}" alt="">
                </div>
                <div class="single-photo-grid">
                    <img src="{{asset('theme/assets/img/case/p3.jpg')}}" alt="">
                </div>
                <div class="single-photo-grid">
                    <img src="{{asset('theme/assets/img/case/p4.jpg')}}" alt="">
                </div>
            </div> -->
           
            <div class="case-contents-wrap">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="case-info-card" style="margin-top: 1px;">
                            <div class="case-head bg-cover" style="background-image: url({{asset('theme/assets/img/case/case-head.png')}})">
                                <h3>{{__('Reported Scam : Case ')}} {{$report_scam->id}}</h3>
                            </div>
                            <div class="project-data">
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Scam Type
                                    </div>
                                    <div class="right-data">
                                    {{$report_scam->type->name}}
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        In progress
                                    </div>
                                    <div class="right-data">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input rounded-full" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" @if($report_scam->is_in_progress) checked @endif disabled>
                                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">{{$report_scam->is_in_progress? 'Yes': 'No'}}</label>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">Contacted</div>  
                                    <div class="right-data">
                                        {{$report_scam->date_of_first_contact}}
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Reported
                                    </div>
                                    <div class="right-data">
                                        {{$report_scam->created_at->diffForHumans()}}
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Risk Rating
                                    </div>
                                    <div class="right-data">
                                        {{('100 %')}}
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        share
                                    </div>
                                    <div class="right-data">
                                        <div class="social-link">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="case-details-content ml-0 ml-lg-5">
                            <h2> {{$report_scam->type->name}} : Reprted Scam Case  Index {{$report_scam->id}} </h2>
                            <p>
                                This scam incident was reported <span>{{$report_scam->created_at->diffForHumans()}}</span> exactly on {{$report_scam->created_at}}</span> with the index number 
                                <span>{{$report_scam->id}}</span>. 
                            </p>
                            <p>
                                The scammer made first contacted with the victim on {{$report_scam->date_of_first_contact}}. 
                            </p>
                            <div>
                                <h3>The scammer medium of communications</h3>
                                <ul>
                                    @foreach($report_scam->platforms as $platform)
                                    <li >{{$platform->name}}: <span class="text-sm text-muted"> {{$platform->pivot->link}} </span> </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                             <div>
                                <h3>Asset(s) Lost to the scam</h3>
                                <ul>
                                    @foreach($report_scam->lostAssets as $lost_assest)
                                    <li >{{$lost_assest->name}}: <span class="text-sm text-muted"> {{$lost_assest->pivot->data}} </span> </li>
                                    @endforeach
                                </ul>
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
                    <img src="{{asset('theme/assets/img/brand/1.png')}}" alt="">
                </div>
                <div class="single-client">
                    <img src="{{asset('theme/assets/img/brand/2.png')}}" alt="">
                </div>
                <div class="single-client">
                    <img src="{{asset('theme/assets/img/brand/3.png')}}" alt="">
                </div>
                <div class="single-client">
                    <img src="{{asset('theme/assets/img/brand/4.png')}}" alt="">
                </div>
                <div class="single-client">
                    <img src="{{asset('theme/assets/img/brand/b4.png')}}" alt="">
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