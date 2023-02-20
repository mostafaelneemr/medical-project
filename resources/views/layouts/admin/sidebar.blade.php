<!-- Left Sidebar start-->
<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
     <ul class="nav navbar-nav side-menu" id="sidebarnav">
       <!-- menu item Dashboard-->
       <li>
         <a href="{{ route('dashboard') }}">
          <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
          <div class="clearfix"></div>
        </a>
       </li>

       
       <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components</li>
       <!-- menu item Elements-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
           <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Home Page</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="elements" class="collapse" data-parent="#sidebarnav">
          <li><a href="{{route('slider.index')}}">Slider Section</a></li>
          <li><a href="{{route('main-section.index')}}">Main Section</a></li>
          <li><a href="{{route('interior_Section.index')}}">Interior Section</a></li>
          <li><a href="{{route('images.index')}}">Image Section</a></li>
          <li><a href="{{route('products.index')}}">Products Section</a></li>
          <li><a href="{{route('customers.index')}}">Customers Section</a></li>
          <li><a href="{{route('clients.index')}}">OurClients Section</a></li>
          {{-- <li><a href="{{route('newUpdate')}}">NewUpdate Section</a></li> --}}
         </ul>
       </li>
       <!-- menu item calendar-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
           <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">calendar</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
           <li> <a href="calendar.html">Events Calendar </a> </li>
           <li> <a href="calendar-list.html">List Calendar</a> </li>
         </ul>
       </li>
       <!-- menu item todo-->


       <!-- menu item Charts-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
           <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Charts</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="chart" class="collapse" data-parent="#sidebarnav">
           <li> <a href="chart-js.html">Chart.js</a> </li>
           <li> <a href="chart-morris.html">Chart morris </a> </li>
           <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>
         </ul>
       </li>

       <!-- menu font icon-->
        <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
           <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font icon</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
           <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
           <li> <a href="themify-icons.html">Themify icons</a> </li>
           <li> <a href="weather-icon.html">Weather icons</a> </li>
         </ul>
       </li>

       <!-- menu item Multi level-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
         <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
         <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level item 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
           <ul id="auth" class="collapse">
             <li>
               <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                 <ul id="login" class="collapse">
                   <li>
                   <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                   <ul id="invoice" class="collapse">
                     <li> <a href="#">level item 1.1.1.1</a> </li>
                     <li> <a href="#">level item 1.1.1.2</a> </li>
                   </ul>
                 </li>
               </ul>
             </li>
             <li> <a href="#">level item 1.2</a> </li>
           </ul>
         </li>
         <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level item 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
           <ul id="error" class="collapse" >
             <li> <a href="#">level item 2.1</a> </li>
             <li> <a href="#">level item 2.2</a> </li>
           </ul>
         </li>
       </ul>
     </li>
   </ul>
 </div>
</div>

<!-- Left Sidebar End-->

<!-- Left Sidebar End-->
