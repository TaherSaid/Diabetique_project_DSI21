<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <link href="admin_dashboard/css/cssStyle.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template-->
    <link href="admin_dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="admin_dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin_dashboard/css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">medico Dashboard</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar profil -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>




        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

             <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                </div>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboardAdmin" >
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/home_modification" >
                    <i class="far fa-plus-square"></i>
                    <span>Modifier home </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/allFeedback">
                    <i class="fas fa-user-plus"></i>
                    <span>Feedback</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/updateNowMore" >
                    <i class="fas fa-shipping-fast"></i>
                    <span>modifier now more</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/updateallQcm" >
                    <i class="fas fa-shipping-fast"></i>
                    <span>modifier les question</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/allqcm" >
                    <i class="fas fa-shipping-fast"></i>
                    <span>all qcm</span>
                </a>
            </li>

        </ul>

    <div id="content-wrapper">
        <div class="container-fluid">
        @yield('section')
        </div>
    </div>
</div>
    <script src="admin_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="admin_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="admin_dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="admin_dashboard/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin_dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_dashboard/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="admin_dashboard/js/demo/datatables-demo.js"></script>
    <script src="admin_dashboard/js/demo/chart-area-demo.js"></script>
</body>
</html>
