<!-- Side Nav START -->


                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="{{ url('/dashboard')}}">
                            <div class="logo logo-dark" style="background-image: url('assets/images/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('assets/images/logo/logo-white.png')"></div>
                        </a>
                        <div class="mobile-toggle side-nav-toggle">
                            <a href="#">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item active">
                            <a class="mrg-top-30" href="{{ url('/dashboard')}}">
                                <span class="icon-holder">
										<i class="ti-home"></i>
									</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-package"></i>
									</span>
                                <span class="title">Master</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/type')}}">Type Entitas</a>
                                </li>
                                <li>
                                    <a href="{{ url('/entitas')}}">Entitas</a>
                                </li>
                                <li>
                                    <a href="{{ url('/user')}}">User</a>
                                </li>
                                <li>
                                    <a href="{{ url('/rekening')}}">Rekening</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-palette"></i>
									</span>
                                <span class="title">Transaksi</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li>
                                    <a href="cards.html">User</a>
                                </li> -->
                                <!-- <li>
                                    <a href="buttons.html">Rekening</a>
                                </li> -->
                                <li>
                                    <a href="{{ url('/saldo')}}">Saldo Awal</a>
                                </li>
                                <li>
                                    <a href="{{ url('/jurnalumum')}}">Jurnal Umum</a>
                                </li>
                                <li>
                                    <a href="{{ url('/bukubesar')}}">Buku Besar</a>
                                </li>
                                <li>
                                    <a href="{{ url('/jurnalpenyesuaian')}}">Jurnal Penyelesaian</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-file"></i>
									</span>
                                <span class="title">Laporan</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/laporan')}}">Buku Besar</a>
                                </li>
                                <li>
                                    <a href="{{ url('/laporan')}}">Neraca Saldo</a>
                                </li>
                                <li>
                                    <a href="{{ url('/laporan')}}">Neraca Lajur</a>
                                </li>
                                <li>
                                    <a href="{{ url('/laporan')}}">Laba Rugi</a>
                                </li>
                                <li>
                                    <a href="{{ url('/laporan')}}">Neraca</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-layout-media-overlay"></i>
									</span>
                                <span class="title">Grafik</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/laporan')}}">Jurnal</a>
                                </li>
                              
                            </ul>
                        </li>
               
                    </ul>
                </div>


<!-- Side Nav END -->