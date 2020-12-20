<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" charset=utf-8">
  <title>VogClouds</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Favicons -->
  
  <link href="{{asset('assets/img/favicon.png')}}')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}')}}" rel="apple-touch-icon">

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

  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <style type="text/css">  
  #about .about-container .icon-box:hover .icon {
  background: #007bff;
}

#about .about-container .icon-box:hover .icon i {
  color: #fff;
}

</style>

 

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo ml-auto"><a href="{{route('welcome')}}">VogClouds</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block" style ="margin-left:10px;">
        <ul>
          <li class="active"><a href="{{route('welcome')}}" style="font-size: 17px;font-weight: 700;">الرئيسية</a></li>
          <li class="drop-down"><a href="#" style="font-size: 17px;font-weight: 700;">الاستضافة</a></li>
          <li><a href="{{route('app')}}"style="font-size: 17px;font-weight: 700;">برامج الموبايل</a></li>
          <li class="drop-down"><a href="{{route('website')}}" style="font-size: 17px;font-weight: 700;">مواقع</a>
            <ul>
              <li><a href="{{route('bussiness')}}" style="font-size: 17px;font-weight: 700;">مـواقع شركات</a></li>
              
              <li><a href="{{route('ecommerce')}}" style="font-size: 17px;font-weight: 700;">مـواقع تسوق</a></li>
              <li><a href="{{route('design_programme')}}" style="font-size: 17px;font-weight: 700;">تصميم وبرمجة</a></li>
            </ul>
          </li>
          <li><a href="#about" style="font-size: 17px;font-weight: 700;">عن الشركة  </a></li>
          <li><a href="#" style="font-size: 17px;font-weight: 700;">طرق الدفع </a></li>

          <li><a href="#contact" style="font-size: 17px;font-weight: 700;">اتصل بنا </a></li>
          @if(Auth::user()&&Auth::user()->role='user')
          <li class="drop-down" style="border: none;"><a href="" style="font-size:25px;margin-top:-10px;margin-left:-150px;" ><i class="icofont-user"></i> </a>
            <ul>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">عرض الفواتير  </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">تذاكر الدعم الفني </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">خدمات المشترك فيها </a></li>
              <li><a href="#" style="font-size: 17px;font-weight: 700;">تسجيل الخروج</a></li>
            </ul>
          </li>
          @else
          <li><a href="{{route('login')}}" style="font-size:25px;margin-top:-10px;margin-left:-150px;" ><i class="icofont-user"></i> </a>
          @endif



        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>ڤوق كلاود أفضل حل لبناء موقعك </h1>
          <h2>نحن فريق من المبرمجين المحترفين نقدم خدمات متنوعة منها تصميم وبرمجه المواقع وبرامج الموبايل والاستضافة بجودة وكفائة عالية </h2>
          <div class="d-lg-flex">
            <a href="{{route('website')}}" class="btn-get-started scrollto" style="font-weight:500;font-size: 18px;">ابني موقعك معنا </a>
            <a href="#about" class="btn-get-started scrollto" style="font-weight:500;font-size: 18px;margin-right:10px;"><b>استضيف موقعك معنا </b></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->




  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" style="padding: 60px 0;overflow: hidden;">
      <div class="container" data-aos="fade-up">

        <header class="section-header" style="margin-bottom:20px;">
          <h2 style="font-size:40px;color:#37517e;text-align: center;font-weight: 500;position: relative;font-family: 'Cairo', sans-serif;">نبذة عن الشركة </h2>
          <p style="text-align: center;margin:auto;font-size:16px;padding-bottom: 60px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;">تقدّم ڤوق كلاود  خدمات استضافة المواقع الالكترونيّة  إلى جانب العديد من الخدمات و الأدوات التي يحتاجها أيّ موقع الكتروني للنجاح. نعمل دائماً على توسيع نطاق خدماتنا لتلبّي احتياجات عملائنا المختلفة. هدفنا هو توفير جميع احتياجات أصحاب المواقع بأسعار مناسبة لمختلف أحجام الميزانيّات، و من دون أيّ مساومة على جودة الخدمات. إضافةً إلى استخدامنا لأحدث المعدّات و التقنيّات</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p style="font-size:30px;color:#37517e;font-weight: 500;position: relative;font-family: 'Cairo', sans-serif;">لماذا ڤوق كلاود  هو الخيار الأمثل لمشروعك ؟</p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="background: #fff;background-size: cover;padding: 0 0 30px 0;margin-top:30px;">
              <div class="icon" style="float:right;background: #fff; width:100px; height: 50px;display: flex;justify-content: center; align-items: center;flex-direction: column;text-align: center;transition: all 0.3s ease-in-out;"><img src="{{asset('assets\img\services\performance.png')}}" style="width:64px;height:64px;"></div>
              <div style="margin-right:50px;">
              <h4 class="title" style="margin-right:50px;font-weight:500;margin-bottom: 5px;color: #283d50;font-family: 'Cairo', sans-serif;font-size:25px;">الاداء</h4>
              <p class="description" style="margin-right:50px;line-height: 24px;font-size:16px;font-family: 'Cairo', sans-serif;color: #556877">تتجاوز خطط الاستضافة الممتازة التي يقدمها ڤوق كلاود الاستضافة التقليدية التي تستفيد من أحدث تقنيات البرامج والأجهزة لتوفير أعلى مستويات الأداء للمواقع. دون تكاليف مرتفعة.</p>
            </div>
            </div> 
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="background: #fff;background-size: cover;padding: 0 0 30px 0;margin-top:10px;">
              <div class="icon" style="float:right;background: #fff; width:100px; height: 50px;display: flex;justify-content: center; align-items: center;flex-direction: column;text-align: center;transition: all 0.3s ease-in-out;"><img src="{{asset('assets\img\services\cloud-server.png')}}" style="width:64px;height:64px;"></div>
              <div style="margin-right:50px;">
              <h4 class="title" style="margin-right:50px;font-weight:500;margin-bottom: 5px;color: #283d50;font-family: 'Cairo', sans-serif;font-size:25px;">الحماية</h4>
              <p class="description" style="margin-right:50px;line-height: 24px;font-size:16px;font-family: 'Cairo', sans-serif;color: #556877">في عالم اليوم حيث تكون مواقع الويب عرضة لمختلف أنواع الهجمات الإلكترونية، كان لابد من بناء سيرفراتنا على منهجية أمنية قوية للحفاظ على المواقع آمنة والحد من أي هجمات.</p>
            </div>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="background: #fff;background-size: cover;padding: 0 0 30px 0;margin-top:10px;">
              <div class="icon" style="float:right;background: #fff; width:100px; height: 50px;display: flex;justify-content: center; align-items: center;flex-direction: column;text-align: center;transition: all 0.3s ease-in-out;"><img src="{{asset('assets\img\services\fast.png')}}" style="width:64px;height:64px;"></div>
              <div style="margin-right:50px;">
              <h4 class="title" style="margin-right:50px;font-weight:500;margin-bottom: 5px;color: #283d50;font-family: 'Cairo', sans-serif;font-size:25px;">السرعة</h4>
              <p class="description" style="margin-right:50px;line-height: 24px;font-size:16px;font-family: 'Cairo', sans-serif;color: #556877">تتجاوز خطط الاستضافة الممتازة التي يقدمها ڤوق كلاود الاستضافة التقليدية التي تستفيد من أحدث تقنيات البرامج والأجهزة لتوفير أعلى مستويات الأداء للمواقع. دون تكاليف مرتفعة.</p>
            </div>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="background: #fff;background-size: cover;padding: 0 0 30px 0;margin-top:10px;">
              <div class="icon" style="float:right;background: #fff; width:100px; height: 50px;display: flex;justify-content: center; align-items: center;flex-direction: column;text-align: center;transition: all 0.3s ease-in-out;"><img src="{{asset('assets\img\services\call-center-agent.png')}}" style="width:64px;height:64px;"></div>
              <div style="margin-right:50px;">
              <h4 class="title" style="margin-right:50px;font-weight:500;margin-bottom: 5px;color: #283d50;font-family: 'Cairo', sans-serif;font-size:25px;">الدعم الفني</h4>
              <p class="description" style="margin-right:50px;line-height: 24px;font-size:16px;font-family: 'Cairo', sans-serif;color: #556877">مع فريق الدعم الإحترافي الخاص بهوست لن تكون وحدك, سنكون بجانبك في عملك. عند الإشتراك بإحدى خدماتنا ستحصل على دعم مباشر وبمعدل رد على تذكرتك خلال 20 دقيقة.</p>
            </div>
            </div>

          </div>
          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="margin: 20px 0;">
            <img src="{{asset('assets/img/why-us.png')}}" class="img-fluid" alt="">
          </div>
        </div>

        
      </div>
    </section><!-- End About Section -->




    
     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg" stye="padding: 70px 0 60px;">
      <div class="container">
      <br><br>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box"style="padding: 30px 30px 25px 30px;width: 100%;position: relative;text-align: center;background: #fff;" >
              <i class="icofont-users-alt-5" style="position: absolute;top: -25px;left: 50%;transform: translateX(-50%);font-size: 24px;background: #5a5af3;padding: 12px;color: #fff;border-radius: 50px;"></i>
              <span data-toggle="counter-up" style="font-size: 36px;display: block;font-weight: 600;color:#37517e;">232</span>
              <p style="padding: 0;margin: 0;font-size:20px;color:#37517e;"><b>عميل بخدماتنا</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box"style="padding: 30px 30px 25px 30px;width: 100%;position: relative;text-align: center;background: #fff;">
              <i class="icofont-ui-browser" style="position: absolute;top: -25px;left: 50%;transform: translateX(-50%);font-size: 24px;background: #5a5af3;padding: 12px;color: #fff;border-radius: 50px;"></i>
              <span data-toggle="counter-up" style="font-size: 36px;display: block;font-weight: 600;color:#37517e;">521</span>
              <p style="padding: 0;margin: 0;font-size:20px;color:#37517e;"> <b>موقع مستضاف</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box"style="padding: 30px 30px 25px 30px;width: 100%;position: relative;text-align: center;background: #fff;">
              <i class="icofont-ui-touch-phone" style="position: absolute;top: -25px;left: 50%;transform: translateX(-50%);font-size: 24px;background: #5a5af3;padding: 12px;color: #fff;border-radius: 50px;"></i>
              <span data-toggle="counter-up" style="font-size: 36px;display: block;font-weight: 600;color:#37517e;">1,463</span>
              <p style="padding: 0;margin: 0;font-size:20px;color:#37517e;"><b>برامج موبايل</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box"style="padding: 30px 30px 25px 30px;width: 100%;position: relative;text-align: center;background: #fff;">
              <i class="icofont-interface" style="position: absolute;top: -25px;left: 50%;transform: translateX(-50%);font-size: 24px;background: #5a5af3;padding: 12px;color: #fff;border-radius: 50px;"></i>
              <span data-toggle="counter-up" style="font-size: 36px;display: block;font-weight: 600;color:#37517e;">15</span>
              <p style="padding: 0;margin: 0;font-size:20px;color:#37517e;"><b>تصميم وبرمجة مواقع</b></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size:40px;color:#37517e;text-align: center;font-weight: 500;position: relative;font-family: 'Cairo', sans-serif;">الخدمات التي نقدمها </h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" >
              <div class="icon" ><img src="{{asset('assets\img\services\hosting.png')}}" style="display: block;margin-left: auto;margin-right: auto;" width="100px" height="85px"></i></div>
              <br>

              <h4 style='text-align:center; font-family: "Cairo", sans-serif;font-weight:500;color:#37517e'><b>خدمة استضافة محدودة وغير محدودة للمواقع </b></h4>
              <br>
              <a href="#" class="btn btn-outline-primary btn-round-lg btn-lg " style="border-radius: 22.5px;font-weight: 900; font-size: 2em; align-items: center;justify-content: center;display: flex;position:relative;" >شاهد الخدمة</a>

            </div>
          </div>
          

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
              <div class="icon" ><img src="{{asset('assets\img\services\applications.png')}}"style="display: block;margin-left: auto;margin-right: auto;" width="100px" height="90px"></i></div>
              <br>

              <h4 style='text-align:center; font-family: "Cairo", sans-serif;font-weight:500;color:#37517e'><b>خدمات برمجة تطبيقات موبايل  بأفضل الأسعار</b></h4>
              <br>
              <a href="#" class="btn btn-outline-primary btn-round-lg btn-lg " style="border-radius: 22.5px;font-weight: 900; font-size: 2em; align-items: center;justify-content: center;display: flex;position:relative;" >شاهد الخدمة</a>

            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box" >
              <div class="icon" ><img src="{{asset('assets\img\services\seo.png')}}" style="display: block;margin-left: auto;margin-right: auto;" width="100px" height="85px"></i></div>
              <br>

              <h4 style='text-align:center; font-family: "Cairo", sans-serif;font-weight:500;color:#37517e'><b>أحصل على موقع إحترافى لشركتك خلال أيام</b></h4>
              <br>
              <a href="{{route('bussiness')}}" class="btn btn-outline-primary btn-round-lg btn-lg " style="border-radius: 22.5px;font-weight: 900; font-size: 2em; align-items: center;justify-content: center;display: flex;position:relative;" >شاهد الخدمة</a>

            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
              <div class="icon" ><img src="{{asset('assets\img\services\shopping.png')}}" style="display: block;margin-left: auto;margin-right: auto;" width="100px" height="85px"></i></div>
              <br>

              <h4 style='text-align:center;font-family: "Cairo", sans-serif;font-weight:500;color:#37517e'><b>بيع أونلاين مع خدمة المتاجر الإلكترونية  </b></h4>
              <br>
              <a href="{{route('ecommerce')}}" class="btn btn-outline-primary btn-round-lg btn-lg " style="border-radius: 22.5px;font-weight: 900; font-size: 2em;align-items: center;justify-content: center;display: flex;position:relative;" >شاهد الخدمة</a>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-right">
            <h3>أطلب موقع شركتك الأن, وإحصل عليه فى خلال 7 أيام!</h3>
            <p class="description" style="line-height: 24px;font-size:14px;font-family: 'Cairo', sans-serif;color: #fff">إرسل لنا تفاصيل طلبك, وسيقوم أحد المختصين فى قسم البرمجة بتقييم السعر المناسب لتنفيذ طلباتك. ستحصل على دعم مباشر وبمعدل رد على تذكرتك خلال 20 دقيقة.</p>

          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{route('bussiness')}}">اطلب الان</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
<!-- بده شغل -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>أعمالنا وعملائنا </h2>
          <p style="text-align: center;margin:auto;font-size:18px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;"> بعض من أعمالنا ضمن خدماتنا المختلفة في التصميم والبرمجة  التي تمتاز بالكفاءة والجودة العالية</p>

        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">الكل</li>
          <li data-filter=".filter-app">برامج موبايل</li>
          <li data-filter=".filter-card">مواقع شركات</li>
          <li data-filter=".filter-web">مواقع تسويق</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Frequently Asked Questions Section ======= 
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    
     End Frequently Asked Questions Section -->
     
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

<!-- Success message -->
@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif


        <div class="section-title">
          <h2>اتصل بنا</h2>
        </div>
        

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="email" style="margin-top:30px;">
                <i class="icofont-envelope" style="float:right;margin-left:20px;width:60px;height:60px;font-size:40px;"></i>
                <div>
                <h4 style="padding-right:80px;">البريد الاكتروني:</h4>
                <p style="font-size:16px;padding-right:80px;padding-left:0px;">سيساعدك خبراء ڤوق كلاود بالمشاكل الفنية المعقدة, في حال عدم الوصل لمنطقة الأعضاء يمكنك التواصل على البريد التالي: Mall@VogClouds.com</p>
                </div>
                </div>

              <div class="phone"  style="margin-top:50px;">
                <i class="icofont-phone" style="float:right;width:60px;height:60px;font-size:40px;"></i>
                <div >
                <h4 style="padding-right:80px;">رقم الهاتف:</h4>
                <p style="font-size:16px;padding-right:80px;padding-left:0px;">يمكنك التواصل بما يتعلق بالمبيعات على رقم الهاتف بالإضافة لرقم الواتس أب :00201000848899  .<br>8am – 12pm | GMT.</p>
                   </div>
                   </div>

              <div class="phone" style="margin-top:50px;">
                <i class="icofont-support"  style="float:right;width:60px;height:60px;font-size:40px;"></i>
                <div>
                <h4 style="padding-right:80px;">الدعم الفني </h4>
                <p style="font-size:16px;padding-right:80px;padding-left:0px;">لدعم الفني الخاص بهوست متاح لمساعدتك على مدار 24/7. ستحصل على رد خلال 20 دقيقة</p>
                </div>
                </div>

            </div>

          </div>
           <!-- Success message -->
     

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="{{ route('contact.store') }}"  class="php-email-form">
            @csrf

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name" style="font-size:18px;color:#37517e;">الاسم</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>

                <div class="form-group col-md-6">
                  <label for="name" style="font-size:18px;color:#37517e;">البريد الاكتروني</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div> 
              
              <div class="form-group">
                <label for="name" style="font-size:18px;color:#37517e;">الموضوع</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name" style="font-size:18px;color:#37517e;">الرسالة</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="sent-message" style="color:blue">Your message has been sent. Thank you!</div>
              </div>
              <input type="submit" name="send" value="أرسل الان " class="btn btn-primary btn-block" style="background-color:#209dd8">
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container footer-bottom clearfix">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><span style="color:#209dd8">Vog</span>Clouds</h3>
            <p style="text-align:right">
           
              <strong>الهاتف:</strong> 00201000848899<br>
              <strong>البريد الاكتروني:</strong> Mall@VogClouds.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="text-align:right">صفحات الرئيسية</h4>
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
            <h4 style="text-align:right"> وسائل التواصل الاجتماعي </h4>
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

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

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
  <script>
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });
  </script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>