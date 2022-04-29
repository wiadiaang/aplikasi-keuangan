@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

@endsection

@section('content')

<!-- Content Wrapper START -->



  <!-- BEGIN PAGE HEAD-->
  <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>{{ $title }}
                                <small></small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <div class="btn-group">
                                    <a href="{{ url('/master/komponen/new')}}" class="btn sbold green" >
                                        Tambah Baru 
                                    </a>
                            </div>
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="{{ url('/dashboard') }}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        
                        <li>
                            <span class="active">{{ $title }}</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                   
                
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                    </div>
                                        <!-- <i class="fa fa-globe"></i></div> -->
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="data-table-type" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                                <th>Komponen</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Dibuat</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                      
                    </div>
                    <!-- END PAGE BASE CONTENT -->



@endsection


@section('js')

        <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->


        <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
           <!-- BEGIN THEME GLOBAL SCRIPTS -->
           <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
    
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      
    
        <script>
        $(function () {
            
            var table = $('#data-table-type').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getKomponen') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'komponen_name', name: 'komponen_name'},
                    {data: 'komponen_deskripsi', name: 'komponen_deskripsi'},
                    {data: 'date_created', name: 'date_created'},
                
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });



            $(document).on('click', '.delete-confirm', function (e) {
                e.preventDefault();
                var id = $(this).data('id');

                console.log(id);

                new swal({
                        title: "Anda yakin akan menghapus?",
                        // icon: "question",
                        dangerMode: true,
                        buttons: {
                            cancel: true,
                            confirm: true,
                        },
                    })

                    .then((willDelete) => {
                        if (willDelete) {
                                                       
                                            $.ajax({
                                                type: "GET",
                                                url: "{{url('/master/komponen/delete')}}"+ "/" + id,
                                                success: function (data) {
                                                        
                                                    toastr.success("Delete Data Sukses !");
                                                    table.ajax.reload();
                                                   
                                                    
                                                } ,
                                                error : function(data)
                                                {
                                                  
                                                    toastr.error("delete gagal karena ada error !");
                                                }        
                                            });

                                        
                        } else {

                            toastr.warning("gagal coy !");
                        }
                    });
       
         

            });
            
        });
       


       
       
       </script>

            @if (Session('success'))
            <script>
                toastr.success("{!! Session::get('success') !!}");
            </script>

            @endif

            @if (session('error'))
            <script>
            toastr.error("{!! Session::get('error') !!}");
            </script>
            @endif

@endsection
