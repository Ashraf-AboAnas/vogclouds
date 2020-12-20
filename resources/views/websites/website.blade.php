@extends('layouts.innerPage')
@section('style')
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>
.pricing-table-subtitle {
  margin-top: 68px;
  font-weight: normal; }

.pricing-table-title {
  font-weight: bold;
  margin-bottom: 68px; }

.type-card {
  border: none;
  border-radius: 10px;
  margin-bottom: 40px;
  text-align: center;
  -webkit-transition: all 0.6s;
  transition: all 0.6s; }
  .type-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .type-card.type-card-highlighted {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .type-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55);
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px); }
  .type-card .card-body {
    padding-top: 55px;
    padding-bottom: 62px; }

.pricing-plan-title {
  font-size:30px;
  color: #000;
  margin-bottom: 11px;
  font-weight: normal; }

.type-plan-title {
  font-size: 20px;
  color: #000;
  font-weight: bold;
  margin-bottom: 29px; }

.type-plan-icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  font-size: 40px;
  line-height: 1;
  margin-bottom: 24px; }
  .pricing-type-bussiness .type-plan-icon {
    color: #fe397a; }
  .type-plan-ecommerce .type-plan-icon {
    color: #10bb87; }
  .pricing-plan-enterprise .type-plan-icon {
    color: #5d78ff; }

.type-plan-features {
  list-style: none;
  padding-left: 0;
  font-size: 14px;
  line-height: 2.14;
  margin-bottom: 35px;
  color: #303132; }

.type-plan-btn {
  color: #000;
  font-size: 16px;
  font-weight: bold;
  width: 145px;
  height: 45px;
  border-radius: 22.5px;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  margin-left: auto;
  margin-right: auto;
  -webkit-box-pack: center;
          justify-content: center; }
  .pricing-type-bussiness .type-plan-btn {
    background-color: #fe397a;
    color: #fff; }
    .pricing-type-bussiness .type-plan-btn:hover {
      box-shadow: 0 3px 0 0 #b7013d; }
    .pricing-type-bussiness .type-plan-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .type-plan-ecommerce .type-plan-btn {
    background-color: #10bb87;
    color: #fff; }
    .type-plan-ecommerce .type-plan-btn:hover {
      box-shadow: 0 3px 0 0 #0a7554; }
    .type-plan-ecommerce .type-plan-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .pricing-plan-enterprise .type-plan-btn {
    background-color: #5d78ff;
    color: #fff; }
    .pricing-plan-enterprise .type-plan-btn:hover {
      box-shadow: 0 3px 0 0 #1138ff; }
    .pricing-plan-enterprise .type-plan-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
      /* Testimonials Section
--------------------------------*/
#testimonials {
  padding: 60px 0;
  box-shadow: inset 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  }

#testimonials .section-header {
  margin-bottom: 40px;

}

@media (max-width: 767px) {
  #testimonials .testimonial-item {
    text-align: center;
  }
}

#testimonials .testimonial-item .testimonial-img {
  width: 120px;
  border-radius: 50%;
  border: 4px solid #fff;
  float: left;

}

@media (max-width: 767px) {
  #testimonials .testimonial-item .testimonial-img {
    float: none;
    margin: auto;
  }
}

#testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
  margin-left: 140px;

}

#testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0 0 15px 0;
  margin-left: 140px;

}

#testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 140px;

}

@media (min-width: 992px) {
  #testimonials .testimonial-item p {
    width: 80%;
  }
}

@media (max-width: 767px) {
  #testimonials .testimonial-item h3, #testimonials .testimonial-item h4, #testimonials .testimonial-item p {
    margin-left: 0;
  }
}

#testimonials .owl-nav, #testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

#testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#testimonials .owl-dot.active {
  background-color: #007bff;
}

/* Team Section
--------------------------------*/
#team {
  background: #fff;
  padding: 60px 0;
  box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
}

#team .member {
  text-align: center;
  margin-bottom: 20px;
  position: relative;
  border-radius: 50%;
  overflow: hidden;
}

#team .member .member-info {
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  transition: 0.2s;
}

#team .member .member-info-content {
  margin-top: 50px;
  transition: margin 0.2s;
}

#team .member:hover .member-info {
  background: rgba(0, 62, 128, 0.7);
  opacity: 1;
  transition: 0.4s;
}

#team .member:hover .member-info-content {
  margin-top: 0;
  transition: margin 0.4s;
}

#team .member h4 {
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 18px;
  color: #fff;
}

#team .member span {
  font-style: italic;
  display: block;
  font-size: 13px;
  color: #fff;
}

#team .member .social {
  margin-top: 15px;
}

#team .member .social a {
  transition: none;
  color: #fff;
}

#team .member .social a:hover {
  color: #007bff;
}

#team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}
</style>

<link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs" width="%100">
  <div class="container">
        <ol>
          <li><a href="{{route('welcome')}}" style="font-size:20px;color:#209dd8;font-family: 'Cairo', sans-serif;"><img src="{{asset('assets/img/homepage.png')}}" width="20px" height="20px" style="margin-left:5px;">رئيسية</a></li><li style="font-size:20px;color:#37517e;font-family: 'Cairo', sans-serif;margin-bottom:-600px; ">برمجة وتصميم مواقع</li>
        </ol>
        </div>
    </section><!-- End Breadcrumbs -->

  
    <section id="about" style="padding: 60px 0;overflow: hidden;">
      <div class="container" data-aos="fade-up">

        <header class="section-header" style="margin-bottom:20px;">
          <h2 style="font-size:40px;color:#37517e;text-align: center;font-weight: 500;position: relative;font-family: 'Cairo', sans-serif;"><b>برمجة وتصميم مواقع الاكترونية قوية بلا ثغرات </b> </h2>
          <img src="{{asset('assets/img/5454.png')}}"  style="align:center" width="1000px" height="600px" alt="">

          <p style="text-align: center;margin:auto;font-size:20px;padding-bottom: 60px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;">تقدم ڤوق كلاود  خدمة برمجة المواقع و تطبيقات الويب بطرق احترافية تنقلك الي مستوي اخر من التميز و النجاح فى مجالك فقط انقل فكرتك من العالم الافتراضى الى ارض الواقع فنحن علي اتم استعداد للقيام بطلبك وتقديم اقتراحات لتطوير فكرتك</p>
    
    <!-- ======= type  Section ======= -->
    <div class="row">
        <div class="col-md-4">
          <div class="card type-card pricing-type-bussiness">
            <div class="card-body">
              <i class="mdi mdi-cube-outline type-plan-icon"></i>
              <p class="type-plan-title ml-auto">موقع إلكترونى لشركتك على الإنترنت !</p>
              <ul class="type-plan-features">
              <li style="font-size:18">متجاوب مع الهواتف</li>
              <li>حماية عالية</li>
              <li>سهولة الاستخدام</li>
              <li>تسليم في الموعد المحدد للموقع .</li>
              </ul>
              <a href="{{route('bussiness')}}" class="btn type-plan-btn">شاهد الخدمة</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card type-card type-card-highlighted  type-plan-ecommerce">
            <div class="card-body">
                <i class="mdi mdi-trophy type-plan-icon"></i>
              <h3 class="type-plan-title ml-auto">بيع أونلاين مع خدمة المتاجر الإلكترونية</h3>
              <ul class="type-plan-features">
                <li>سكريبت المتجر الإلكترونى</li>
                <li>تصميم إحترافى للمتجر</li>
                <li>خدمة الدعم الفنى للمتجر</li>
                <li>لوحة تحكم لادارة المتجر</li>
              </ul>
              <a href="#!" class="btn type-plan-btn">شاهد الخدمة</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card type-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="mdi mdi-wallet-giftcard type-plan-icon"></i>
              <p class="type-plan-title ml-auto">تصميم وبرمجه</p>
              <ul class="type-plan-features">
                <li>  برمجة موقع حسب الطلب </li>
                <li>متعدد اللغات</li>
                <li>برمجة نظم </li>
                <li>خدمات تصميم المواقع </li>
              </ul>
                <a href="#!" class="btn type-plan-btn">شاهد الخدمة</a>
            </div>
          </div>
        </div>
      </div>
        </header>


        
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center ">
            <h1 style="text-align:center;color:#fff;">أطلب موقع شركتك الأن, وإحصل عليه فى خلال 7 أيام!</h1>
            <p class="description" style="line-height: 24px;text-align:center;font-size:20px;font-family: 'Cairo', sans-serif;color: #fff;margin-top:40px;">إرسل لنا تفاصيل طلبك, وسيقوم أحد المختصين فى قسم البرمجة بتقييم السعر المناسب لتنفيذ طلباتك. ستحصل على دعم مباشر وبمعدل رد على تذكرتك خلال 20 دقيقة.</p>

          </div>
          <div class="col-lg-3 cta-btn-container text-center" >
            <a class="cta-btn align-middle" href="{{route('bussiness')}}">اطلب الان</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    
    <!-- ======= advantagies Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>مميزات البرمجة من ڤوق كلاود</h2>
          <p style="text-align:center;margin:auto;font-size:20px;padding-bottom: 60px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;"> فترة قصيرة وصلت شركتنا لمكانة مميزة بين الشركات التي تقدم خدمة برمجة مواقع ؛ بسبب روح الابتكار التي يتمتع بها كل فرد في فريق العمل لدينا. فإننا نضمن لك برمجة احترافية تجعل موقعك متوافق مع كل محركات البحث , و في الوقت نفسه تجعل الموقع يعمل بشكل سريع , و أيضا مريح وسهل الاستخدام  للزائر .</p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">

              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\security.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"> <a href="" style="text-align:right" >اكواد مشفرة فانت بامان</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">تمتع بأقصى درجات الأمان معنا . نستخدم اصعب اساليب التشفير للأكواد و حتى اذا استطاع احد الوصول الى اكواد البرمجة فلن يستطيع استخراج اى بيانات منها</p>
              </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\high-quality.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">جودة العمل</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">اخراج العمل مطابق تماما لفكرتك و كما كان في عقلك و تصورك . تطبيق المعايير القياسية في برمجة المواقع .</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\success.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">امكانية التطوير مستقبلا</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">نقدم لعملائنا خدماتنا فى برمجة الويب بطريقة احترافية و اكواد اصلية نظيفة تتيح للعميل امكانية تطوير موقعة الالكترونى فى اى وقت يريد</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\wireframe.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">واجهة مستخدم سهلة الاستخدام</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">.تصميمات لافتة للنظر وبديهية تضمن إرضاء المستخدم بدرجة عالية</p>
            </div>
          </div>

        </div>

        <div class="row" style="margin-top:30px;">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\service.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">خدماتي</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">يتوفر بالموقع خاصية عرض الخدمات الخاصة بكم بشكل مفصل بالصور و المقالات بشكل مميز و ظهور اشعارات اول باول</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\dashboard.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">تحكم في موقعك بسهولة</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">قم بإدارة محتويات موقعك بكل سهولة في أي وقت , إجعل موقعك محدث دائماً ليقوم عملاؤك و زوارك بمعاودة زيارة موقعك بإستمرار</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\ux.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right">تجربة المستخدم UX</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">تبرز تجربة المستخدم الجوانب القيمة والعاطفية و التجريبية و ذات المعنى في التفاعل بين الإنسان و الحاسب و ملكية المنتج</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\gear.png')}}"  style="margin-left:15px;"></div>
              <h4 style="text-align:right"><a href="" style="text-align:right"> صديق لمحركات البحث</a></h4>
              <p style="font-size:16px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:15px;">.نقدم خدمات التسويق الالكترونى للمواقع بشكل احترافى يضمن لموقعك الظهور فى نتائج البحث الاولى على محركات البحث</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End featuresSection -->


    
@endsection
