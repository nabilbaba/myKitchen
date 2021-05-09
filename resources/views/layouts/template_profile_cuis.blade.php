<!DOCTYPE html>
<html>
<script src="{{ asset('js/app.js') }}"></script>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  
  <!-- Favicon -->
  <link rel="icon" href="assetsAdmin/img/brand/N.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assetsAdmin/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assetsAdmin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="assetsAdmin/css/argon.css?v=1.2.0" type="text/css">
  <script src="{{ asset('js/vue.js') }}"></script>
  <script src="{{ asset('js/axios.min.js') }}"></script>
  
  <?php

         $stripeProfile=$stripeIcons=$stripeRecipes='';
                
         $urlAcctuiel = Route::getCurrentRoute()->uri();
         
         if($urlAcctuiel == 'iconsC'){
             $stripeIcons='active';
         }
         else if($urlAcctuiel == 'profileC'){
             $stripeProfile='active';
         }
         
         else if($urlAcctuiel == 'recettesC'){
             $stripeRecipes='active';
         }
         

  ?>

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)" style=" margin-top: -35px;">
         <h1 style="font-size: 28px; line-height: 1; font-weight: 700; letter-spacing: 1px;">
            <a href="#" style=" color: #354144; text-decoration: none; ">
              My
              <span style="color: #FF0045;">Kitchen</span>
            </a>
          </h1>
        </a>
        <hr  style="margin-top: 40px; width: 200px;">
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-top:55px;">
              <a class="nav-link <?php echo $stripeProfile ?>" href="{{route('profileC')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <b><span class="nav-link-text">Profile</span></b>
              </a>
            </li>
            <li class="nav-item" style="margin-top: 30px;">
              <a class="nav-link <?php echo $stripeRecipes ?>" href="{{route('recettesC')}}">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <b><span class="nav-link-text">Recipes</span></b>
              </a>
            </li>
            <li class="nav-item" style="margin-top: 30px;">
              <a class="nav-link <?php echo $stripeIcons ?>" href="{{route('iconsC')}}">
                <i class="ni ni-planet text-orange"></i>
                <b><span class="nav-link-text">Icons</span></b>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3" style="margin-top: 20px;">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  
 <div class="main-content" id="panel" >
    
    @yield('content')

    
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="{{route('myKitchen')}}" class="font-weight-bold ml-1" target="_blank">myKitchen</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="{{route('myKitchen')}}" class="nav-link" target="_blank">My Kitchen</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    
    @stack('javascripts')
  </div>
  

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assetsAdmin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assetsAdmin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assetsAdmin/vendor/js-cookie/js.cookie.js"></script>
  <script src="assetsAdmin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assetsAdmin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assetsAdmin/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assetsAdmin/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assetsAdmin/js/argon.js?v=1.2.0"></script>
</body>

</html>