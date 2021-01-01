@extends('layouts.innerPage')
@section('style')
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Cairo:wght@200;400&family=Changa:wght@300&family=El+Messiri&family=Lateef&display=swap&family=Aref+Ruqaa:wght@700&display=swap" rel="stylesheet">
<style>
 .alert-danger{
  position: relative;
  text-align:right;

}


  </style>
@endsection
@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

<!-- Success message -->
{{-- @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif --}}

        @include('alerts.errors')
    
        @include('alerts.success')

        <div class="section-title">
          <h2>فتح تذكرة</h2>
        </div>

        <form  action="{{route('ticket.store')}}"  enctype="multipart/form-data"  method="post" class="php-email-form" >
        @csrf
              <div class="row" >
                <div class="form-group col-md-6" >
                  <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;"> الاسم</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="يرجى ادخال اسمك يحتوي على 4 حروف على الاقل " />
                  @error('name')
                  <div class="alert alert-danger" style="float:right;text-align:right">{{ $message }}</div>
                  @enderror
               </div>


                <div class="form-group col-md-6">
                  <label for="email" style="font-size:18px;color:#37517e; text-align:right;float: right;">البريد الاكتروني</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="يرجى ادخال بريد الاكتروني لتواصل " />
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

              </div>
</div>

              <div class="form-group">
                <label for="subject" style="font-size:18px;color:#37517e; text-align:right;float: right;">موضوع التذكرة</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="يرجى ادخال موضوع التذكرة" />
                  @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="row" >
                <div class="form-group col-md-6">
                <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;">القسم</label>
                <select class="form-control custom-select" name="services_id">
                  @foreach($services as $service)
                  <option value="{{$service->id}}">{{$service->name}}</option>
                  @endforeach
                </select>
                @error('services_id')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                 </div>

                <div class="form-group col-md-6">
                  <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;">الأهمية</label>
                  <select class="form-control custom-select" name="important" >
                  <option value="3" >عاجلة</option>
                  <option value="2">متوسطة</option>
                  <option value="1">عادية</option>
                </select>
                </div>
              </div>

             <div class="form-group">
                <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;">نص الرسالة</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="رجاء قم بتوضيح طلبك "></textarea>
                @error('message')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;">مرفقات</label>
                <input type="file" name="filesname[]" class="form-control"  id="filesname"  multiple />

                <div class="validate"></div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;"> رقم الهاتف لتواصل</label>
                  <input type="text" name="phone" class="form-control" id="name" data-rule="minlen:4" data-msg="يرجى ادخال رقم الجوال لتواصل " />
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group col-md-6">
                  <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;"> ميزانية مسبقة</label>
                  <input type="text" class="form-control" name="advance_budget" id="advance_budget" data-rule="advance_budget"  />
                  @error('advance_budget')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>
</div>
              <button type="submit">أرسل الان </button>
            </form>
            <br/>


            </div>
            </section>


@endsection
