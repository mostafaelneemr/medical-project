@extends('layouts.website.master')

@section('title')
    {{__('website/title.about')}}
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

    <!-- Start Work area -->
    @foreach ($helps as $help)
    <div class="brook-whatdo-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumb"> <img class="w-100" src="{{ asset($help->image) }}" alt="about images"> </div>
                </div>
                <div class="col-lg-6 mt_sm--40 mt_md--40">
                    <div class="bk-title--default text-start">
                        <h5 class="heading heading-h5 theme-color wow move-up">{{ $help->title }}</h5>
                        <div class="bkseparator--30"></div>
                        <h3 class="heading heading-h3 wow move-up">{{ $help->sub_title }}</h3>
                    </div>
                    <div class="row">
                        <!-- Start Single -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="what-do mt--30">
                                <div class="content">
                                    <h5 class="heading heading-h5 wow move-up">{{ $help->head }}</h5>
                                    <div class="bkseparator--20"></div>
                                    <p class="bk_pra wow move-up">{{ $help->description }}.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
    <!-- End Work area -->

    <!-- Start Instagram Area -->
    <div class="brook-instagram-area bg_color--1">
        <div class="bk-intagram-list instagram-grid">
            <div class="instagram-grid-wrap instagram-grid-5 pl--30 pr--30 move-up wow">
                <!-- Start Single Instagram -->
                @foreach ($images as $image)
                <div class="item-grid grid-style--1">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset($image->image) }}" alt="instagram images">
                        </a>
                        {{-- <div class="item-info">
                            <div class="inner">
                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @endforeach 
                <!-- Start Single Instagram -->
            </div>
        </div>
    </div>
    <!-- End Instagram Area -->

    <!-- Start Testimonial Area -->
    <div class="brook-testimonial-area ptb--150 ptb-md--80 ptb-sm--80 bg_color--5 poss_relative">
        <div class="container">
            <div class="row">
                
                <!-- Start Single Testimonial -->
                @foreach ($customers as $customer)                
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                    <div class="testimonial testimonial_style--1">
                        <div class="content">
                            <p class="bk_pra heading-font">{{ $customer->description }}</p>
                            <div class="testimonial-info">
                                <div class="post-thumbnail">
                                    <img src="{{ asset($customer->image) }}" alt="clint image">
                                </div>
                                <div class="clint-info">
                                    <h6>{{ $customer->customer_name }}</h6>
                                    <span>{{ $customer->title }}</span>
                                </div>
                            </div>
                            <div class="testimonial-quote">
                                <span class="fa fa-quote-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Testimonial -->
            </div>
        </div>
        
        <div class="vc_row-separator triangle triangle--top top">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 0.156661 0.1">
                <polygon points="0.156661,3.93701e-006 0.156661,0.000429134 0.117665,0.05 0.0783307,0.0999961 0.0389961,0.05 -0,0.000429134 -0,3.93701e-006 0.0783307,3.93701e-006 "></polygon>
            </svg>
        </div>
        
        {{-- <div class="more-testimonials-btn text-center mt--50 wow move-up">
            <a class="moredetails-btn font-16" href="#">More testimonials <i class="fa fa-arrow-right"></i></a>
        </div> --}}
    </div>
    <!-- End Testimonial Area -->


@endsection