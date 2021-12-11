<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home </title>
  <!-- Bootstrap core CSS -->
<link href="{{ asset('frondend_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
<link href="{{asset('frondend_asset/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('frondend_asset/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('frondend_asset/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frondend_asset/fontawesome/css/fontawesome.css')}}" rel="stylesheet">    
  {{-- owl carousel --}}
  <link rel="stylesheet" href="{{ asset('frondend_asset/owlcarousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frondend_asset/owlcarousel/dist/assets/owl.theme.default.min.css')}}">

      {{-- slick--}}
  <link rel="stylesheet" href="{{ asset('frondend_asset/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('frondend_asset/slick/slick-theme.css')}}">

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  navbar-light fixed-top nav_top">
    <div class="container">
      <a class="navbar-brand text-white" href="{{route('indexpage')}}">E-Commerce</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('indexpage')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-md"></i> Settings</a></li>
            <li><a class="dropdown-item " href="page-user.html"><i class="fa fa-user fa-md"></i> Profile</a></li>
            <li>
                <a class="dropdown-item " href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-in-alt"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
          </ul>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link text-white" id="count" href="{{route('cartpage')}}">
                <span class="p1 fa-stack has-badge" id="item_count" data-count="0">
						<i class="fas fa-shopping-cart"></i>
                </span>
                </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@include('sweetalert::alert')
  <!-- Page Content -->
 @yield('content')
  <!-- /.container -->

   <div class="container-fluid shadow-sm bg-white">
     <div class="container py-5">
     <div class="row">
         <div class="col-lg-3 col-md-6 col-12">
             <div class="featurebox">
                 <i class="fas fa-truck-moving fa-3x text-info py-3 ml-5"></i>
                 <h5 class="text-muted">Door to Door Delivery</h5>
                 <p class="text-muted">On-time Delivery</p>
             </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12">
             <div class="featurebox">
                 <i class="fas fa-headphones-alt fa-3x text-info py-3 ml-5"></i>
             </i> <h5 class="text-muted">Customer Service</h5>
             <p class="text-muted">Phone : <a href="tel:09000000">09-779-888-877</a>
             </div> 
         </div>
          <div class="col-lg-3 col-md-6 col-12">
             <div class="featurebox">
                 <i class="fas fa-smile fa-3x text-info py-3 ml-5"></i>
                 <h5 class="text-muted">100% satisfaction</h5> <p class="text-muted">3 days return</p>
             </div>
         </div> 
         <div class="col-lg-3 col-md-6 col-12">
             <div class="featurebox">
                 <i class="fa fa-credit-card fa-3x text-info py-3 ml-5"></i>
                 <h5 class="text-muted">Cash on Delivery</h5> <p class="text-muted">Online Payment</p>
             </div>
         </div>
        </div>
     </div> 
 
   </div>
  <!-- Footer -->
  <footer class="footer" 
  >
    <div class="container py-5">
      <div class="row">
        <div class="col-sm-4">
          <h4>Get in Touch</h4>
          <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i> 2020 E Store, Yangon Thamine, Myanmar</p>
                                <p><i class="fa fa-envelope"></i> admin2020@example.com</p>
                                <p><i class="fa fa-phone"></i> +592523243</p>
           </div>
        </div>
        <div class="col-sm-4">
          <h4>Follow Us</h4>
          <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
        </div>
        <div class="col-sm-4">
          <div class="footer-widget">
                            <h2>E-Commerce Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Condition</a></li>
                            </ul>
                        </div>
        </div>
      </div>
      
    </div>
    <div class="container-fluid py-3 bg-dark">
      <p class="m-0 text-center text-white">Copyright &copy;Dvgxlxm2020</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       
<script src="{{asset('frondend_asset/vendor/jquery/jquery.js')}}"></script>
  <script src="{{asset('frondend_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frondend_asset/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{ asset('frondend_asset/owlcarousel/dist/owl.carousel.min.js')}}"></script>
   <script src="{{ asset('frondend_asset/slick/slick.js')}}"></script>
     <script src="{{ asset('frondend_asset/slick/slick.min.js')}}"></script>
   


@yield('script')
</body>

</html>
