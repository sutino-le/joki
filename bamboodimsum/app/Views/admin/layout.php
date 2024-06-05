<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Bamboo Dimsum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/dist/css/adminlte.min.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" title="Logout" href="<?= base_url() ?>logout" role="button">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>main" class="brand-link">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Bamboo Dimsum</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>assets_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= session()->usernama ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url() ?>main" class="nav-link <?= ($menu == "dashboard") ? "active" : ""  ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url() ?>level" class="nav-link <?= ($menu == "level") ? "active" : ""  ?>">
                                <i class="nav-icon fas fa-bezier-curve"></i>
                                <p>
                                    Level
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url() ?>user" class="nav-link <?= ($menu == "user") ? "active" : ""  ?> text-white">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url() ?>menumakanan" class="nav-link <?= ($menu == "menumakanan") ? "active" : ""  ?> text-success">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Menu Makanan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url() ?>pesanan" class="nav-link <?= ($menu == "pesanan") ? "active" : ""  ?> text-warning">
                                <i class="nav-icon fas fa-envelope-square"></i>
                                <p>
                                    Pesanan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url() ?>pengantaran" class="nav-link <?= ($menu == "pengantaran") ? "active" : ""  ?> text-danger">
                                <i class="nav-icon fas fa-dolly-flatbed"></i>
                                <p>
                                    Pengantaran
                                </p>
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


            <?= $this->renderSection('isi'); ?>








        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>" target="_blank"> Bamboo
                    Dimsum</a>.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets_admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets_admin/dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>