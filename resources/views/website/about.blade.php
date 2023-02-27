@extends('layouts.website.master')

@section('title')
    {{__('website/title.about')}}
@endsection

@section('content')
    <!-- Start Breadcaump Area -->
    @foreach ($sliders as $slider )
    <div class="breadcaump-area bg_image--125 ptb--270 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5' >
    {{-- style="background-image: url('{{$slider->image_url}}')"> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcaump-inner text-center">
                        <h1 class="heading heading-h1 text-white">{{ $slider->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Breadcaump Area -->

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