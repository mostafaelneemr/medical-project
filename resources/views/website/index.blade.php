@extends('layouts.website.master')

@section('title')
    {{__('website/title.homepage')}}
@endsection

@section('content')

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

        <div class="row">
            <div class="col-lg-12">
                <div class="bk-title--default text-center wow move-up">
                    <h6 class="heading heading-h6 theme-color">WHAT WE DO</h6>
                    <div class="bkseparator--30"></div>
                    <h3 class="heading heading-h3">Interior is the will of an epoch <br>
                        translated into space..</h3>
                </div>
            </div>
        </div>
        <div class="row mt--70 mt_sm--20 mt_md--30">

            <!-- Start Single Service -->
        @foreach ($interiors as $interior)            

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                <div class="service service--1 text-center mt--30">
                    <div class="icons">
                        <img src="{{asset('website/img/interior/ios7-eye-outline.png')}}" alt="icon">
                    </div>
                    <div class="content">
                        <h4>{{ $interior->interior_title }}</h4>
                        <p>{{ $interior->description }}.</p>
                        <a class="service-btn" style="cursor:auto"><span>{{ $interior->button }}</span> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->
        </div>
        @endforeach
    </div>
</div>
<!-- End Service Area -->

<!-- Start Portfolio Area -->
<div class="bk-portfolio-area">
    <div class="portfolio-wrapper">
        <div class="row row--0">
            <!-- End Single Portfolio -->
            <div class="col-lg-12 col-xl-6 col-12">
                <div class="row row--0">
                    <div class="col-lg-6">
                        <!-- Start Single Portfolio -->
                        @foreach ($images as $image)                            
                        <div class="portfolio-cation wow move-up">
                            <div class="thumb">
                                <img src="{{ $image->image}}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">{{$image->title}}</a></h3>
                                    <div class="category">{{ $image->button }}</div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio Area -->

<!-- Start Product Area -->
<div class="brook-product-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brook-section-title text-center">
                    <h3 class="heading heading-h3">Popular Products</h3>
                </div>
            </div>
        </div>

        <div class="row mt--30">

            <!-- Start Single Product -->
            @foreach ($products as $product)                
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product mt--30">
                    <div class="product-thumbnail">
                        <div class="thumbnail">
                            <div class="product-main-image">
                                <img src="{{$product->image}}" alt="Multipurpose">
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
                                <img src="{{$customer->image}}" alt="clint image">
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
                            <img src="{{$client->image}}" alt="Team images">
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