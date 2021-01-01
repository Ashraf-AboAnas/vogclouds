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
                <h4 class="content-title mb-0 my-auto">التذاكر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                      التذاكر الجديدة
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
                      @if(Auth::user()->role =='client')
                    <div class="d-flex justify-content-between">

                            <a class=" btn btn-outline-primary btn-block"  href="{{route('clientaddticket')}}">
                                اضافة تذكره جديده</a>

                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>

                                    <th class="border-bottom-0">اسم صاحب التذكره</th>
                                    <th class="border-bottom-0">رقم  التذكره</th>
                                    <th class="border-bottom-0">ايميل صاحب التذكره</th>
                                    <th class="border-bottom-0">موضوع  التذكره</th>
                                    <th class="border-bottom-0">الحاله</th>
                                    <th class="border-bottom-0">تاريخ التذكره</th>
                                    @if(Auth::user()->role =='admin')
                                    <th class="border-bottom-0">العمليات</th>
                                   @endif
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($ticket as $ticket)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>

                                        <td>{{ $ticket->name }}</td>
                                        <td>{{ $ticket->id }}</td>
                                         <td>{{ $ticket->email }}</td>
                                         <td>{{ $ticket->subject }}</td>
                                         <td>  <a class="modal-effect  " data-effect="effect-scale"
                                            data-id="{{ $ticket->id }}" data-email="{{$ticket->email }}"
                                            data-description="{{ $ticket->message }}"data-subject="{{  $ticket->subject }}"
                                                data-toggle="modal" href="#show_details">
                                                <p style="color:blue;">{{ $ticket->status }} <i class="fas fa-eye" title="اضغط هنا لعرض الرساله "
                                                    ></i></p></a></td>



                                        <td>{{ $ticket->created_at->todatestring()}}</td>
                                        @if(Auth::user()->role =='admin')
                                        <td>
                                            <div class="d-flex">

                                            <a class="btn btn-outline-success btn-sm" href="{{route('addreplytoticket',$ticket->id)}}">
                                                ردعلي التذكرة </a>

                                                <button class="btn btn-outline-success btn-sm"
                                                onclick="event.preventDefault();
                                                document.getElementById('form-complete-{{$ticket->id}}').submit()"
                                                   >استلام التذكره</button>




                                                    <form style="display:none"  id="{{'form-complete-'.$ticket->id}}" method="post"
                                                       action ="{{route('ticket.suspended',$ticket->id)}}">

                                                         @csrf
                                                         @method('put')
                                                   </form>


                                                </div>
                                        </td>
                                   @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        {{ csrf_field() }}

                    </form>
                </div>
            </div>
        </div>


        <!-- delete -->
        <div class="modal fade" id="deletemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">حذف المنتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action= '' method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="pro_id" id="pro_id" value="">
                            <input class="form-control" name="product_name" id="product_name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    <div class="modal" id="show_details">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title"> عرض التفاصيل</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <label for="des">  الاميل:    </label>

                        <input type="hidden" name="id" id="id_poup" value="">
                        <input class="form-control" name="ticket_email" id="ticket_email_poup" type="text" readonly>
                        <label for="des">  الموضوع:   </label>
                        <input class="form-control" name="ticket_subject" id="ticket_subject_poup" type="text" readonly>
                        <br>
                        <label for="des"> بيانات التذكرة:   </label>
                        <textarea name="ticket_massege" cols="20" rows="5" id='ticket_massege_poup'
                            class="form-control"></textarea>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                    </div>

                </div>
            </div>
        </div></div>
        <!-- End Basic modal -->


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
