<?php
     session_start();
     require_once "libraryback/protfolio.php";
     $data = GetAllPro();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Protfolio Content</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="./dashboardFront/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
          href="./dashboardFront/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="./dashboardFront/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./dashboardFront/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./dashboardFront/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="./dashboardFront/dist/img/AdminLTELogo.png" alt="Elzayat" height="60"
             width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="./logout.php" class="nav-link btn btn-danger text-white">Logout</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="./dashboardFront/dist/img/user1-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="./dashboardFront/dist/img/user3-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                   role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="index3.html" class="brand-link">
            <img src="./dashboardFront/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Abdallh_Elzayat</span>
        </a>

        <div class="sidebar">


            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="protfolio.php" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Protfolio</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!--                        <h1 class="m-0">Dashboard</h1>-->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Protfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- content  -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Protfolio Section</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body text-center">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-primary">User</th>
                                <th class="text-primary">Description</th>
                                <th class="text-primary">Img</th>
                                <th class="text-secondary">Update User</th>
                                <th class="text-danger">Delete User</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $project): ?>
                                <tr>
                                    <td>
                                         <?= $project['name']; ?>
                                    </td>
                                    <td>
                                         <?= $project['description']; ?>
                                    </td>
                                    <td><img style="width: 100px ; height: 100px;"
                                             src="./upload/<?= $project['img'] ?>" alt="img">
                                    </td>
                                    <td>
                                        <a href="updateProtfolio.php?proid=<?= $project['id']; ?>" class="btn
                                        btn-secondary">update</a>
                                    </td>
                                    <td>
                                        <a href="deletePro.php?proid=<?= $project['id']; ?>"
                                           class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2024 <a href="">AbdallhElzayat</a>.</strong>
        All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="./dashboardFront/plugins/jquery/jquery.min.js"></script>
<script src="./dashboardFront/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="./dashboardFront/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/chart.js/Chart.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/sparklines/sparkline.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/jqvmap/jquery.vmap.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/jquery-knob/jquery.knob.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/moment/moment.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/daterangepicker/daterangepicker.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!--  -->
<script src="./dashboardFront/dist/js/adminlte.js"></script>
<!--  -->
<script src="./dashboardFront/dist/js/demo.js"></script>
<!--  -->
<script src="./dashboardFront/dist/js/pages/dashboard.js"></script>
<!--  -->
<script src="./dashboardFront/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./dashboardFront/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./dashboardFront/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./dashboardFront/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./dashboardFront/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./dashboardFront/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- data tables  -->
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- data tables  -->
</body>

</html>