@extends('layouts.website.master')

@section('title')
    {{__('website/title.contact')}}
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

<!-- Start Contact Area -->
<div class="contact-us-area">
    <div class="contauner-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 bg_color--1 pl--270 pt--160 pb--160 pl_lg--50 pl_md--50 pt_md--80 pb_md--80 pl_sm--50 pr_sm--50 pt_sm--80 pb_sm--80">
                <div class="contact-address-wrapper">
                    <div class="classic-address text-start">
                        <h4 class="heading heading-h4">{{__('website/content.visit_studio')}}</h4>
                        <div class="desc mt--15">
                            <p class="bk_pra line-height-2-22">{{ setting('address') }}</p>
                        </div>
                    </div>

                    <div class="classic-address text-start mt--60 ">
                        <h4 class="heading heading-h4">{{__('website/content.message_us')}}</h4>
                        <div class="desc mt--15 mb--80">
                            <p class="bk_pra line-height-2-22">{{ setting('address')}} <br> {{ setting('phone') }}</p>
                        </div>
                        <div class="social-share social--transparent">
                            <a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i></a>
                            <a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                            {{-- <a href="{{ setting('') }}"><i class="fab fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 bg_color--5 pt--160 pb--160 pl--60 pr--200 pr_lg--50 pr_md--50 pr_sm--50 pb_md--80 pt_md--80 pl_sm--50 pt_sm--80 pb_sm--80">
                <div class="contact-form-inner">
                    <div class="brook-title mb--40">
                        <h4 class="heading heading-h4">{{ __('website/content.send_message') }}</h4>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" action="http://whizthemes.com/shohel/php/mail.php">
                            <div class="row">
                                <div class="col-lg-12"><input name="con_name" type="text" placeholder="{{__('website/content.name')}} *"></div>

                                <div class="col-lg-12 mt--30"><input name="con_email" type="text" placeholder="{{__('website/content.email')}} *"></div>

                                <div class="col-lg-12 mt--30"><input type="text" placeholder="{{__('website/content.phone_number')}}"></div>

                                <div class="col-lg-12 mt--30"><textarea name="con_message" placeholder="{{__('website/content.your_message')}}"></textarea></div>

                                <div class="col-lg-12 mt--30">
                                    <input type="submit" value="{{__('website/content.send_msg')}}">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

@endsection