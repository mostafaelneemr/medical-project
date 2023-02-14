<!doctype html>
<html class="no-js" lang="zxx" dir="{{App::getlocale() == 'en' ? '':'rtl'}}" >

<head>    
    @include('layouts.website.style')
</head>

<body class="template-color-37 template-font-1">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    {{-- <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="img/icons/brook-preloader.gif" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        @include('layouts.website.header')
        <!--// Header -->

        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo/brook-black.png" alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li><a href="index-interior.html"><span>Home</span></a></li>
                        <li><a href="inner-page/interior/about.html"><span>About</span></a></li>

                        <li class="has-mega-menu"><a href="#"><span>Pages</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="inner-page/interior/service.html"><span>Service</span></a></li>
                            </ul>
                        </li>

                        <li class="has-mega-menu"><a href="inner-page/interior/shop.html"><span>Shop</span></a>

                                <!-- Start Dropdown Menu -->
                                <ul class="object-submenu">
                                    <li><a href="inner-page/interior/shop.html"><span>Shop</span></a></li>
                                    <li><a href="inner-page/interior/single-product.html"><span>Single Product</span></a></li>
                                    <li><a href="inner-page/interior/cart.html"><span>Cart</span></a></li>
                                    <li><a href="inner-page/interior/checkout.html"><span>Checkout</span></a></li>
                                    <li><a href="inner-page/interior/wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="inner-page/interior/my-account.html"><span>My Account</span></a></li>
                                    <li><a href="inner-page/interior/login-register.html"><span>Login Register</span></a></li>
                            </ul>
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Blog</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="inner-page/interior/blog.html"><span>Blog</span></a></li>
                                <li><a href="inner-page/interior/blog-details.html"><span>Blog Details</span></a></li>
                            </ul>
                        </li>

                        <li><a href="inner-page/interior/contact.html"><span>Contact</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->

        <!-- Start Hamberger Menu -->
        <div class="open-hamberger-wrapper d-none d-lg-block">
            <div class="page-close light-version"></div>

            <div class="header-default light-logo--version poss_relative">
                <div class="mainmenu-wrapper">
                    <nav class="page_nav">
                        <ul class="mainmenu">

                            <li class="lavel-1"><a href="index-interior.html"><span>Home</span></a></li>

                            <li class="lavel-1"><a href="inner-page/interior/about.html"><span>About</span></a></li>

                            <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>Pages</span></a>

                                <!-- Start Dropdown Menu -->
                                <ul class="dropdown__menu">
                                    <li><a href="inner-page/interior/service.html"><span>Service</span></a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>

                            <li class="lavel-1 with--drop slide-dropdown"><a href="inner-page/interior/shop.html"><span>Shop</span></a>
                                <!-- Start Dropdown Menu -->
                                <ul class="dropdown__menu">
                                    <li><a href="inner-page/interior/shop.html"><span>Shop</span></a></li>
                                    <li><a href="inner-page/interior/single-product.html"><span>Single Product</span></a></li>
                                    <li><a href="inner-page/interior/cart.html"><span>Cart</span></a></li>
                                    <li><a href="inner-page/interior/checkout.html"><span>Checkout</span></a></li>
                                    <li><a href="inner-page/interior/wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="inner-page/interior/my-account.html"><span>My Account</span></a></li>
                                    <li><a href="inner-page/interior/login-register.html"><span>Login Register</span></a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>

                            <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>BLog</span></a>
                                <!-- Start Dropdown Menu -->
                                <ul class="dropdown__menu">
                                    <li><a href="inner-page/interior/blog.html"><span>Blog</span></a></li>
                                    <li><a href="inner-page/interior/blog-details.html"><span>Blog Details</span></a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>

                            <li class="lavel-1"><a href="inner-page/interior/contact.html"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Start Search -->
            <div class="row hamberger-search">
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Enter search keyword…">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="offcanvas-extra-info mt--150">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="bk-hover mb--40">
                                <h5 class="heading heading-h5 text-white">Connect</h5>
                                <div class="bkseparator--20"></div>
                                <p class="bk_pra font-16">2005 Stokes Isle Apt. 896, Vacaville 10010, USA</p>
                                <p class="bk_pra font-16"><a href="#">info@yourdomain.com</a></p>
                            </div>
                            <ul class="social-icon text-start tooltip-layout icon-size-large">
                                <li class="facebook"><a href="#" class="link hint--bounce hint--top hint--white" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#" class="link hint--bounce hint--top hint--white" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="instagram"><a href="#" class="link hint--bounce hint--top hint--white" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-right text-end">
                            <p class="bk_pra font-16">© 2019 Brook. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Hamberger Menu -->

        <!-- Start Brook Search Popup -->
        <div class="brook-search-popup">
            <div class="inner">
                <div class="search-header">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('website/img/logo/brook-black.png')}}" alt="logo images">
                        </a>
                    </div>
                    <a href="#" class="search-close"></a>
                </div>
                <div class="search-content">
                    <form action="#">
                        <label>
                            <input type="search" placeholder="Enter search keyword…">
                        </label>
                        <button class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Brook Search Popup -->

        <!-- Start Toolbar -->
        <div class="demo-option-container">

            <!-- Start Quick Link -->
            <div class="demo-option-wrapper">
                <div class="demo-panel-header">
                    <div class="panel-btn">
                        <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" href="https://themeforest.net/item/brook-creative-agency-business-html-template/24226512?s_rank=1"><i
                                class="ion-android-cart"></i> Buy Brook Now </a>
                    </div>
                    <div class="title">
                        <h5 class="heading heading-h5"> Brook – Creative Multipurpose Html5 Template</h5>
                        <div class="desc">
                            <p class="bk_pra"> Brook embraces a modern look with various enhanced short codes, premium
                                plugins and pre-defined page elements.</p>
                        </div>
                    </div>
                </div>
                <div class="demo-quick-option-list">
                    <a class="link hint--bounce hint--top hint--dark" href="index-business.html" aria-label="Business">
                        <img src="{{asset('website/img/demo-image/home-business.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-expert.html" aria-label="Expert">
                        <img src="{{asset('website/img/demo-image/home-expert.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-revolutionary.html" aria-label="Revolutionary">
                        <img src="{{asset('website/img/demo-image/home-revolutionary.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-authentic-studio.html" aria-label="Authentic Studio">
                        <img src="{{asset('website/img/demo-image/home-authentic-studio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-astronomy.html" aria-label="Astronomy">
                        <img src="{{asset('website/img/demo-image/home-astronomy.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-news-bulletin.html" aria-label="News Bulletin">
                        <img src="{{asset('website/img/demo-image/home-news-bulletin.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-digital-broadsheets.html" aria-label="Digital Broadsheets">
                        <img src="{{asset('website/img/demo-image/home-digital-broadsheets.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-creative-agency.html" aria-label="Creative Agency">
                        <img src="{{asset('website/img/demo-image/home-creative-agency.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-digital-agency.html" aria-label="Digital Agency">
                        <img src="{{asset('website/img/demo-image/home-digital-agency.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-vertical-menu.html" aria-label="Vertical Menu">
                        <img src="{{asset('website/img/demo-image/home-vertical-menu.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-design-studio.html" aria-label="Design Studio">
                        <img src="{{asset('website/img/demo-image/home-design-studio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-creative-portfolio.html" aria-label="Creative Portfolio">
                        <img src="{{asset('website/img/demo-image/home-creative-portfolio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-freelancer.html" aria-label="Freelancer">
                        <img src="{{asset('website/img/demo-image/home-freelancer.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-vertical-slider-portfolio.html"
                        aria-label="Vertical Slide Portfolio">
                        <img src="{{asset('website/img/demo-image/home-vertical-slide-portfolio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-minimal-portfolio.html" aria-label="Minimal Portfolio">
                        <img src="{{asset('website/img/demo-image/home-minimal-portfolio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-onepage.html" aria-label="Onepage">
                        <img src="{{asset('website/img/demo-image/home-onepage.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-landing.html" aria-label="Landing">
                        <img src="{{asset('website/img/demo-image/home-landing.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-architecture.html" aria-label="Architecture">
                        <img src="{{asset('website/img/demo-image/home-architecture.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-portfolio-fullscreen-type-hover-02.html"
                        aria-label="Portfolio Fullscreen Type Hover 02">
                        <img src="{{asset('website/img/demo-image/home-hover-type-02.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-minimal-agency.html" aria-label="Minimal Agency">
                        <img src="{{asset('website/img/demo-image/home-minimal-agency.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-start-ups.html" aria-label="Start-ups">
                        <img src="{{asset('website/img/demo-image/home-start-ups.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-presentation.html" aria-label="Presentation">
                        <img src="{{asset('website/img/demo-image/home-presentation.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-blog-metro.html" aria-label="Metro Blog">
                        <img src="{{asset('website/img/demo-image/home-metro-blog.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-portfolio-mesonry-left-vertical-header.html"
                        aria-label="Portfolio Masonry – Left Vertical Header">
                        <img src="{{asset('website/img/demo-image/home-portfolio-masonry-left-vertical-header.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-masonry-gallery.html" aria-label="Masonry Gallery">
                        <img src="{{asset('website/img/demo-image/home-masonry-gallery.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-home-services-classic.html" aria-label="Service">
                        <img src="{{asset('website/img/demo-image/home-service.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-minimal-metro-grid.html" aria-label="Minimal Metro Grid">
                        <img src="{{asset('website/img/demo-image/home-minimal-metro-grid.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-shop.html" aria-label="Shop">
                        <img src="{{asset('website/img/demo-image/home-shop.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-product-landing.html" aria-label="Product Landing">
                        <img src="{{asset('website/img/demo-image/home-product-landing.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-indie-musician.html" aria-label="Indie Musician">
                        <img src="{{asset('website/img/demo-image/home-indie-musician.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-foodie.html" aria-label="Foodie">
                        <img src="{{asset('website/img/demo-image/home-foodie.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-vertical-slide-gradient-portfolio.html"
                        aria-label="Vertical Slide Gradient Portfolio">
                        <img src="{{asset('website/img/demo-image/home-vertical-slide-gradient-portfolio.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-portfolio-fullscreen-slider-left-vertical-header.html"
                        aria-label="Portfolio Fullscreen Slider Left Vertical Header">
                        <img src="{{asset('website/img/demo-image/home-portfolio-fullscreen-slider-left-vertical-header.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-portfolio-fullscreen-type-hover.html"
                        aria-label="Portfolio Fullscreen Type Hover">
                        <img src="{{asset('website/img/demo-image/home-hover-type.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-portfolio-slide.html" aria-label="Portfolio Slide">
                        <img src="{{asset('website/img/demo-image/home-portfolio-slide.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-photo-slider-gallery.html" aria-label="Photo Slider Gallery">
                        <img src="{{asset('website/img/demo-image/home-photo-slider-gallery.jpg')}}" alt="Multipurpose Template"></a>

                    <a class="link hint--bounce hint--top hint--dark" href="index-blog-grid.html" aria-label="Grid Blog">
                        <img src="{{asset('website/img/demo-image/home-grid-blog.jpg')}}" alt="Multipurpose Template"></a>

                </div>
            </div>
            <!-- End Quick Link -->
        </div>
        <!-- End Toolbar -->

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
                                <img src="{{$slider->image_url}}" alt="" data-bgposition="center center"
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
                            <a class="tp-caption rev-btn   smooth-scroll-link" href="#section-about" target="_self" id="slide-16-layer-24"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                                data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                                data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                {{$slider->button}}</a>
                        </li>

                        @endforeach
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>

        <!-- Page Conttent -->
        <main class="page-content">

            @yield('content')
            
        </main>
        <!--// Page Conttent -->

        <!-- Footer -->
        @include('layouts.website.footer')
        <!--// Footer -->

    </div>
    <!--// Wrapper -->

   @include('layouts.website.script')
</body>

</html>