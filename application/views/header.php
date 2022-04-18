<?php /* include("config.php"); 
if(!@$_SESSION['id']){
	header("Location: index.php");
}	
 $_SERVER['PHP_SELF'];
$filePath=explode("/",$_SERVER['PHP_SELF']);
 $currentFile=$filePath[2];
 

 $id= $_SESSION['id'];
$sql ="SELECT * FROM users WHERE id='$id' ";
$r = mysqli_query($conn,$sql);
$sessionData = mysqli_fetch_assoc($r); */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url();  ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap  -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url();  ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote  -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/assets/plugins/toastr/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo base_url();  ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url();  ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php //echo base_url();  ?>/assets/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
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
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-user-cog"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="dropdown-divider"></div>
                    <a href="profile.php" class="dropdown-item">
                        <i class="fas fa-cog mr-2"></i> Profile Setting

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> Change Password

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url("User/logout"); ?>" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> Logout
                        <span class="float-right text-muted text-sm"></span>
                    </a>

                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo base_url();  ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!--<img src="<?php echo base_url();  ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
                        <img src="<?php echo base_url();  ?>assets/images/<?php echo @$this->session->userdata('UserImg');?>"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo @$this->session->userdata('Name'); ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
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


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <?php 	if($this->session->userdata('UserType')==2){  ?>
                        <li class="nav-item <?php //if($currentFile == 'dashboard.php') echo "menu-open"; ?>">
                            <a href="<?php echo base_url("User/dashboard");?>"
                                class="nav-link active<?php // if($currentFile == 'dashboard.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php //if($currentFile == 'dashboard.php') echo "menu-open"; ?>">
                            <a href="#"
                                class="nav-link active<?php // if($currentFile == 'dashboard.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                   MY ORDERS ALL
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/selectproduct");?>"
                                        class="nav-link <?php //if($currentFile == 'dashboard.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>MY ADD PRODUCTS</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/myproduct");?>"
                                        class="nav-link <?php //if($currentFile == 'dashboard.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My ORDERS</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/MyHistory");?>"
                                        class="nav-link <?php //if($currentFile == 'dashboard.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My HISTORYS</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php //if($currentFile == 'dashboard.php') echo "menu-open"; ?>">
                            <a href="#"
                                class="nav-link active<?php // if($currentFile == 'dashboard.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Availible category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/categoryList");?>"
                                        class="nav-link <?php //if($currentFile == 'dashboard.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item <?php //if($currentFile == 'dashboard.php') echo "menu-open"; ?>">
                            <a href="<?php echo base_url("User/showallProduct");?>"
                                class="nav-link active<?php // if($currentFile == 'dashboard.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    ALL PRODUCTS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>


                        <?php } ?>


                        <?php 	if($this->session->userdata('UserType')==1){  ?>

                        <li class="nav-item <?php //if($currentFile == 'dashboard.php') echo "menu-open"; ?>">
                            <a href="<?php echo base_url("User/dashboard");?>"
                                class="nav-link <?php // if($currentFile == 'dashboard.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li
                            class="nav-item <?php //if($currentFile == 'users.php' || $currentFile== "addUser.php") echo "menu-open"; ?>">
                            <a href="#" class="nav-link <?php //if($currentFile == 'users.php') echo "active"; ?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php //if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "1") {?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/showUser");?>"
                                        class="nav-link <?php //if($currentFile == 'users.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User List</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="addUser.php"
                                        class="nav-link <?php //if($currentFile == 'addUser.php') echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/categoryList");?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Category List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url("User/productList");?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </nav>
            </div>
        </aside>