<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>موقع التوحد @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-rtl.min.css') }}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom-style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">

    <!-- CLICKABLE -->
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}">
    <!-- CLICKABLE -->
    <style>
        img {
            border-radius: 50%;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
@include('partials._nav')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/admin.png')}}" alt="Avatar" style="width:30px">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->

                        <?php
                        $segment=Request::segment(2);
                        echo $segment;

                        ?>

                        <li class="nav-item has-treeview menu-open">
                            <a href="({{route('home')}}||{{route('addspecialiste')}}|| {{route('addtraitant')}}) "  data-toggle="dropdown" class="nav-link @if(!$segment )active @else @if($segment=='interfaceaddspecialiste' )active @else @if($segment=='interfaceaddtraitant' )active @endif @endif  @endif ">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    التسجيلات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('addspecialiste')}}" class="nav-link @if($segment=='interfaceaddspecialiste' )active @endif">
                                        <i class="fa fa-user-md nav-icon"></i>
                                        <p>المشخصين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('addtraitant')}}" class="nav-link @if($segment=='interfaceaddtraitant' )active @endif">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>المعالجين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}"  class="nav-link @if(!$segment )active @endif">
                                        <i class="fa fa-child nav-icon"></i>
                                        <p>الأطفال</p>
                                    </a>
                                </li>
                            </ul>

                        </li >

                        <li class="nav-item has-treeview menu-open">
                            <a href=" "  class="nav-link @if($segment=='specialistes' )active @else @if($segment=='traitants' )active @else @if($segment=='enfants' )active @endif @endif  @endif ">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    قائمة المسجلين
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview  ">
                                <li class="nav-item">
                                    <a href="{{route('admin.specialistes.index')}}"  class="nav-link
                                       @if($segment=='specialistes')
                                        active @endif">
                                        <i class="fa fa-user-md nav-icon"></i>
                                        <p>المشخصين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.traitants.index')}}" class="nav-link
                                       @if($segment=='traitants')
                                        active
@endif
                                        ">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>المعالجين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.enfants.index')}}" class="nav-link @if($segment=='enfants')
                                        active
@endif">
                                        <i class="fa fa-child nav-icon"></i>
                                        <p>الأطفال</p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link @if($segment=='chart' )active @endif">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    احصائيات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="{{route('admin.chart.index')}}" class="nav-link @if($segment=='chart') active @endif">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سنة 2020</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سنة 2019</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سنة 2018</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="#" name="mawaide" class="nav-link  @if($segment=='#') active @endif" >
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    المواعيد
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">


                            <a href="{{ route('logout') }}" id="lien" class="nav-link @if($segment=='logout') active @endif" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p>
                                    تسجيل الخروج
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials._messages')
        @yield('content')
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
        @include('partials._footer')
    </div>
</div>

</body>
</html>



