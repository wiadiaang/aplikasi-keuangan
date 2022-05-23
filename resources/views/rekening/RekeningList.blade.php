@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
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
                        <div class="col-md-6">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">Balance Sheet
                                    </div>
                                        <!-- <i class="fa fa-globe"></i></div> -->
                               

                                    <div class="actions">
                                        <div class="btn-group btn-group-devided">
                                            <a href="{{ url('/master/rekening/balance/group')}}" class="btn btn-sm green ">New Group</a>
                                            <a href="{{ url('/master/rekening/balance/account')}}" class="btn btn-sm green ">New Account</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="data-table-type" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                        <th>No</th>
                                                        <th>Rekening</th>
                                                        <!-- <th>Nama Rekening </th> -->
                                                        <th>Actions</th>

                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           

                                                     @foreach($groupA as $category)
                                                        <tr>

                                                        <td></td>
                                                        <td>
                                                            <div> {{ $category->account_name }} </div>

                                                             @foreach($category->children as $child)
                                                              
                                                                 <div style="margin-left:20px;"> {{ $child->account_name }} </div>

                                                                 @foreach($child->children as $child2)

                                                                    <div style="margin-left:40px;"> {{ $child2->account_name }}  {{$child2->account_code}}   </div>

                                                                    

                                                                 @endforeach
                                                                 
                                                             @endforeach
                                                        </td>
                                                                
                                                                
                                                        <td></td>      
                                                                
                                                        </tr>                   
                                                    @endforeach
   

                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">Profit and Loss Statement
                                    </div>
                                        <!-- <i class="fa fa-globe"></i></div> -->
                               

                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" >
                                            <a href="{{ url('/master/rekening/profit/group')}}" class="btn btn-sm green ">New Group</a>
                                            <a href="{{ url('/master/rekening/profit/account')}}" class="btn btn-sm green ">New Account</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="data-table-type" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                        <th>No</th>
                                                     
                                                        <th>Rekening </th>
                                                        <th>Actions</th>

                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                        @foreach($groupB as $category)
                                                        <tr>

                                                        <td></td>
                                                        <td>
                                                            <div> {{ $category->account_name }} </div>

                                                             @foreach($category->children as $child)
                                                              
                                                                 <div style="margin-left:20px;"> {{ $child->account_name }} </div>

                                                                 @foreach($child->children as $child2)

                                                                    <div style="margin-left:40px;"> {{ $child2->account_name }}  {{$child2->account_code}}   </div>

                                                                    

                                                                 @endforeach
                                                                 
                                                             @endforeach
                                                        </td>
                                                                
                                                                
                                                        <td></td>      
                                                                
                                                        </tr>                   
                                                    @endforeach   
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- page plugins js -->
        <!-- <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script> -->

        <!-- page js -->
        <!-- <script src="{{ asset('assets/js/table/data-table.js') }}"></script> -->

       
<script>
// $(function () {
    
//             var table = $('#data-table-type').DataTable({
//                 processing: true,
//                 serverSide: true,
//                 ajax: "{{ route('getEntitas') }}",
//                 columns: [
//                     { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
//                     {data: 'entitas_name', name: 'entitas_name'},
//                     {data: 'entitas_type_name', name: 'entitas_type_name'},
//                     // {data: 'entitas_address', name: 'entitas_address'},
//                     {data: 'date_created', name: 'date_created'},
//                     {data: 'status', name: 'status'},
                
//                     {data: 'action', name: 'action', orderable: false, searchable: false},
//                 ]
//             });
            
//         });
</script>

@endsection