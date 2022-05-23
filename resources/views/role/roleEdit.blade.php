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
                                                    <i class="fa fa-gift"></i>Tambah Role</div>
                                                <div class="tools">
                                                    
                                                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{ route('role.update',$post->role_id)  }}"  method="POST" class="form-horizontal" >
                                                @csrf
                                                @method('PATCH') 
                                                <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Nama Role</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="role_name" class="form-control" value="{{ old('role_name', $post->role_name) }}" placeholder="Enter text">
                                                                <!-- <span class="help-block"> A block of help text. </span> -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                                    <label class="col-md-3 control-label"> Hak Akses </label>
                                                                    <div class="col-md-8">
                                                                        <div class="input-group">
                                                                            <div class="icheck-list">
                                                                                <label>
                                                                                            @if ($post->read === true)
                                                                                                <input type="checkbox" name="read" checked value="{{ old('read', $post->read) }}" class="icheck">
                                                                                            @else
                                                                                                <input type="checkbox" name="read"  class="icheck">                                                                                              
                                                                                            @endif

                                                                                            Read </label>
                                                                                <label>
                                                                                            @if ($post->write === true)
                                                                                                <input type="checkbox" name="write" checked value="{{ old('write', $post->write) }}" class="icheck">
                                                                                            @else
                                                                                                <input type="checkbox" name="write"  class="icheck">                                                                                              
                                                                                            @endif

                                                                                            Write </label>
                                                                                   
                                                                                <label>
                                                                                            @if ($post->execute === true)
                                                                                                <input type="checkbox" name="execute" checked value="{{ old('execute', $post->execute) }}" class="icheck">
                                                                                            @else
                                                                                                <input type="checkbox" name="execute"  class="icheck">                                                                                              
                                                                                            @endif

                                                                                            Execute </label>
                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                     
                                            
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn  green">Submit</button>
                                                                <a href="{{ url('/master/role')}}" class="btn  grey-salsa btn-outline">Cancel</a>
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


        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->


        <script>
        
        </script>

@endsection
