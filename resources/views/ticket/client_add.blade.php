@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{ URL::asset('assets/plugins/multislider/multislider.css') }}" rel="stylesheet">
    <!--- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('title')
    المنتجات
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">التذاكر </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                  إضافة تذكره جديدة
                </span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

   {{-- /*******************/ --}}

      @include('alerts.errors')


      @include('alerts.success')



   {{-- /*******************/ --}}
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                      {{-- @if(Auth::user()->role =='client')
                    <div class="d-flex justify-content-between">

                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                                data-toggle="modal" href="#exampleModal">اضافة تذكره جديده</a>

                    </div>
                    @endif --}}
                </div>
                <div class="card-body">
                <form  action="{{route('clientsaveticket')}}"  enctype="multipart/form-data"  method="post" class="php-email-form" >
                        @csrf
                              <div class="row" >
                                <div class="form-group col-md-6" >
                                <label for="name" style="font-size:18px;color:#37517e; text-align:right;float: right;" > الاسم</label>
                                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="يرجى ادخال اسمك يحتوي على 4 حروف على الاقل " value="{{$user->name}}"/>
                                  @error('name')
                                  <div class="alert alert-danger" style="float:right;text-align:right">{{ $message }}</div>
                                  @enderror
                               </div>


                                <div class="form-group col-md-6">
                                  <label for="email" style="font-size:18px;color:#37517e; text-align:right;float: right;">البريد الاكتروني</label>
                                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="يرجى ادخال بريد الاكتروني لتواصل "  value="{{$user->email}}"/>
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
                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary">
                              <i class="la la-check-square-o"></i> حفظ
                        </button>
                       </div>
                            </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!-- Internal Prism js-->
    <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>


@endsection
