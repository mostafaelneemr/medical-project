<!DOCTYPE html>
<html lang="en" dir="{{App::getlocale() == 'en' ? '':'rtl'}}">
<head>
  @include('layouts.admin.head')
</head>

<body>

  <div class="wrapper">
    
    <!-- preloader -->
    <div id="pre-loader">
        <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
    </div>
    <!--End preloader -->

      @include('layouts.admin.main-header')

    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">
      
        @include('layouts.admin.sidebar')
      
        <!-- wrapper -->
        <div class="content-wrapper">
        
            @yield('content')
          <!-- wrapper -->
        
          @include('layouts.admin.footer')  
        </div>

      </div>
    </div>

    
    @include('layouts.admin.script')
  </div>

</body>
</html>