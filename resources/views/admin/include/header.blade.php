<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halal market</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- My styles -->
    <link rel="stylesheet" href="/admin/plugins/bootstrap_my/my_style.css">
    <!-- Responsive data tables -->
    <link rel="stylesheet" href="/admin/plugins/Responsive-2.2.3/css/responsive.dataTables.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="icon" href="/consImages/logoU.png ">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper" style="display: block">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-user"></i>
                        {{ \Auth::user()->name }}
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                        style="left: 0px; right: inherit;">
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cogs"></i> Настройки </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="_token" value="Stgjqh0ZwVjNJMx5o2lOTDI5kmM70RJ20y76eS7N">
                            </form>
                            <a href="#" class="nav-link" role="button"
                                onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Выйти </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sl-nav" style="width: 40px">











            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="/images/shopping_cart_black_36dp.svg" alt="Unired Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Halal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">


                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-users-cog"></i>
                                <p>
                                    Управление пользователями </p>
                            </a>
                            <ul class="nav nav-treeview pl-3" style="display: none;">

                                <li class="nav-item  ">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-user-friends"></i>
                                        <p> Пользователи</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link @yield('categories-active')">
                                <i class="fas fa-border-all" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;">
                                    Категории
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link @yield('products-active')">
                                <i class="fas fa-th" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;">Продукты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/order" class="nav-link ">
                                <i class="fas fa-shopping-cart" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;">Заказы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/botusers" class="nav-link ">
                                <i class="fas fa-users" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;">Пользователи</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/complaint" class="nav-link ">
                                <i class="fas fa-file-alt" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;"> Жалоба</p>
                            </a>
                        </li>

                    </ul>




                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
