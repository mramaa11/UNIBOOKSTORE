<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('template'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('template'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('template'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('template'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- ChartJS -->
    <link rel="stylesheet" href="<?= base_url('template'); ?>/plugins/chart.js/Chart.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('template'); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('home'); ?>" class="nav-link <?= $menu == 'home' ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    HOME
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin'); ?>" class="nav-link <?= $menu == 'admin' ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-cash-register">
                                </i>
                                <p>
                                    ADMIN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengadaan'); ?>" class="nav-link <?= $menu == 'pengadaan' ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-cash-register">
                                </i>
                                <p>
                                    PENGADAAN
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $judul; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"><?= $judul; ?></a></li>
                                <li class="breadcrumb-item active"><?= $subjudul; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- isi Konten -->
                        <?php
                        if ($page) {
                            echo view($page);
                        }
                        ?>

                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Toko Buku
            </div>
            <!-- Default to the left -->
            <strong>Muhammad Tegar Ramadhan &copy; 2023 </strong> UNIBOOKSTORE UJIKOM
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('template'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('template'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('template'); ?>/dist/js/adminlte.min.js"></script>
    <!-- Autonumeric -->
    <script src="<?= base_url('template'); ?>/autoNumeric/src/AutoNumeric.js"></script>
    <!-- ChartJS
    <script src="<?= base_url('template'); ?>/plugins/chart.js/Chart.min.js"></script> -->
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('template'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('template'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": true,
            "ordering": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>