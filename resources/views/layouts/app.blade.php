<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        a {
            color: #ffffff;
        }
        * {
            font-family: Almarai;
        }
  
        .cart-icon {
            position: relative;
            display: inline-block;
        }
        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            
        }
        
  
    </style>
</head>
<body dir="rtl">
    <header>
        <nav class="navbar" style="background-color: rgb(130, 119, 148);">
            <div class="container">
                <ul class="list-inline">
                    <li class="list-inline-item p-1"><a href="{{route('index')}}">الرئيسية</a></li>
                    <li class="list-inline-item p-1"><a href="{{route('callus')}}">اتصل بنــا</a></li>
                    <li class="list-inline-item p-1"><a href="{{route('AboutUs')}}">حولنــا</a></li>
                    <li class="list-inline-item p-1"><a href="{{route('myproducts')}}">منتجاتنــا</a></li>
                </ul>
                <div style="display: flex; align-items: center; position: relative; width: 100%;">
                  <!-- أيقونة السلة في اليسار -->
                  <div style="position: absolute; left: 0;">
                      <a href="#" class="cart-icon position-relative">
                          <i class="bi bi-cart4 fs-1"></i>
                          @if(session('count') && session('count') > 0)
                              <span class="cart-count position-absolute">{{ session('count') }}</span>
                          @else
                              <span class="cart-count position-absolute" style="display: none;"></span>
                          @endif
                          
                      </a>
                  </div>
                  <!-- النص في المنتصف -->
                  <div style="flex: 1; text-align: center;">
                      <h1 class="text-white" style="margin: 0; color:rgb(28, 99, 68);">Green Oasis</h1>
                  </div>
              </div>
        </nav>
    </header>

    <main class="mt-4">
        @yield('content')
    </main>
                <div class="container my-5">
  <!-- Footer -->
  <footer class="text-center" style="background-color:rgba(161, 165, 188, 0.007)">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" style="color:  rgb(130, 119, 148);">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" style="color:  rgb(130, 119, 148);">Products</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" style="color:  rgb(130, 119, 148);">Awards</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" style="color:  rgb(130, 119, 148);">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" style="color:  rgb(130, 119, 148);">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
          <p style="color: rgb(28, 99, 68)">ندعوك إلى عالم أخضر يزخر بآلاف الأنواع من النباتات والزهور الفواحة. اختر من بين تشكيلة واسعة من النباتات المنزلية من متجرنا </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2025 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>