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
    اضافة رد علي التذاكر
@stop

@section('page-header')
    <!-- breadcrumb -->


    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">


                <h4 class="content-title mb-0 my-auto">التذاكر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                      اضافه رد الي التذاكر رقم :{{$ticket->id}}

                </span>


            </div>
        </div>
    </div>
    @include('alerts.errors')


    @include('alerts.success')


    <!-- breadcrumb -->
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="d-flex">
               <div class="mb-3 mr-3 mt-2">

               <h5 >الموضوع: </h5>
               {{-- <input type="email" class="form-control" id="exampleFormControlInput1"value="{{$ticket->id}} "> --}}
                 <h6> {{($ticket->subject)}}</h6>
                  {{-- "> --}}
            </div>
             {{-- <div class=" ml-8mb-3 mr-3 mt-2 ">
                 <h5>الحالة: </h5>
                  <h6> {{$ticket->status}}</h6>
              </div> --}}
        </div>
        <div class="mb-3 mr-3">
            <h5>الحالة: </h5>
              <h6> {{$ticket->status}}</h6>
          </div>
       {{-- {{route('createreplay',[$ticket->id])}} --}}
       <div class="mb-3 mr-3">
         <h3> عرض الردود السابقه </h3>
         @if(($comment ==null))

          @else
         @foreach ($comment as $comment)

{{-- /************************

@foreach ($comment as $comment)

<div class="form-group">
    <label for="exampleFormControlTextarea1" class="form-label"> "since" {{$comment->created_at->diffForHumans()}} </label>
    <textarea  name="adminreplay"class="form-control  @error('adminreplay') is-invalid @enderror" id="adminreplay" > {{$comment->replaytecket}}</textarea>
    @error('adminreplay')
      <p class="text-danger">{{ $message }}</p>
    @enderror
</div>




           @endforeach

/********************* --}}
             <label for="exampleFormControlTextarea1" class="form-label"> "since" {{$comment->created_at->diffForHumans()}} </label>
            <textarea  name ="adminreplay" class="form-control" @error('adminreplay') is-invalid @enderror  id="exampleFormControlTextarea1" rows="6" readonly>

            @if($comment->replaytecket)
            {{$comment->replaytecket}}

             @else
             <h3 style="color: red"> No Comment in THis Moments<h3>
             @endif
           </textarea>


           @endforeach
           @endif

        </div>
    <div class="mb-3 mr-3">
        <h3> اضافة رد جديد </h3>

          <form action="{{route('createreplay')}}"method="post" >

            @csrf

            <input type="hidden" name="aaa" class="form-control" value="{{$ticket->id}} ">
             <div class="mb-3 mr-1 ml-1">
              {{-- <label for="exampleFormControlTextarea1" class="form-label"><h5>نص الرسالة : </h5></label> --}}
              <h5>نص الرسالة :</h5>
            </div>

            <div class="form-group">
              <textarea  name ="adminreplay" class="form-control"  @error('adminreplay') is-invalid @enderror  id="exampleFormControlTextarea1" rows="6"></textarea>
              @error('adminreplay')
              <p class="text-danger">{{ $message }}</p>
              @enderror
           </div>

 <div class="footer_float ml-1">
    <button type="submit"  class=" btn btn-outline-primary btn-block" data-effect="effect-scale"
    >اضافة رد</button>

    {{-- <button type="submit" class=" btn btn-outline-primary ">اضافة رد</button> --}}
    <a href="{{route('NewTicket')}}" class=" btn btn-outline-secondary btn-block" data-effect="effect-scale" >Cancle</a>
</div>
</form>
    </div>
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
