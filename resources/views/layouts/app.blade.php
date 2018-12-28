<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/datatable/datatables.min.css') }}">
                {{--Admin styles--}}
                <!-- Bootstrap extend-->
<link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

<!-- theme style -->
    <link rel="stylesheet" href="{{asset('css/master_style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dropify/dist/css/dropify.css') }}">
    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">
    <!-- jQuery 3 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- This is data table -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
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
@if(Auth::user())
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
            <div>
                {{--<select name="lang" onchange="admin.changeLang(this)" class="form-control" id="">--}}
                    {{--@foreach(\App\Languages::all() as $key)--}}
                        {{--<option @if(strtolower(Session::get('lang')) == strtolower($key['code'])) {{ 'selected' }} @endif value="{{ $key['code'] }}">{{ $key['name'] }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
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
                            <span class="d-block font-weight-600 font-size-16">{{ Auth::user()->name }}</span>
                            <span class="email-id">{{ Auth::user()->email }}</span>
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
                        <li><a href="/logout"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/admin/restaurants">
                        <i class="mdi mdi-food-fork-drink"></i>
                        <span>Restaurants</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/languages">
                        <i class="mdi mdi-flag-variant"></i>
                        <span>Languages</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/categories">
                        <i class="mdi mdi-file-document-box"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/menus">
                        <i class="mdi mdi-menu"></i>
                        <span>Menus</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/images">
                        <i class="mdi mdi-image"></i>
                        <span>Images</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/staff">
                        <i class="mdi mdi-account-card-details"></i>
                        <span>Staff</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/staff-types">
                        <i class="mdi mdi-account-card-details"></i>
                        <span>Staff Type</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/hols">
                        <i class="mdi mdi-account-card-details"></i>
                        <span>Hols</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/service-types">
                        <i class="mdi mdi-account-card-details"></i>
                        <span>Service Types</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/services">
                        <i class="mdi mdi-account-card-details"></i>
                        <span>Services</span>
                    </a>
                </li>


            </ul>
        </section>
    </aside>
    @endif
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">



    </div>
</div>


</body>

<!-- popper -->
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

<!-- date-range-picker -->
<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

<!-- Superieur Admin App -->
<script src="{{ asset('js/template.js') }}"></script>

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

    $('.datatable').dataTable();
</script>
</html>
