<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>irodaxon-biznes</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- My styles -->
    <link rel="stylesheet" href="admin/plugins/bootstrap_my/my_style.css">
    <!-- Responsive data tables -->
    <link rel="stylesheet" href="admin/plugins/Responsive-2.2.3/css/responsive.dataTables.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
                        Admin
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                        style="left: 0px; right: inherit;">
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cogs"></i> Настройки </a>
                        </li>
                        <li>
                            <form id="logout-form" action="" method="POST" style="display: none;">
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
                <img src="images/shopping_cart_black_36dp.svg" alt="Unired Logo"
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
                            <a href="/category" class="nav-link active">
                                <i class="fas fa-border-all" style="font-size: 1.4rem"></i>
                                <p style="font-size: 22px; font-weight: 300;">
                                    Категории
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/product" class="nav-link ">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Управление категория</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Домой</a>
                                </li>
                                <li class="breadcrumb-item active">Управление категория</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Категория</h3>
                                <a href="" class="btn btn-success btn-sm float-right">
                                    <span class="fas fa-plus-circle"></span>
                                    Добавить </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Data table -->
                                <table id="dataTable"
                                    class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                                    role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название на русском</th>
                                            <th>Название на узбекском</th>
                                            <th class="w-25">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>🥩 Мясо</td>
                                            <td>🥩 Go&#039;sht</td>

                                            <td class="text-center">
                                                <form action="" method="post">

                                                    <div class="btn-group">

                                                        <a href="" type="button" class="btn btn-info btn-sm">
                                                            Редактировать</a>

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="button"
                                                            class="submitButton btn btn-danger btn-sm">
                                                            Удалить</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>🥓 Колбасные изделия</td>
                                            <td>🥓 Kolbasa mahsulotlari</td>

                                            <td class="text-center">
                                                <form action="" method="post">
                                                    <input type="hidden" name="_token"
                                                        value="Stgjqh0ZwVjNJMx5o2lOTDI5kmM70RJ20y76eS7N">
                                                    <div class="btn-group">

                                                        <a href="" type="button" class="btn btn-info btn-sm">
                                                            Редактировать</a>

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="button"
                                                            class="submitButton btn btn-danger btn-sm">
                                                            Удалить</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>🥛 Молоко</td>
                                            <td>🥛 Sut</td>

                                            <td class="text-center">
                                                <form action="" method="post">

                                                    <div class="btn-group">

                                                        <a href="" type="button" class="btn btn-info btn-sm">
                                                            Редактировать</a>

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="button"
                                                            class="submitButton btn btn-danger btn-sm">
                                                            Удалить</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>🍦 Молочные изделия</td>
                                            <td>🍦 Sut mahsulotlari</td>

                                            <td class="text-center">
                                                <form action="" method="post">
                                                    <input type="hidden" name="_token"
                                                        value="Stgjqh0ZwVjNJMx5o2lOTDI5kmM70RJ20y76eS7N">
                                                    <div class="btn-group">

                                                        <a href="" type="button" class="btn btn-info btn-sm">
                                                            Редактировать</a>

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="button"
                                                            class="submitButton btn btn-danger btn-sm">
                                                            Удалить</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>🍪 Cладости</td>
                                            <td>🍪 Shirinliklar</td>

                                            <td class="text-center">
                                                <form action="" method="post">


                                                    <a href="" type="button" class="btn btn-info btn-sm">
                                                        Редактировать</a>

                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="button" class="submitButton btn btn-danger btn-sm">
                                                        Удалить</button>
                            </div>
                            </form>
                            </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>🥤 Напитки</td>
                                <td>🥤 Ichimliklar</td>

                                <td class="text-center">
                                    <form action="" method="post">

                                        <div class="btn-group">

                                            <a href="" type="button" class="btn btn-info btn-sm">
                                                Редактировать</a>

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="button" class="submitButton btn btn-danger btn-sm">
                                                Удалить</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>💧 Моющие средства</td>
                                <td>💧 Yuvish vositalari</td>

                                <td class="text-center">
                                    <form action="" method="post">


                                        <a href="" type="button" class="btn btn-info btn-sm">
                                            Редактировать</a>

                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="button" class="submitButton btn btn-danger btn-sm">
                                            Удалить</button>
                        </div>
                        </form>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="">Skybox-Group </a>.</strong>
        All rights reserved.
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="admin/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- overlayScrollbars -->
    <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- DataTables -->
    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="admin/plugins/Responsive-2.2.3/js/dataTables.responsive.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js"></script>
    <!-- SweetAlert2 -->
    <script src="admin/plugins/sweetalert2-theme-bootstrap-4/sweet-alerts.min.js"></script>
    <!-- MyJs -->
    <script src="admin/plugins/bootstrap_my/myScripts.js" type="text/javascript"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

        //Clear form filters
        $("#reset_form").on('click', function() {
            $('form :input').val('');
            $("form :input[class*='like-operator']").val('like');
            $("div[id*='_pair']").hide();
        });

        function onSelectSetValue(input_name, input_val) {
            $("form :input[name=" + input_name + "]").val(input_val);
        }
    </script>
</body>
