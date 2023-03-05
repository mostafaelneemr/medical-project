@extends('layouts.website.master')

@section('title')
    {{__('website/title.contact')}}
@endsection

@section('content')

<div class="breadcaump-area bg_image--126 ptb--270 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcaump-inner text-center">
                    <h1 class="heading heading-h1 text-white">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
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
                            <p class="bk_pra line-height-2-22">2005 Stokes Isle Apt. 896, <br> Vacaville
                                10010,
                                USA</p>
                        </div>
                    </div>

                    <div class="classic-address text-start mt--60 ">
                        <h4 class="heading heading-h4">{{__('website/content.message_us')}}</h4>
                        <div class="desc mt--15 mb--80">
                            <p class="bk_pra line-height-2-22">info@yourdomain.com <br> (+68) 120034509</p>
                        </div>
                        <div class="social-share social--transparent">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
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