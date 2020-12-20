<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Arsha Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

@yield('style')
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v3.0.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages ">
    <div class="container d-flex align-items-center">

      <h1 class="logo ml-auto"><a href="{{route('welcome')}}">VogClouds</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block" style ="margin-left:10px;">
        <ul>
          <li class=""><a href="{{route('welcome')}}" style="font-size: 17px;font-weight: 700;">الرئيسية</a></li>
          <li class="drop-down"><a href="" style="font-size: 17px;font-weight: 700;">الاستضافة</a></li>
          <li><a href="{{route('app')}}"style="font-size: 17px;font-weight: 700;">برامج الموبايل</a></li>
          <li class="drop-down"><a href="{{route('website')}}" style="font-size: 17px;font-weight: 700;">مواقع</a>
            <ul>
              <li><a href="{{route('bussiness')}}" style="font-size: 17px;font-weight: 700;">مـواقع شركات</a></li>
              
              <li><a href="{{route('ecommerce')}}" style="font-size: 17px;font-weight: 700;">مـواقع تسوق</a></li>
              <li><a href="{{route('design_programme')}}" style="font-size: 17px;font-weight: 700;">تصميم وبرمجة</a></li>
            </ul>
          </li>
          <li><a href="" style="font-size: 17px;font-weight: 700;">طرق الدفع </a></li>

          @if(Auth::user()&&Auth::user()->role='user')
          <li class="drop-down" style="border: none;"><a href="" style="font-size:25px;margin-top:-10px;margin-left:10px;" ><i class="icofont-user"></i> </a>
            <ul>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">عرض الفواتير  </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">تذاكر الدعم الفني </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">خدمات المشترك فيها </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">تسجيل الخروج</a></li>
            </ul>
          </li>
          @else
          <li><a href="{{route('login')}}" style="font-size:25px;margin-top:-10px;margin-left:-50px;" ><i class="icofont-user"></i> </a>
          @endif



        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
        @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container footer-bottom clearfix">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="text-align:right"><span style="color:#209dd8">Vog</span>Clouds</h3>
            <p style="text-align:right">
           
              <strong  >الهاتف:</strong> 00201000848899<br>
              <strong >البريد الاكتروني:</strong> Mall@VogClouds.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4  style="text-align:right">صفحات الرئيسية</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">رئيسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">نبذه عنالشركة </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">اتصل بنا </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">خدماتنا</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">سياسة خاصة</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="text-align:right">خدماتنا</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">استضافة مواقع</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">برمجة برامج موبايل</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('bussiness')}}">برمجة مواقع شركة</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('ecommerce')}}">برمجه متجر الاكتروني  </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('design_programme')}}">تصميم وبرمجة</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="text-align:right">وسائل التواصل الاجتماعي </h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

       </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
@yield('script')
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>