<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> معالجة @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-rtl.min.css') }}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom-style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Tajawal&display=swap')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}">


    <!--dossier -->

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    <script src=" {{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js')}}"></script>
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
                        @if(\Illuminate\Support\Facades\Auth::user()->image)
                            <img src="{{ asset('storage/traitants/'.\Illuminate\Support\Facades\Auth::user()->image) }}"  alt="Avatar" style="width:40px"/>
                        @else
                        <img src="{{ asset('dist/img/admin.png') }}">
                        @endif
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" >{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <?php
                        $segment=Request::segment(2);
                        //echo $segment;


                        ?>
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{route('pagetraitant')}}" class="nav-link  @if(!$segment )active @endif">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    حصة معالجة
                                </p>
                            </a>

                        </li>


                        <li class="nav-item">

                        <li class="nav-item has-treeview">
                            <a href="{{route('pagetraitant.seancetraitements.index')}}" class="nav-link  @if($segment=='seancetraitements' )active @endif">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                   قائمة الأطفال
                                </p>
                            </a>

                        </li>
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



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
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
