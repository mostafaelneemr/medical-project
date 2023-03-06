@extends('layouts.website.master')

@section('title')
    {{__('website/title.homepage')}}
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

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption rev-btn  smooth-scroll-link" href="#section-about" target="_self" id="slide-16-layer-24"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                        data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                        data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                        style="z-index: 7; min-width: 160px;overflow:hidden; white-space: normal; font-size: 16px;font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        {{$slider->button}}</a>
                </li>

                @endforeach
            {{-- <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> --}}
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>

<!-- Start About Area -->
<div class="brook-about-area bg_color--1 ptb--120 ptb-md--80 ptb-sm--60">
    <div class="container">
        @foreach ($main_sections as  $section)

        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-thumb text-center text-lg-end pr--100 pr_md--15 pr_sm--15">
                        <img src="{{ $section->image }}" alt="Multipurpose">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                    
                <div class="about-inner authenthick-about mt_md--40 mt_sm--40">
                    <h6 class="heading headin-h6 body-color wow move-up">{{ $section->title }}</h6>
                    <div class="bkseparator--30"></div>
                    <h3 class="heading heading-h3 line-height-1-25">{{ $section->subtitle }}</h3>

                    <div class="bkseparator--40"></div>
                    <p class="bk_pra font-18">{{ $section->description }}</p>
                    <div class="bkseparator--65"></div>
                    
                    <a class="moredetails-btn" href="#"><span>{{ $section->button }}</span> <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End About Area -->

<!-- Start Service Area -->
<div class="bk-service-area bg_color--1 pb--110 pb_md-70 pb_sm--50">
    <div class="container">

        
        <div class="row mt--70 mt_sm--20 mt_md--30">

            <!-- Start Single Service -->
        @foreach ($interiors as $interior)            

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                <div class="service service--1 text-center mt--30">
                    <div class="icons">
                        <img src="{{asset($interior->icon)}}" alt="icon">
                    </div>
                    <div class="content">
                        <h4>{{ $interior->interior_title }}</h4>
                        <p>{{ $interior->description }}.</p>
                        <a class="service-btn" style="cursor:auto"><span>{{ $interior->button }}</span> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->
            @endforeach
        </div>
    </div>
</div>
<!-- End Service Area -->

<!-- Start Portfolio Area -->
<div class="bk-portfolio-area">
    <div class="portfolio-wrapper">
        <div class="row ">
            <!-- End Single Portfolio -->
            {{-- <div class="col-lg-12 col-xl-6 col-12">
                <div class="row row--0"> --}}
                @foreach ($images as $image)                            
                <div class="col-lg-3">
                    <!-- Start Single Portfolio -->
                    <div class="portfolio-cation wow move-up">
                        <div class="thumb">
                            <img src="{{ asset($image->image) }}" alt="Portfolio Images">
                        </div>
                        <div class="port-overlay-info">
                            <div class="hover-action">
                                <h3 class="post-overlay-title"><a href="#">{{$image->title}}</a></h3>
                                <div class="category">{{ $image->button }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                    {{-- </div>
                    </div> --}}
                </div>
                @endforeach
        </div>
    </div>
</div>
<!-- End Portfolio Area -->

<!-- Start Product Area -->
<div class="brook-product-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
    <div class="container">
        <div class="row mt--30">

            <!-- Start Single Product -->
            @foreach ($products as $product)                
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product mt--30">
                    <div class="product-thumbnail">
                        <div class="thumbnail">
                            <div class="product-main-image">
                                <img src="{{ asset($product->image) }}" alt="Multipurpose">
                            </div>
                        </div>
                        {{-- <div class="product-action">
                            <ul class="action-list text-center tooltip-layout">
                                <li class="single-action addto-cart"><a href="cart.html" class="link hint--bounce hint--top hint--dark"
                                        aria-label="Add to Cart"><i class="fas fa-shopping-bag"></i></a></li>

                                <li class="single-action wishlist"><a href="wishlist.html" class="link hint--bounce hint--top hint--dark"
                                        aria-label="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="product-info">
                        <h5 class="heading heading-h5"><a >{{$product->title}}</a></h5>
                        <div class="price"><span class="new-price">${{$product->price}}</span></div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Product -->
        </div>
    </div>
</div>
<!-- End Product Area -->

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
                                <h6>{{$customer->customer_name}}</h6>
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

<!-- Start Team Area -->
<div class="bk-team-area ptb--110 ptb-md-80 ptb-sm-60 bg_color--1">
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

<!-- Start Blog Grid Area -->
{{-- <div class="bk-blog-grid-area bg_color--1 pb--120 pb_md--80 pb_sm--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brook-section-title text-center">
                    <h3 class="heading heading-h3 font-large">News & Updates</h3>
                    <div class="bkseparator--25"></div>
                    <div class="title-separator w--80 color-red"></div>
                </div>
            </div>
        </div>
        <div class="row mt--20">
            <!-- Start Single Blog -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow mt--40">
                <div class="blog-grid blog-standard grid-simple">
                    <div class="post-thumb">
                        <a href="blog-details.html">
                            <img src="img/interior/blog1.jpg" alt="Multipurpose template">
                        </a>
                    </div>
                    <div class="post-content text-center">
                        <div class="post-inner">
                            <div class="post-meta">
                                <div class="post-date">May 21, 2018</div>
                                <div class="post-category"><a href="#">Life Style</a></div>
                            </div>
                            <h5 class="heading heading-h5"><a href="blog-details.html">Inspiring Presence of Design Thanks to Indoor Plants</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
        </div>
    </div>
</div> --}}
<!-- End Blog Grid Area -->

@endsection