@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />
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
                                                    <i class="fa fa-gift"></i>{{ $title }}</div>
                                                <div class="tools">
                                                    
                                                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{ route('user.store') }}"  method="POST" class="form-horizontal" >
                                                @csrf    
                                                <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Nama Lengkap</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="fullname" class="form-control" placeholder="Enter text Fullname">
                                                                <!-- <span class="help-block"> A block of help text. </span> -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            
                                                            <label class="col-md-3 control-label">Penguna Entitas</label>
                                                            <div class="col-md-6">
                                                               
                                                                <select name="entitas" class="form-control" placeholder="Type Entitas etc, Masjid" required>
                                                                <option value="">pilih salah satu</option>
                                                                @foreach ($entitas as $entitas)
                                                                    <option value="{{ $entitas->entitas_id }}">{{ $entitas->entitas_name }}</option>
                                                                @endforeach    
                                                                
                                                                </select>
                                                            </div>
                                                       </div>

                                                       <div class="form-group">
                                                            <label class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-6">
                                                                <input type="email" name="email" class="form-control" placeholder="Enter text Email jhono@gmail.com">
                                                                <!-- <span class="help-block"> A block of help text. </span> -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">No Handphone</label>
                                                            <div class="col-md-6">
                                                                <input type="number" name="no_phone" class="form-control" placeholder="Enter text Phone">
                                                                <!-- <span class="help-block"> A block of help text. </span> -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Password</label>
                                                            <div class="col-md-6">
                                                                <input type="password" name="password" class="form-control" placeholder="Enter text Password">
                                                                <!-- <span class="help-block"> A block of help text. </span> -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            
                                                            <label class="col-md-3 control-label">Hak Akses Sebagai</label>
                                                            <div class="col-md-6">
                                                               
                                                                <select name="role_id" class="form-control"  required>
                                                                <option value="">pilih salah satu</option>
                                                                @foreach ($role as $role)
                                                                    <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                                                                @endforeach    
                                                                
                                                                </select>
                                                            </div>
                                                       </div>

                                                        <div class="form-group">
                                                                    <label class="col-md-3 control-label"> Status Aktiv </label>
                                                                    <div class="col-md-8">
                                                                        <div class="input-group">
                                                                            <div class="icheck-list">
                                                                                <label>
                                                                                    <input type="checkbox" name="status"  class="icheck">  </label>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>

                                              
 
                                            
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn  green">Submit</button>
                                                                <a href="{{ url('/master/user')}}" class="btn  grey-salsa btn-outline">Cancel</a>
                                                            </div>
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
        <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/form-icheck.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
           <!-- BEGIN THEME GLOBAL SCRIPTS -->
           <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/ui-toastr.min.js') }}" type="text/javascript"></script>


        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->


       
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
