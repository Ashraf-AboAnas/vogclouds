@extends('layouts.innerPage')
@section('style')
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
          <li><a href="{{route('welcome')}}" style="font-size:20px;color:#209dd8;font-family: 'Cairo', sans-serif;"><img src="{{asset('assets/img/homepage.png')}}" width="20px" height="20px" style="margin-left:5px;">الدعم الفني </a></li>
          <li style="font-size:20px;color:#37517e;font-family: 'Cairo', sans-serif;margin-bottom:-600px; "> مشاهدة التذكره رقم :  {{$ticket}}</li>
        </ol>



    </div>
    {{-- </section><!-- End Breadcrumbs -->

            {{-- ************ --}}


            @include('alerts.success')


          <section id="" class="">
                <div class="container" data-aos="zoom-in" dir="rtl">

                  {{-- <div class="row">
                    <form class="example" action="">
                        <div class="input-group mb-3 mr-1">
                            <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">بحث برقم التذكره</button>
                            </div>
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                        </form>
                  </div>
                    --}}


                @foreach ($comment as $comment)

                @if($comment->replaytecket != null)
                <h3> عرض الردود السابقه </h3>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1" class="form-label"> since<i style="color: royalblue;font-size:12px"> {{$comment->created_at->diffForHumans()}}</i> <i class="fas fa-user-tie" style="color: royalblue">
                     {{$comment->user->name}} </i>
                    </label>
                   <textarea  name ="adminreplay" class="form-control" id="exampleFormControlTextarea1" rows="6" readonly
                     style="font-family:Times New Roman;color:#003399; font-size: 20px" >
                    {{$comment->replaytecket}}
                   </textarea>
                 </div>
                 @endif
                 @if($comment->replaytecket == null)
                 <div class="form-group">
                  <h3>لايوجد ردود حتي هذة اللحظة </h3>
                </div>
                @endif
              @endforeach


              <!-- End Cta Section -->
              <div class="mb-3 mr-3">
                <form action="{{route('createreplayuser')}}"method="post" >
                      @csrf
                      <input type="hidden" name="aaa" class="form-control" value="{{$ticket}} ">
                   <div class="mb-3 mr-10 ">
                      {{-- <label for="exampleFormControlTextarea1" class="form-label"><h5>نص الرسالة : </h5></label> --}}
                       <br>
                      <h5 style="flood-color: red">أضف ردك هنا</h5>
                   </div>

                   <div class="form-group">
                      <textarea  name ="adminreplay" class="form-control"  @error('adminreplay') is-invalid @enderror id="exampleFormControlTextarea1" rows="6"></textarea>
                      @error('adminreplay')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                   </div>

                  <div class="footer_float ml-1">
                   <button type="submit"  class=" btn btn-outline-primary btn-block" data-effect="effect-scale"
                   >اضافة رد</button>

                  {{-- <button type="submit" class=" btn btn-outline-primary ">اضافة رد</button> --}}
                  <a href="{{route('welcome')}}" class=" btn btn-outline-secondary btn-block" data-effect="effect-scale" >عوده </a>
                 </div>

                </form>
             </div>
        </section>

@endsection
