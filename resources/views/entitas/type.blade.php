@extends('layouts.app')

@section('content')

<div class="container-fluid">
                        <div class="page-title">
                            <h4>Data Table</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Bill Code</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task10" name="task10" type="checkbox">
                                                                <label for="task10"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Jordan Hurst</span>
                                                                    <span class="sub-title">ID 860</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33666</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>8 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$168.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task11" name="task11" type="checkbox">
                                                                <label for="task11"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Samuel Field</span>
                                                                    <span class="sub-title">ID 861</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Trade Pendding</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33667</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>8 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$168.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task12" name="task12" type="checkbox">
                                                                <label for="task12"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Michael Birch</span>
                                                                    <span class="sub-title">ID 863</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Trade Pendding</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33668</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>9 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$2488.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task13" name="task13" type="checkbox">
                                                                <label for="task13"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Jennifer Watkins</span>
                                                                    <span class="sub-title">ID 864</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status no-disturb"> </span>
                                                                <span class="pdd-left-20">Trade Rejected</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33669</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>10 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$432.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task14" name="task14" type="checkbox">
                                                                <label for="task14"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-8.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Hugh Moreno</span>
                                                                    <span class="sub-title">ID 868</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33681</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>11 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$867.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task15" name="task15" type="checkbox">
                                                                <label for="task15"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-9.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Daryl Ellis</span>
                                                                    <span class="sub-title">ID 869</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Trade Pedding</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33682</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>12 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$463.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task16" name="task16" type="checkbox">
                                                                <label for="task16"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-10.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Renee Edwards</span>
                                                                    <span class="sub-title">ID 870</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33683</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>12 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$433.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task17" name="task17" type="checkbox">
                                                                <label for="task17"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-11.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Kathy White</span>
                                                                    <span class="sub-title">ID 873</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33684</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>16 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$762.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task18" name="task18" type="checkbox">
                                                                <label for="task18"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-7.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Glen Spencer</span>
                                                                    <span class="sub-title">ID 877</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status no-disturb"> </span>
                                                                <span class="pdd-left-20">Trade Rejected</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33685</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>17 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$654.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task19" name="task19" type="checkbox">
                                                                <label for="task19"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-12.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Joe Fleming</span>
                                                                    <span class="sub-title">ID 878</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33686</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>18 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$853.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task20" name="task20" type="checkbox">
                                                                <label for="task20"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-2.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Herminia Frazier</span>
                                                                    <span class="sub-title">ID 890</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Trade Approved</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33687</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>18 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$987.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox mrg-left-20">
                                                                <input id="task21" name="task21" type="checkbox">
                                                                <label for="task21"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-3.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Hannah Johnson</span>
                                                                    <span class="sub-title">ID 891</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-15">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Trade Pendding</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33688</b></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span>18 May 2017</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">$765.00</b>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10 text-center">
                                                                <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle">
                                                                    <i class="ti-more-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



@endsection