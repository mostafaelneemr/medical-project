@extends('layouts.website.master')

@section('title')
    {{__('website/title.service')}}
@endsection

@section('content')

<div class="slider-revoluation">
    <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-authentic-studio"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                @foreach ($sliders as $slider)
                    
                <li data-index="rs-16" data-transition="curtain-1,curtain-3,curtain-2" data-slotamount="default,default,default,default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default"
                    data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"
                    data-thumb="{{asset('website/img/revoulation/100x50_slider-authentic-studio-slide-01-bg.jpg')}}" data-rotate="0,0,0,0"
                    data-saveperformance="off" data-title="Slide" data-param1="01" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    {{-- @if($section->image_url) --}}
                        <img src="{{asset($slider->image_url)}}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    {{-- @else --}}
                        {{-- <img src="{{ asset('website/img/slider/presentation/home-presentation-image-01.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    @endif --}}

                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" id="slide-16-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-25','-28','-28','-10']" data-fontsize="['80','60','45','30']"
                        data-lineheight="['90','67','50','34']" data-width="['670','670','620','380']"
                        data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 630px; max-width: 630px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">
                        {{$slider->title}}</div>

                </li>

                @endforeach
            {{-- <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> --}}
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>

    <!-- Start Service Area -->
    <div class="bk-service-area pt--70 pt_md--50 pt_sm--30 bg_color--1">
        <div class="container">
            <div class="row">
                @foreach ($interiors as $interior)                    
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                    <div class="service service--1 text-center mt--30">
                        <div class="icons">
                            <img src="{{ asset($interior->icon )}}" alt="icon">
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

    @foreach ($services as $service)        
    <!-- Start Accordion Area -->
    <div class="bk-accordion-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Accordion -->
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="w-100" src="{{ asset($service->image) }}" alt="about images">
                    </div>
                </div>
                <!-- End Single Accordion -->
    
                <!-- Start Single Accordion -->
                <div class="col-lg-6 mt_md--40 mt_sm--40">
                    <div class="brook-section-title mb--50 mb_md--20 mb_sm--20">
                        <h3 class="heading heading-h3">{{$service->head}}</h3>
                    </div>
                    <div class="bk-accordion-style--2" id="accordionExampl3">
    
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h5 class="mb-0">
                                    <a href="#" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                        aria-expanded="false" aria-controls="collapsesix">
                                        {{ $service->title }}
                                    </a>
                                </h5>
                            </div>
    
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExampl3">
                                <div class="card-body">{{ $service->description }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Accordion -->
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Accordion Area -->

    <!-- Start Boxes Area -->
    <div class="bk-info-box-area">
        <div class="bk-info-boxes">
            <!-- Start Single Box -->
            @foreach ($carts as $cart)        
            <div class="info-grid-box has-image" style="background-image: url('{{ asset($cart->image) }}')">
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
                            <h4 class="heading heading-h4 text-white">{{ $cart->title }}</h4>
                            <div class="content mt--25">
                                <p class="bk_pra text-white">{{ $cart->description }}.</p>
                            </div>
                            <div class="box-btn mt--100 mt_sm--30">
                                {{-- <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" href="#">LearnMore</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Box -->
            @endforeach
        </div>
    </div>
    <!-- End Boxes Area -->

    <!-- Start Team Area -->
    <div class="bk-team-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
           
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