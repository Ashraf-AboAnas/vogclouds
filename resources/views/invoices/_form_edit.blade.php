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
    <style> legend.group-border {
        width: inherit;
        /* Or auto */
        padding: 0 10px;
        /* To give a bit of padding on the left and right */
        border-bottom: none;
      }
      fieldset.group-border {
        border: 1px groove #ddd !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000;
      }
      </style>
@endsection
@section('title')
    المنتجات
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">التذاكر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                     إنشاء فاتورة
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
                    <div class="d-flex justify-content-between">

                            {{-- <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                                data-toggle="modal" href="#exampleModal">اضافة منتج</a> --}}

                    </div>
                </div>
                <div class="card-body">
                    {{-- //  action ="{{route('ticket.suspended',$ticket->id)}}"> --}}



                    <div class="col-md-12">
                        <form action="{{route('invoice.update',$ticket->id)}}" method="post">
                            @csrf
                            @method('put')
                        <fieldset class="group-border">
                            <legend class="group-border">بيانات الفاتوره </legend>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-inline">
                                        <label class="control-label" for="NumDoc">رقم الفاتوره :</label>
                                        <input class="form-control input-sm"
                                        disabled="disabled" id="ticket_code" name="ticket_code"
                                          value="{{$uniquee}}" type="text">
                                    <input type="hidden"name="ticket_id" value="{{$ticket->id}}">
                                    <input type="hidden" name="ticket_user" value="{{$ticket->user_id}}">
                                    <input type="hidden" name="ticket_code" value="{{$uniquee}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-inline">
                                        <label class="control-label" for="ProcessNum">الاسم : </label>
                                        <input class="form-control input-sm" data-val="true"  disabled="disabled" id="ProcessNum"
                                        name="ProcessNum"  value="{{$ticket->name}}" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-inline">
                                        <label class="control-label" for="State">  السعر المتفق عليه :</label>
                                        <input class="form-control input-sm"  id="price" name="price"
                                        placeholder="price " value="{{$ticket->advance_budget}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-1">
                                    <label class="control-label" for="Name">الموضوع :</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control input-sm" disabled="disabled" id="Name" name="Name"
                                    placeholder="Nome Documento" value="{{$ticket->subject}}" type="text">
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-1">
                                    <label class="control-label" for="Description">حالة التذكرة: </label>
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control input-sm" disabled="disabled" id="Description" name="Description" placeholder="Descrição" value="not-paid" type="text">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-inline">
                                        <label class="control-label" for="Date">تاريخ الانشاء</label>
                                        <input class="form-control input-sm" data-val="true"   disabled="disabled"
                                    id="Date" name="Date"  value="{{$date}}" type="text">
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-inline">
                                        <label class="control-label" for="Dateline">تاريخ الاستحقاق</label>
                                        <input class="form-control input-sm  @error('Dateline') is-invalid @enderror " data-val="true"
                                       id="Dateline" name="Dateline"  value="" type="date">

                                    </div>
                                    @error('Dateline')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <br>
                            <div class="footer_float">
                                <button type="submit" class="btn btn-primary"> حفظ التغيرات </button>
                                <a href="#" class="btn btn-secondary" >الغاء</a>
                       </div>
                        </fieldset>
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

    <script>
        $('#show_details').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var email = button.data('email')
            var massage = button.data('description')
            var subject = button.data('subject')
           // var description = button.data('description')
            var modal = $(this)
            modal.find('.modal-body #ticket_email_poup').val(email);
            modal.find('.modal-body #ticket_massege_poup').val(massage);
          modal.find('.modal-body #ticket_subject_poup').val(subject);
           // modal.find('.modal-body #pro_id').val(pro_id);
        })
</script>



@endsection
