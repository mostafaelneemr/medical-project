{{-- header  --}}
<header class="br_header header-default header-transparent header-bar position-from--top light-logo--version haeder-fixed-width haeder-fixed-150 headroom--sticky header-mega-menu clearfix">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="header__wrapper">
                <!-- Header Left -->
                <div class="header-left">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('website/img/logo/brook-white.png')}}" alt="Brook Images">
                        </a>
                    </div>
                </div>
                <!-- Mainmenu Wrap -->
                
                <!-- Header Right -->
                <div class="header-right">
                    <!-- Start Popup Search Wrap -->
                    <div class="popup-search-wrap">
                        <a class="btn-search-click" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="btn-group mb-1">
                        <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            @if (App::getLocale() == 'ar')
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ URL::asset('backend/assets/images/flags/EG.png') }}" alt="">
                            @else
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ URL::asset('backend/assets/images/flags/US.png') }}" alt="">
                            @endif
                        </button>
                        <div class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Popup Search Wrap -->

                    <!-- Start Hamberger -->
                    <div class="manu-hamber hamberger-trigger light-version d-none d-xl-block">
                        <div>
                            <i></i>
                        </div>
                    </div>
                    <!-- End Hamberger -->

                     <!-- Start Hamberger -->
                     <div class="manu-hamber popup-mobile-click d-block light-version d-block d-xl-none">
                        <div>
                            <i></i>
                        </div>
                    </div>
                    <!-- End Hamberger -->

                </div>
            </div>
        </div>
    </div>
</div>
</header>
{{-- end header --}}