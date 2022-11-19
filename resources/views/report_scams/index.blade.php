<x-app-layout>

    <x-slot name="title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item active" aria-current="page">Report scams</li>
    </x-slot>  

    <section class="case-study-wrapper section-padding">
        <div class="container">
            <div class="row mb-50 align-items-center">
                <div class="col-12 col-md-5">
                    <div class="section-title">
                        <p>{{$report_scams->count()}} Scam Report Cases</p>
                        <h1>Latest Case Studies</h1>
                    </div>
                </div>
                <div class="col-12 col-md-7 mt-4 mt-md-0  text-md-right">
                    <div class="case-cat-filter">
                        <button data-filter="*" class="active">All</button>
                        @foreach(\App\Models\ScamType::all() as $scam_type)
                        <button data-filter=".{{$scam_type->slug}}">{{$scam_type->name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                {{$report_scams->links()}}
            </div>
            
            <div class="row grid gap-1">

                @foreach($report_scams as $report_scam)
                <div class="col-xl-4 col-md-6 grid-item {{$report_scam->type->slug}}">
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
                                    
                                </div>
                                <div class="right-data">
                                    <a href="{{route('report-scams.show', $report_scam)}}" class="text-blue-400 ">Read more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
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
