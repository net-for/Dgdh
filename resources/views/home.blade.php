@extends('layouts.master')
@section('content')

    <!-- Left Sidebar Start -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="{{ route('home') }}" class="waves-effect">
                            <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right"></span> <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-to-do"></i><span> Pages Maintenance<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="user/management">User Maintenance</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms</span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('form/information/new') }}">Information Input</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect  mm-active"><i class="dripicons-list"></i><span> Reporting <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li class="mm-active">
                                <a href="{{ route('form/information/show') }}">Report Form Information</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar -left -->
    </div>

    <!-- Left Sidebar End -->
    <div class="content-page">
        {{-- message --}}
        {!! Toastr::message() !!}
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Welcome to Soeng Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->

                <!-- start top-Contant -->
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">Total Expenses</h5>
                                        <h4 class="text-info pt-1 mb-0">$67,670</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">Total Invoice</h5>
                                        <h4 class="text-warning pt-1 mb-0">$7,360</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">Amount Due</h5>
                                        <h4 class="text-primary pt-1 mb-0">$5000</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">Unpaid Invoices</h5>
                                        <h4 class="text-danger pt-1 mb-0">$2,480</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end top-Contant -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Sales Statistics</h4>
                                <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                                    <li class="list-inline-item">
                                        <h5>3654</h5>
                                        <p class="text-muted">Marketplace</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>954</h5>
                                        <p class="text-muted">Last week</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>8462</h5>
                                        <p class="text-muted">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-bar-stacked" class="text-center" style="height: 350px;"></div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Trends Monthly</h4>
                                <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                                    <li class="list-inline-item">
                                        <h5>3654</h5>
                                        <p class="text-muted">Marketplace</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>954</h5>
                                        <p class="text-muted">Last week</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>8462</h5>
                                        <p class="text-muted">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-donut-example" class="morris-charts morris-chart-height text-center" style="height: 350px;"></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4">
                        <div class="card messages">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                                <nav>
                                    <div class="nav nav-tabs messages-tabs tab-wid nav-justified" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                            <h5 class="mt-0 date">14</h5>
                                            <p class="text-muted mb-0">April</p>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                            <h5 class="mt-0 date">16</h5>
                                            <p class="text-muted mb-0">April</p>
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                        <div class="p-2 mt-2">
                                            <ul class="list-unstyled latest-message-list mb-0">
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-2.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">Just Now</p>
                                                                <h6 class="mt-0">Mary Frye</h6>
                                                                <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-3.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">11:42am</p>
                                                                <h6 class="mt-0">David Smith</h6>
                                                                <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-4.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">01:56pm</p>
                                                                <h6 class="mt-0">Troy Long</h6>
                                                                <p class="text-muted mb-0">This theme is awesome!</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                        <div class="p-2 mt-2">
                                            <ul class="list-unstyled latest-message-list mb-0">
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-5.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">09:42am</p>
                                                                <h6 class="mt-0">John Carle</h6>
                                                                <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-6.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">11:07am</p>
                                                                <h6 class="mt-0">Jerry Carter</h6>
                                                                <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="message-list-item">
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-7.jpg" alt="">
                                                            <div class="media-body">
                                                                <p class="float-right font-12 text-muted">01:17pm</p>
                                                                <h6 class="mt-0">Shane Hill</h6>
                                                                <p class="text-muted mb-0">This theme is awesome!</p>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab-content -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                                <ol class="activity-feed mb-0 pl-3">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <p class="text-muted mb-1">Now</p>
                                            <p class="font-15 mt-0 mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <p class="text-muted mb-1">Yesterday</p>
                                        <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                                    </li>
                                    <li class="feed-item">
                                        <p class="text-muted mb-1">2:30PM</p>
                                        <p class="font-15 mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <b class="text-primary"> Developer Moreno</b></p>
                                    </li>
                                    <li class="feed-item pb-1">
                                        <p class="text-muted mb-1">12:48 PM</p>
                                        <p class="font-15 mt-0 mb-2">Zack Wetass, Chris combined with Wallace They Commented <b class="text-primary">UX Murphy</b></p>
                                    </li>

                                </ol>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="social-box text-center">
                                    <i class="mdi mdi-facebook text-primary h1"></i>
                                    <h5 class="font-19 mt-3"><span class="text-primary">8.625K</span> New Peoples</h5>
                                    <p class="text-muted">Your main list is growing</p>

                                    <div class="mt-2 pt-1 mb-2">
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Follwing you</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="social-box text-center">
                                    <i class="mdi mdi-twitter text-info h1"></i>
                                    <h5 class="font-19 mt-3"><span class="text-info">125.3K</span> New Peoples</h5>
                                    <p class="text-muted">Your main list is growing</p>

                                    <div class="mt-2 pt-1 mb-2">
                                        <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Follwing you</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    </div>
    <!-- content --> 
    <footer class="footer">
        © 2021 Soeng <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by SoengSouy</span>.
    </footer>
@endsection
