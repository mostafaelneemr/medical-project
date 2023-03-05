@extends('layouts.website.master')

@section('title')
    {{__('website/title.service')}}
@endsection

@section('content')

    <!-- Start Breadcaump Area -->
    <div class="breadcaump-area bg_image--127 ptb--270 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcaump-inner text-center">
                        <h1 class="heading heading-h1 text-white">Service</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcaump Area -->

    <!-- Start Service Area -->
    <div class="bk-service-area pt--70 pt_md--50 pt_sm--30 bg_color--1">
        <div class="container">
            <div class="row">
                @foreach ($interiors as $interior)                    
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                    <div class="service service--1 text-center mt--30">
                        <div class="icons">
                            <img src="{{asset('website/img/interior/ios7-eye-outline.png')}}" alt="icon">
                        </div>
                        <div class="content">
                            <h4>{{$interior->interior_title}}</h4>
                            <p>{{ $interior->description }}</p>
                            <a class="service-btn" href="#"><span>{{$interior->button}}</span> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Service Area -->

    <!-- Start Accordion Area -->
    <div class="bk-accordion-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Accordion -->
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="w-100" src="../../img/interior/we-challenge.jpg" alt="about images">
                    </div>
                </div>
                <!-- End Single Accordion -->
    
                <!-- Start Single Accordion -->
                <div class="col-lg-6 mt_md--40 mt_sm--40">
                    <div class="brook-section-title mb--50 mb_md--20 mb_sm--20">
                        <h3 class="heading heading-h3">What we do</h3>
                    </div>
                    <div class="bk-accordion-style--2" id="accordionExampl3">
    
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h5 class="mb-0">
                                    <a href="#" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                        aria-expanded="false" aria-controls="collapsesix">
                                        Digital strategy
                                    </a>
                                </h5>
                            </div>
    
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExampl3">
                                <div class="card-body">We learn from landing page's best practices and great
                                    landing pages in order to create a clear, crisp design that suits all your
                                    needs for a responsive landing site.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Accordion -->
            </div>
        </div>
    </div>
    <!-- End Accordion Area -->

    <!-- Start Boxes Area -->
    <div class="bk-info-box-area">
        <div class="bk-info-boxes">
            <!-- Start Single Box -->
            <div class="info-grid-box has-image" style="background-image: url(../../img/interior/banner1.jpg)">
                <div class="box-content">
                    <div class="box-content-inner">
                        <div class="box-info">
    
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Box -->
    
            <!-- Start Single Box -->
            <div class="info-grid-box bg_color--7">
                <div class="box-content">
                    <div class="box-content-inner">
                        <div class="box-info">
                            <h4 class="heading heading-h4 text-white">Unlimited power & customization possibilities</h4>
                            <div class="content mt--25">
                                <p class="bk_pra text-white">Brook presents your services with flexible, convenient and
                                    multipurpose layouts. You can select your favorite layouts & elements for
                                    particular projects with unlimited customization possibilities. </p>
                            </div>
                            <div class="box-btn mt--100 mt_sm--30">
                                <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" href="#">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Box -->
    
        </div>
    </div>
    <!-- End Boxes Area -->

    <!-- Start Team Area -->
    <div class="bk-team-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brook-section-title text-center">
                        <h3 class="heading heading-h3">Our Expert</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Single Team -->
                @foreach ($clients as $client)                
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow move-up">
                <div class="team team_style--1">
                    <!-- Image Wrap -->
                    <div class="image-wrap">
                        <div class="thumb">
                            <img src="{{ asset($client->image) }}" alt="Team images">
                            <div class="overlay"></div>
                            <div class="shape">
                                {{-- <img class="shape-01" src="{{asset('website/img/team/shape/team-shape-1.png')}}" alt="shape image"> --}}
                                {{-- <img class="shape-02" src="{{asset('website/img/team/shape/team-shape-2.png')}}" alt="shape image"> --}}
                                {{-- <img class="shape-03" src="{{asset('website/img/team/shape/team-shape-3.png')}}" alt="shape image"> --}}
                            </div>
                        </div>
                        
                        <!-- Social Network -->
                        {{-- <div class="social-networks">
                            <div class="inner">
                                <a class="hint--bounce hint--top hint--primary" href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>

                                <a class="hint--bounce hint--top hint--primary" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>

                                <a class="hint--bounce hint--top hint--primary" href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}

                    </div>
                    <!-- Team Info -->
                    <div class="info">
                        <h6 class="name">{{ $client->name }}</h6>
                        <span class="position">{{$client->title_name}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Team -->
    
            </div>
        </div>
    </div>
    <!-- End Team Area -->
@endsection