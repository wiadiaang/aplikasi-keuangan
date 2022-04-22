@extends('layouts.app')

@section('content')

<!-- Content Wrapper START -->
<div class="main-content">


<div class="container-fluid">
                        <div class="page-title">
                        <div class="row">
                                 <div class="col-md-9">
                                    <h4>Daftar Rekening</h4>
                                 </div>
                                 <div class="col-md-3 right ">
                                    <div class="pull-right">
                                            <a href="#" class="btn btn-sm btn-info ">
                                                                    <i class="ti-plus pdd-right-5"></i>
                                                                    <span>Tambah</span>
                                                </a>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="data-table-type" class="table table-lg table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Kode</th>
                                                        <th>Nama Rekening</th>
                                                        <th>Induk </th>
                                                        <th>Level</th>
                                                        <th>Status</th>
                                                       
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    </div>
<!-- Content Wrapper END -->

    <!-- Footer START -->
    <footer class="content-footer">
                                <div class="footer">
                                    <div class="copyright">
                                        <span>Copyright © 2022 <b class="text-dark">Keusya</b>. All rights reserved.</span>
                                        <span class="go-right">
                                                <a href="#" class="text-gray mrg-right-15">Term &amp; Conditions</a>
                                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                                            </span>
                                    </div>
                                </div>
                            </footer>
                            <!-- Footer END -->
                            </div>
                        <!-- Page Container END -->

            </div>


    </div>

    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- page plugins js -->
    <script src="{{ asset('bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>

    <script src="{{ asset('bower_components/d3/d3.min.js') }}"></script>
    <script src="{{ asset('bower_components/nvd3/build/nv.d3.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery.sparkline/index.js') }}"></script>


<!-- page plugins js -->
<script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>

<!-- page js -->
<script src="{{ asset('assets/js/table/data-table.js') }}"></script>

<script>
$(function () {
    
    // var table = $('#data-table-type').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: "{{ route('getType') }}",
    //     columns: [
    //         {data: '', name: ''},
    //         {data: 'Entitas_type_name', name: 'Entitas_type_name'},
    //         {data: 'entitas_deskripsi', name: 'entitas_deskripsi'},
           
    //         {data: 'action', name: 'action', orderable: false, searchable: false},
    //     ]
    // });
    
  });
</script>



@endsection