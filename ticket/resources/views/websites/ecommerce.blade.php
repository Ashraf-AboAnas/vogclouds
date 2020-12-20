@extends('layouts.innerPage')
@section('style')
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Cairo:wght@200;400&family=Changa:wght@300&family=El+Messiri&family=Lateef&display=swap&family=Aref+Ruqaa:wght@700&display=swap" rel="stylesheet">
<style>
.about-us-page-title .about-us-page-title-sub-title {
    margin-bottom: 30px;
    font-size:50px;
    color:#37517e;
    text-align: center;
   ;position: relative;
    font-weight: 1500;
    font-family: 'Cairo', sans-serif;

}
.h2, h2 {
    font-size: 2rem;
}.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: .5rem;
    font-family: 'Cairo', sans-serif;

}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    font-family: 'Cairo', sans-serif;

}
.text-center {
    text-align: center!important;
}body {
  font-family: 'Cairo', sans-serif;
}
body {
    margin: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    font-family: 'Cairo', sans-serif;

}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-family: 'Cairo', sans-serif;

}
.host-wp-bg-area-conainer {
    padding-bottom: 30px;

}
.position-relative {
    position: relative!important;
}
.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.wp-plan-features-box.left-side-box {
    direction: rtl;
    text-align: right;
    
}
.wp-plan-features-box:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 100px 0 rgba(77, 77, 119, 0.1);
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.wp-plan-features-box {
    background: #fff;
    box-shadow: 0 10px 100px 0 rgba(77, 77, 119, 0.06);
    border-radius: 18px;
    position: relative;
    padding: 12px 25px;
    margin-bottom: 25px;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.wp-plan-features-box .wp-plan-features-text {
    font-size: 18px;
    color: #4b555a;
    font-weight: 600;
    text-decoration: none;
    text-decoration-line: none;
    text-decoration-style: initial;
    text-decoration-color: initial;
    line-height: 20px;
    margin-top: 15px;
    margin-right: 15px;
    font-family: 'Cairo', sans-serif;
    text-align: right;


}
*, ::after, ::before {
    box-sizing: border-box;
}
div {
    display: block;
}
.host-wp-bg-area-conainer {
    padding-bottom: 30px;
}
.position-relative {
    position: relative!important;
}
.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}.btn-order-default-nuhost {
    padding: 11px 30px;
    color: #fff;
    letter-spacing: 1px;
    border-radius: 4px;
    font-weight: bold;
    font-size: 18px;
    background: #209dd8;
    text-align:center;
    width:250px;
   /* background-image: linear-gradient(to right,#f06292,#f062c8);*/
}.reseller-hosting-features .reseller-hosting-features-text {
    font-size: 14px;
    color: #a0acb9;
    text-decoration: none;
    display: block;
    font-weight: 100;
    margin-top: 2px;
    line-height: 20px;
}.reseller-hosting-features .reseller-hosting-features-title {
    font-size: 18px;
    color: #8a98a7;
    font-weight: 600;
    text-decoration: none;
    margin-top: 9px;
    display: block;
    margin-bottom: -4px;
}.reseller-hosting-features .reseller-hosting-features-icon i {
    width: 75px;
    height: 75px;
    display: block;
    position: relative;
    text-align: center;
    background: url(../img/backrounds/bulb-stock.png) no-repeat;
    background-size: 100%;
    color: #2bd8cb;
    font-size: 20px;
    font-weight: bold;
    margin-right: 15px;
    line-height: 66px;
    padding-left: 9px;
}.wp-plan-features-box .wp-plan-features-number {
    width: 60px;
    display: block;
    position: relative;
    text-align: center;
    background-color: #36096d;
background-image: linear-gradient(315deg, #36096d 0%, #37d5d6 74%);   
    border-radius: 50%;
    width: 50px;
    height: 50px;
    padding: 12px;
    font-family: 'Cairo', sans-serif;
    border: 2px solid #fff;
    text-align: center;

    font: 18px Arial, sans-serif;

    background-size: 50%;
    color:#fff;
    font-weight: bold;




}
#circle {
    box-shadow: 0 10px 100px 0 rgba(77, 77, 119, 0.06);
     border-radius: 15px;
    position: relative;
    margin-bottom: 25px;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    
}


.section-bg-rounded { 
        position: relative; 
        background-color: #36096d;
background-image: linear-gradient(315deg, #36096d 0%, #37d5d6 74%);    } 
   
    
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
          <li><a href="{{route('welcome')}}" style="font-size:20px;color:#209dd8;font-family: 'Cairo', sans-serif;"><img src="{{asset('assets/img/homepage.png')}}" width="20px" height="20px" style="margin-left:5px;">رئيسية</a></li><li><a href="{{route('welcome')}}" style="font-size:20px;color:#209dd8;font-family: 'Cairo', sans-serif;margin-left:10px;">برمجة وتصميم مواقع</a></li><li style="font-size:20px;color:#37517e;font-family: 'Cairo', sans-serif;margin-bottom:-600px;margin-right:-20px;"> <a>مواقع تسوق</a></li>
        </ol>
        </div>
    </section><!-- End Breadcrumbs -->
  
<section class="padding-100-0  section-bg" >
<div class="container">
<div class="row">
<div class="col-md-12 text-center about-us-page-title">
<h6 class="about-us-page-title-title"> </h6>
<h2 class="about-us-page-title-sub-title" style="font-size:40px;color:#37517e;text-align: center;font-weight: 500;position: relative;font-family: 'Cairo', sans-serif;">المتجر الالكتروني من   ڤوق كلاود</h2>
<p class="about-us-page-title-text" style="text-align:center;margin:auto;font-size:20px;padding-bottom: 60px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;">كل شخص يعمل في مجال التجارة يفهم مدى أهمية وجود متجر الكترونى احترافي على شبكة الانترنت لعرض بيع منتجاته و الإجابة على استفسارات العملاء و منافسة الشركات الأخرى و لكن كل متجر يجب أن يتضمن مميزات هامة</p>
</div>
</div>
<div class="row host-wp-bg-area-conainer position-relative justify-content-between"  >

<span class="host-wp-bg-area" ></span>

<div class="col-md-4 mr-tp-100" style="padding-left:70px;padding-right:-5px;">
<div class="wp-plan-features-box left-side-box">
<div class="wp-plan-features-number">01</div>
<div class="wp-plan-features-text">منتجات غير محدودة</div>
</div>
<div class="wp-plan-features-box second-left left-side-box">
<div class="wp-plan-features-number">02</div>
<div class="wp-plan-features-text">سهولة التحكم</div>
</div>
<div class="wp-plan-features-box second-left left-side-box">
<div class="wp-plan-features-number">03</div>
<div class="wp-plan-features-text"> طرق دفع مختلفة</div>
</div>
<div class="wp-plan-features-box left-side-box">
<div class="wp-plan-features-number">04</div>
<div class="wp-plan-features-text">عربة التسوق </div>
</div>
</div>
<div class="col-md-4 mr-tp-100 " id="circle"> 

<img src="{{asset('assets/img/ecommerce.jpg')}}" class="" style="border-radius: 50%; margin-right:-20px;width:380px;height:400px; box-shadow:
    inset 0 0 50px #fff,      /* inner white */
    inset 20px 0 80px #37517e,   /* inner left magenta short */
    inset -20px 0 80px #0ff,  /* inner right cyan short */
    inset 20px 0 300px #37517e,  /* inner left magenta broad */
    inset -20px 0 300px #0ff, /* inner right cyan broad */
    0 0 50px #fff,            /* outer white */
    -10px 0 80px #37517e,        /* outer left magenta */
    10px 0 80px #0ff;    ">
</div>
<div class="col-md-4 mr-tp-100 " style="padding-right:70px;padding-left:-5px;">
<div class="wp-plan-features-box">
<div class="wp-plan-features-number">05</div>
<div class="wp-plan-features-text">بحث فعال</div>
</div>
<div class="wp-plan-features-box second-right">
<div class="wp-plan-features-number">06</div>
<div class="wp-plan-features-text">موقع التسوق صديق الموبايل</div>
</div>
<div class="wp-plan-features-box second-right">
<div class="wp-plan-features-number">07</div>
<div class="wp-plan-features-text">تصاميم مميزة</div>
</div>
<div class="wp-plan-features-box">
<div class="wp-plan-features-number">08</div>
<div class="wp-plan-features-text"> بنرات دعائية </div>
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta section-bg" style="height:300px;">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-right text-lg-right">
            <h3 style="font-family:'Cairo',sans-serif;">إبدأ متجرك وزود مبيعاتك اليوم!</h3>
            <p class="description" style="line-height: 24px;font-size:14px;font-family: 'Cairo', sans-serif;color: #fff">حدد المتجر الأنسب لك وإفتح فرع جديد لشركتك على الانترنت, اويمكنك الإتصال بنا للحصول على إجابة على أى إستفسار.</p>

          </div>
          <div class="col-lg-3 cta-btn-container text-center" >
            <a class="cta-btn align-left" href="{{route('ticket')}}" style="margin-top:-20px;font-family: 'Cairo', sans-serif;font-size:14px;"><b> اطلب تسعير لمشروعك</b></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about ">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('assets/img/ecommerce.jpg')}}" class="img-fluid" alt="" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" style="margin-top:30px;">



            <h3 style="text-align:right;color:#37517e;">إستلم متجرك الإلكترونى فى أقل من دقيقة</h3>
            <p class="font-italic" style="text-align:right;margin-top:30px;">
            يتم أوتوماتيكيا بناء المتجر الإلكترونى الخاص بك, ويكون جاهز لتبدأ بإضافة منتجاتك ومعلوماتك على المتجر لتبدأ عملية البيع.            </p>
        
            <ul  style="margin-top:5px; float:right;" >
              <li  style="margin-top:5px; float:right;" ><b>تفعيل الاستضافة وإعدادات الحماية.</b> <i class="icofont-check-circled"></i></li>
              <li   style="margin-top:5px; float:right;"><b>تركيب أحدث إصدار لسكريبت أوبن كارت.</b><i class="icofont-check-circled"></i></li>
              <li   style="margin-top:5px; float:right;"><b>تسليم سريع للمتجر فى خلال أيام.</b><i class="icofont-check-circled" " ></i></li>
            </ul>
            
          </div>
        </div>

     
        <div class="row" style="margin-top:100px;">
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3 style="text-align:right;color:#37517e;">إرتقى بمشروعك لمستوى جديد من الإحترافية!</h3>
            <p class="font-italic" style="text-align:right;margin-top:30px;">
            قل وداعا للبحث فى التعليقات عن طلبات العميل, وفقدان مواعيد التسليم وتفاصيل الطلب وأخطاء إرسال الشحنات وتحمل تكاليف الأخطاء من مالك وسمعة مشروعك. الأأن بإمكانك الإنتقال لعمل أكثر إحترافية وتنظيم, بإصدار فواتير لكل سداد, تنظيم الطلبات, وإستخراج بواليص الشحن وحسابات العملاء وتنظين كل ما يتعلق بالبيع على الانترنت, وكذلك المخزون.            </p>
            <ul  style="margin-top:5px; float:right;" >
              <li  style="margin-top:5px; float:right;" ><b>نظام إدارة متكامل للمنتجات والمخزون والطلبات.</b><i class="icofont-check-circled"></i></li>
              <li   style="margin-top:5px; float:right;"><b>متابعه حالة الطلبات, والشحنات المرسلة والمسترجعه والمستلمة.</b><i class="icofont-check-circled"></i></li>
              <li   style="margin-top:5px; float:right;"><b>إدارة مالية كاملة للمتجر, بالإضافة لإستخراج فواتير العملاء.</b><i class="icofont-check-circled" " ></i></li>
            </ul>
            
          </div>

          <div class="col-lg-6">
            <img src="{{asset('assets/img/Neon Like.png')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= advantagies Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
           <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">

              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\bills.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">إدارة الحسابات والفواتير</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;">خدمة نسخ إسبوعى لموقعك, مع إمكانية طلب نظام النسخ الاحتياطى اليومى.</p>
              </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\order.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">إدارة الطلبات</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">كل طلب يتم على موقعك يكون له فاتورة, ويتم تسجيل كل عمليات السداد المالى.</p>
            </div>
          </div>

          

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img  src="{{asset('assets\img\icons\icons8-contacts-40.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">سجل كل عملاءك</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">تسجيل بيانات العميلات المتعاملين معك, لتتمكن من مراسلتهم والتواصل معهم فى المستقبل.</p>
            </div>
          </div>
          
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\discount.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">الخصومات والعروض</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">قم بإتمام عروض وخصومات بشكل أفضل, لمجموعة معينه من العملاء او على بعض المنتجات ولوقت محدد أوتوماتيكيا..</p>
            </div>
          </div>

        </div>

        <div class="row" style="margin-top:30px;">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\icons8-hand-with-smartphone-144.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">المستقبل للهواتف</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">حيث ان قطاع كبير من المستخدمين الان يعتمد على الهاتف بدرجة اساسية, يتم تصميم الموقع ليكون متجاوب مع الهواتف.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\dashboard.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">تجربة مستخدم أفضل </a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">سيعجب المستخدم بموقعك, لانه سيعرف تكلفة المنتج وتكلفة الشحن والتواصل وكافة التفاصيل أثناء تقديم الطلب.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\icons8-language-64.png')}}" style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;"> إمكانية تعدد اللغات </a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">إمتلاك موقع إلكترونى يتيح لك الوصول للمستخدمين على مستوى العالم, لذلك نوفر لك إمكانية تصميم الموقع بلغات متعددة.</p>
            </div>
          </div>
         
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height:280px;  border-radius: 15px; box-shadow: inset 0 0 10px rgba(150,150,225,.85);">
              <div class="icon"  style="float:right"><img src="{{asset('assets\img\icons\details.png')}}"  style="margin-left:15px;width:44px;height=44px;"></div>
              <h5 style="text-align:right"><a href="" style="text-align:right;color:#37517e;">عرض تفاصيل المنتجات</a></h5>
              <p style="font-size:14px;font-family: 'Cairo', sans-serif;text-align:right;margin-right:10px;margin-top:25px;">يمكن للعميل بسهولة البحث عن أى منتج, والنظر فى كل التفاصيل الخاصة بالمنتجات الموجودة داخل موقعك. </p>
            </div>
          </div>

      </div>
      
      
      
    </section>
    <!-- End featuresSection -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>عملائنا </h2>
          <p style="text-align: center;margin:auto;font-size:18px;color: #556877;width:70%;font-family: 'Cairo', sans-serif;"> شركات وثقت بڤوق كلاود لبناء موقعها الإلكترونى</p>

        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
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

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="border-red">
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

 <!-- ======= Cta Section ======= -->
 <section id="cta" class="cta section-bg" style="height:300px;">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-right text-lg-right">
            <h3 style="font-family:'Cairo',sans-serif;">إبدأ متجرك وزود مبيعاتك اليوم!</h3>
            <p class="description" style="line-height: 24px;font-size:14px;font-family: 'Cairo', sans-serif;color: #fff">حدد المتجر الأنسب لك وإفتح فرع جديد لشركتك على الانترنت, اويمكنك الإتصال بنا للحصول على إجابة على أى إستفسار.</p>

          </div>
          <div class="col-lg-3 cta-btn-container text-center" >
            <a class="cta-btn align-left" href="{{route('ticket')}}" style="margin-top:-20px;font-family: 'Cairo', sans-serif;font-size:14px;"><b> اطلب تسعير لمشروعك</b></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->



   






    
    
@endsection
