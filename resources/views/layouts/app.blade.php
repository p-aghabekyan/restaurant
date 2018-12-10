<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--Admin styles--}}
<!-- Bootstrap extend-->
{{--<link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">--}}

<!-- theme style -->
    <link rel="stylesheet" href="{{asset('css/master_style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dropify/dist/css/dropify.css') }}">
    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{URL::asset('js/jquery.slim.min.js')}}"></script>
    <style>
        .table-bordered td, th{
            text-align: center;
        }
        .table-bordered{
            margin-top: 10px;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="search-box">
                        <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                        <form class="app-search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
                        </a>
                        <ul class="dropdown-menu animated flipInY">
                            <!-- User image -->
                            <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)"
                                data-overlay="3">
                                <div class="flexbox align-self-center">
                                    <img src="../images/avatar/7.jpg" class="float-left rounded-circle"
                                         alt="User Image">
                                    <h4 class="user-name align-self-center">
                                        <span>Samuel Brus</span>
                                        <small>samuel@gmail.com</small>
                                    </h4>
                                </div>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My
                                    Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My
                                    Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-10"><a href="javascript:void(0)"
                                                     class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                            </li>
                        </ul>
                    </li>

                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20"
                                     style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">5 New</h3>
                                            <span class="font-light">Messages</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-email-alert"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../images/user2-160x160.jpg" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Lorem Ipsum
                                                    <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                </h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../images/user3-128x128.jpg" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Nullam tempor
                                                    <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                </h4>
                                                <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../images/user4-128x128.jpg" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Proin venenatis
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../images/user3-128x128.jpg" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Praesent suscipit
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../images/user4-128x128.jpg" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Donec tempor
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" class="text-white bg-info">See all e-Mails</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20"
                                     style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">7 New</h3>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-message-alert"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit
                                            blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien
                                            elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                            commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum
                                            fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                            interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks-->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bulletin-board"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20"
                                     style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">6 New</h3>
                                            <span class="font-light">Tasks</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-bulletin-board"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                                <small class="pull-right">30%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 30%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Vestibulum nec ligula
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-info" style="width: 20%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Donec id leo ut ipsum
                                                <small class="pull-right">70%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-success" style="width: 70%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Praesent vitae tellus
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-warning" style="width: 40%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nam varius sapien
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-primary" style="width: 80%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nunc fringilla
                                                <small class="pull-right">90%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-info" style="width: 90%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="index.html">
                        <span>
                            <span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
                            <span class="email-id">samuel@gmail.com</span>
                        </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                        <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                    </ul>
                </li>
                <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>PERSONAL</li>

                {{--<li class="treeview active">--}}
                    {{--<a href="#">--}}
                        {{--<i class="mdi mdi-view-dashboard"></i>--}}
                        {{--<span>Dashboard</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-right pull-right"></i>--}}
                        {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li class="active"><a href="index.html"><i class="mdi mdi-toggle-switch-off"></i>Main Dashboard</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="index-2.html"><i class="mdi mdi-toggle-switch-off"></i>e-Commerce Dashboard</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="index-3.html"><i class="mdi mdi-toggle-switch-off"></i>Cryptocurrency</a></li>--}}
                        {{--<li><a href="index-4.html"><i class="mdi mdi-toggle-switch-off"></i>Analytics</a></li>--}}
                        {{--<li><a href="index-5.html"><i class="mdi mdi-toggle-switch-off"></i>Hospital</a></li>--}}
                        {{--<li><a href="index-6.html"><i class="mdi mdi-toggle-switch-off"></i>Support System</a></li>--}}
                        {{--<li><a href="index-7.html"><i class="mdi mdi-toggle-switch-off"></i>Sales Report</a></li>--}}
                        {{--<li><a href="index-8.html"><i class="mdi mdi-toggle-switch-off"></i>Music</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li>
                    <a href="/admin/restaurants">
                        <i class="mdi mdi-view-food"></i>
                        <span>Restaurants</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/languages">
                        <i class="mdi mdi-view-food"></i>
                        <span>Languages</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/categories">
                        <i class="mdi mdi-view-food"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/menus">
                        <i class="mdi mdi-view-food"></i>
                        <span>Menus</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/images">
                        <i class="mdi mdi-view-food"></i>
                        <span>Images</span>
                    </a>
                </li>

            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            @yield('content')
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are You Sure You Want to Delete Current Record ?</h4>
            </div>
            <div class="modal-footer">
                <form method="post" action="" style="display: inline-block">
                    @method("DELETE")
                    {{ csrf_field() }}
                    <button class="btn btn-danger" id="modal-btn-si">Yes</button>
                </form>
                <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-default" id="modal-btn-no">No</button>
            </div>
        </div>
    </div>
</div>

</body>
<!-- jQuery 3 -->
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

<!-- date-range-picker -->
<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('assets/vendor_components/chart.js-master/Chart.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ asset('assets/vendor_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/morris.js/morris.min.js') }}"></script>

<!-- This is data table -->
<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

<!-- Superieur Admin App -->
<script src="{{ asset('js/template.js') }}"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/dashboard.js') }}"></script>

<!-- Superieur Admin for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>

                {{--Dropify--}}
<script src="{{ asset('assets/dropify/dist/js/dropify.js') }}"></script>
<script>
    function getAnswer(){
        $("#mi-modal").modal('show');



        return false;
    }

    $("#modal-btn-si").on("click", function(){
        return true;
        $("#mi-modal").modal('hide');
    });

    $('.dropify').dropify();

</script>
</html>
