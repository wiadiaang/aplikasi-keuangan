@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                                                    <i class="fa fa-gift"></i>Tambah {{ $title }}</div>
                                                <div class="tools">
                                                    
                                                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{ route('storeAccountProfit') }}"  method="POST" class="form-horizontal" >
                                                @csrf    
                                                <div class="form-body">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Nama</label>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                          
                                                                <div class="col-md-12">
                                                                    <input type="text" name="account_name" class="form-control" placeholder="">
                                                                    <!-- <span class="help-block"> A block of help text. </span> -->
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Kode</label>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                          
                                                                <div class="col-md-12">
                                                                    <input type="text" name="account_code" class="form-control" placeholder="Optional">
                                                                    <!-- <span class="help-block"> A block of help text. </span> -->
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                        </div>

                                                      
                                               
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Group</label>
                                                                    
                                                                </div>
                                                                <div class="input-group">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn grey control-label" type="button">Balance Sheet</button>
                                                                            </span>
                                                                            <select name="group_id" class="form-control" placeholder="">
                                                                                    <option value="">pilih salah satu</option>
                                                                                    @foreach ($profitGroup as $bg)
                                                                                        <option value="{{ $bg->account_id }}">{{ $bg->account_name }}</option>
                                                                                    @endforeach    
                                                                        
                                                                            </select>
                                                                <!-- /input-group -->
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label class="col-md-3 control-label">`</label>
                                                                    
                                                                </div>
                                                                <div class="input-group">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn blue" type="button">Cash flow Statement</button>
                                                                            </span>
                                                                              <select name="cf_id" class="form-control" required>
                                                                                    <!-- <option value="">pilih salah satu</option> -->
                                                                                    @foreach ($cashFlowStatement as $cf)
                                                                                        <option value="{{ $cf->cf_id }}">{{ $cf->cashflow_statement }}</option>
                                                                                    @endforeach    
                                                                        
                                                                            </select>
                                                                    
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                        </div>
                                                  

                                                    

                                                    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Pajak</label>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                          
                                                                <div class="col-md-12">
                                                                            <select name="tax_code" class="form-control" >
                                                                                    <option value="">pilih salah satu</option>
                                                                                    <option value="1">PPh 21</option>
                                                                                    <option value="2">PPN 10%</option>
                                                                                   
                                                                        
                                                                            </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                    
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Saldo Awal</label>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                          
                                                                    <div class="col-md-12">
                                                                        <input type="number" name="starting_balance" class="form-control" placeholder="">
                                                                        <!-- <span class="help-block"> A block of help text. </span> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label class="col-md-3 control-label">`</label>
                                                                    
                                                                </div>
                                                                <div class="input-group">
                                                                            <!-- <span class="input-group-btn">
                                                                                <button class="btn blue" type="button">Cash flow Statement</button>
                                                                            </span> -->
                                                                              <select name="position" class="form-control" placeholder="">
                                                                                    <option value="1">Debit</option>
                                                                                    <option value="2">Credit</option>
                                                                                      
                                                                        
                                                                            </select>
                                                                    
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                        </div>
                                            
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn  green">Submit</button>
                                                                <a href="{{ url('/master/rekening')}}" class="btn  grey-salsa btn-outline">Cancel</a>
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@endsection