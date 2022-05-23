<!-- Side Nav START -->

    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
             <li class="nav-item start {{ (request()->segment(1) == 'dashboard') ? 'active open' : '' }}">
                 <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="icon-home"></i>
                     <span class="title">Dashboard</span>
                     <span class="selected"></span>
                     <span class="arrow open"></span>
                 </a>
                 <ul class="sub-menu">
                     <li class="nav-item start{{ (request()->segment(1) == 'dashboard') ? 'active open' : '' }}"> <!-- active open -->
                         <a href="{{ url('/dashboard')}}" class="nav-link ">
                             <i class="icon-bar-chart"></i>
                             <span class="title">Dashboard</span>
                             <span class="selected"></span>
                         </a>
                     </li>
                    
                 </ul>
             </li>
             <!-- <li class="heading">
                 <h3 class="uppercase">Data Referensi</h3>
             </li> -->
             <li class="nav-item {{ (request()->segment(1) == 'master') ? 'active open' : '' }}">
                 <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="icon-diamond"></i>
                     <span class="title">Master Data</span>
                     <span class="arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li class="nav-item  {{ (request()->segment(2) == 'type') ? 'active open' : '' }}">
                         <a href="{{ url('/master/type')}}" class="nav-link ">
                             <span class="title">Type Entitas</span>
                         </a>
                     </li>
                     <li class="nav-item  {{ (request()->segment(2) == 'entitas') ? 'active open' : '' }}">
                         <a href="{{ url('/master/entitas')}}" class="nav-link ">
                             <span class="title">Entitas</span>
                         </a>
                     </li>
                     <!-- <li class="nav-item {{ (request()->segment(2) == 'komponen') ? 'active open' : '' }}">
                         <a href="{{ url('/master/komponen')}}" class="nav-link ">
                             <span class="title">Komponen</span>
                         </a>
                     </li> -->
                     <li class="nav-item {{ (request()->segment(2) == 'rekening') ? 'active open' : '' }}">
                         <a href="{{ url('/master/rekening')}}" class="nav-link ">
                             <span class="title">Rekening</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'role') ? 'active open' : '' }}">
                         <a href="{{ url('/master/role')}}" class="nav-link ">
                             <span class="title">Hak Akses Pengguna</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'user') ? 'active open' : '' }}">
                         <a href="{{ url('/master/user')}}" class="nav-link ">
                             <span class="title">Pengguna Aplikasi</span>
                         </a>
                     </li>
                   
                 </ul>
             </li>
             <li class="nav-item {{ (request()->segment(1) == 'transaksi') ? 'active open' : '' }}">
                 <a href="{{ url('/jurnal')}}" class="nav-link">
                     <i class="icon-puzzle"></i>
                     <span class="title">Jurnal</span>
                     <!-- <span class="arrow"></span> -->
                 </a>
                 <!-- <ul class="sub-menu">
                     <li class="nav-item {{ (request()->segment(2) == 'aset') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Aset</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'liabilitas') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Liabilitas</span>
                             <span class="badge badge-danger">2</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'danasirkah') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Dana Sirkah Temporer</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'pendapatan') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Pendapatan Dan Beban</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'kontribusi') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Kontribusi Pemilik</span>
                         </a>
                     </li>
                     <li class="nav-item  {{ (request()->segment(2) == 'aruskas') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Arus kas</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'zakat') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Dana Zakat</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'kebajikan') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Dana Kebajikan</span>
                         </a>
                     </li>
                
                 </ul> -->
             </li>
             <li class="nav-item{{ (request()->segment(1) == 'laporan') ? 'active open' : '' }}">
                 <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="icon-settings"></i>
                     <span class="title">Laporan</span>
                     <span class="arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li class="nav-item {{ (request()->segment(2) == 'keuangan') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">laporan
                                 <br>Keuangan</span>
                         </a>
                     </li>
                     <li class="nav-item {{ (request()->segment(2) == 'laba') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Laba Rugi</span>
                         </a>
                     </li>
                 
                     <li class="nav-item  {{ (request()->segment(2) == 'perubahan') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Perubahan Ekuitas</span>
                         </a>
                     </li>
                     <li class="nav-item  {{ (request()->segment(2) == 'arus-kas') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Arus kas</span>
                         </a>
                     </li>
                      <li class="nav-item {{ (request()->segment(2) == 'dana-zakat') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Dana Zakat</span>
                         </a>
                     </li>
                   
                     <li class="nav-item {{ (request()->segment(2) == 'dana-kebajikan') ? 'active open' : '' }} }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Dana Kebajikan</span>
                         </a>
                     </li>
                      <li class="nav-item {{ (request()->segment(2) == 'catatan-keuangan') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Catatan Keuangan</span>
                         </a>
                     </li>
                     
                      <li class="nav-item {{ (request()->segment(2) == 'komparatif') ? 'active open' : '' }}">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Laporan
                                 <br>Informasi Koorporatif periode sebelumnya</span>
                         </a>
                     </li>
                     
                      <li class="nav-item ">
                         <a href="{{ url('/')}}" class="nav-link ">
                             <span class="title">Logout</span>
                         </a>
                     </li>
                  
              
                 </ul>
             </li>
  
         </ul>


               


<!-- Side Nav END -->