@extends('layouts.app')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	
        <!-- <link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset('/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- <link href="{{ asset('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" /> -->

        <!-- <link href="{{ asset('/assets/global/plugins/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" /> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
		    <style>
        .wrapper-text-input {
        position: relative;
        display: flex;
        align-item: center;
        margin: 10px;
        }
        .wrapper-text-input input {
        height: 30px;
        }
        .wrapper-text-input button {
        display: flex;
        align-items: center;
        height: 30px;
        padding: 5px 10px;
        border: none;
        margin-left: 10px;
        border-radius: 50%;
        }

        .add {
            background-color: #3d3df1;
            color: #fff;
            padding: 8px 17px;
            border: none;
            border-radius: 6px;
            margin: 10px;
            font-size: 17px;
        }

        .wrapper-text-input button.delete {
            border-radius: 6px;
            background: #ef3232;
            color: #fff;
            font-size: 13px;
        }
    </style>

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
                                                <form action="{{ route('jurnalStore') }}"  method="POST" class="form-horizontal" >
                                                @csrf   
                                                


                                                     <div class="form-body">

                                                        <div class="row">
                                                            
                                                         
															
														<div class="col-md-4">
																 <div class="form-group">
                                                                            <label>Tanggal</label>
                                                                             <div class="input-group input-medium">
                                                                     <span class="input-group-btn">
																					<button class="btn default" type="button">
																						<i class="fa fa-calendar"></i>
																					</button>
																		</span>
                                                                        <input type="text" name="tanggal" class="form-control" > </div>
																	   
																	</div>
														 </div>
                                                            <!-- /.col-md-6 -->
															<div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label>Referensi</label>
                                                                             <div class="input-group input-medium">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox"> </span>
                                                                        <input type="text" name="referensi" class="form-control" placeholder="No referensi"> </div>
																	</div>
															</div>
                                                            
                                                        </div>

                                                        <div class="row">
															     <div class="col-md-7">
																
                                                                    <div class="form-group">
																		 
                                                                            <label>Narasi</label>
                                                                             
																				
																					<textarea  name="narasi" class="form-control" placeholder=""></textarea>
																		
																		    </div>
																	</div>
															
                                                               
                                                        
                                                              
                                                            
																
														</div>
														
													

                                                      
												  <table class="table table-bordered" id="dynamicTable">  
															<tr>
																<th>Akun</th>
																<th>Debit</th>
																<th>Kredit</th>
																<th></th>
															</tr>
															<tr>  
																<td>  
                                                                            
                                                                            <select name="addMore[0][group_id]" class="form-control" placeholder="">
                                                                                    <option value="">pilih salah satu</option>
                                                                                    @foreach ($account as $bg)
                                                                                        <option value="{{ $bg->account_id }}">{{ $bg->account_name }}</option>
                                                                                    @endforeach    
                                                                        
                                                                          </select>
                                                                        </td>  
																<td> <div class="input-group">
                                                                            <input name="addMore[0][debit]" type="number" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn grey" type="button">IDR</button>
                                                                                </span>
																			</div></td>  
																<td><div class="input-group">
                                                                            <input name="addMore[0][credit]" type="number" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn grey" type="button">IDR</button>
                                                                                </span>
																			</div>
																			
																			</td>  
																
															</tr>  
															<tr>  
																<td>  
                                                                            
                                                                            <select name="addMore[1][group_id]" class="form-control" placeholder="">
                                                                                    <option value="">pilih salah satu</option>
                                                                                    @foreach ($account as $bg)
                                                                                        <option value="{{ $bg->account_id }}">{{ $bg->account_name }}</option>
                                                                                    @endforeach    
                                                                        
                                                                          </select>
                                                                        </td>  
																<td> <div class="input-group">
                                                                            <input name="addMore[1][debit]" type="number" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn grey" type="button">IDR</button>
                                                                                </span>
																			</div></td>  
																<td><div class="input-group">
                                                                            <input name="addMore[1][credit]" type="number" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn grey" type="button">IDR</button>
                                                                                </span>
																			</div>
																			
																			</td>  
																 
															</tr>
														</table> 
														
														<button type="button" name="add" id="add" class="btn btn-success">Tambah baris</button>
                                     
                                            
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn  green">Submit</button>
                                                                <a href="{{ url('/jurnal')}}" class="btn  grey-salsa btn-outline">Cancel</a>
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
  <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- <script src="{{ asset('/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script> -->
        
        <script src="{{ asset('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/pages/scripts/ui-toastr.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script>

 var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td> <select name="addMore['+i+'][group_id]" class="form-control" > <option value="">pilih salah satu</option>  @foreach ($account as $bg) <option value="{{ $bg->account_id }}">{{ $bg->account_name }}</option> @endforeach   </select></td><td><input name="addMore['+i+'][debit]" type="number" class="form-control"><span class="input-group-btn">  <button class="btn grey" type="button">IDR</button>   </span> </div> </td><td> <input name="addMore['+i+'][credit]" type="number" class="form-control"> <span class="input-group-btn"> <button class="btn grey" type="button">IDR</button></span> </div></td><td><button type="button" class="btn btn-danger remove-tr">X</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
      </script>

@endsection