@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />
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
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>{{ ($user->full_name) }}</div>
                                                <div class="tools">
                                                    
                                                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                      
                                                        <!-- <h3 class="form-section">Person Info</h3> -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Nama Lengkap :</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> {{ ($user->full_name) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Tanggal dibuat:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> {{ ($user->date_created) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Email :</label>
                                                                    <div class="col-md-9">
                                                                                <p class="form-control-static"> {{ ($user->email) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Dibuat Oleh:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> {{ ($user->created_by) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                          
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">No Handphone:</label>
                                                                    <div class="col-md-9">
                                                                    <p class="form-control-static"> {{ ($user->no_phone) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                    <label class="control-label col-md-3">Tanggal Diubah:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> {{ ($user->date_modified) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                           
                                                         
                                                        </div>
                                                        <!--/row-->

                                                        <div class="row">

                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Status:</label>
                                                                    <div class="col-md-9">

                                                                                          <p class="form-control-static">
                                                                                            @if ($user->status === true)
                                                                                                <input type="checkbox" name="execute" checked  class="icheck" disabled>
                                                                                            @else
                                                                                                <input type="checkbox" name="execute"  class="icheck" disabled>                                                                                              
                                                                                            @endif

                                                                                            </p>                   
                                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <!--/span-->
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Diubah Oleh:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> {{ ($user->modified_by) }} </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        
                                                        </div>
                                                  
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <a href="/master/user/edit/{{ ($user->user_id)}}" class="btn green">
                                                                            <i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="{{ url('/master/user')}}" class="btn default">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
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
        <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/form-icheck.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->


        <script>
        
        </script>

@endsection
