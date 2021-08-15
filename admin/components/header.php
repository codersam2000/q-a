<?php 
require_once '../dbconn.php';
session_start();
$page = explode('/', $_SERVER['PHP_SELF']);
$page = $page[count($page) - 1];
if(!isset($_SESSION['admin_id'])) {
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <!--load progress bar-->
    <script src="assets/vendor/pace/pace.min.js"></script>
    <link href="assets/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <!-- ========================================================= -->
    <!--dataTable-->
    <link rel="stylesheet" href="assets/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!-- dataTable Columns hiding responsive-->
    <link rel="stylesheet" href="assets/vendor/data-table/extensions/Responsive/css/responsive.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="assets/stylesheets/css/style.css">
    <style>
        .load{
            background-image: url(load.gif);
            background-position: center;
            background-size: cover;
            height: 50vh;
            width: 50vh;
            position: relative;
            top: 100px;
            margin: auto;
            z-index: 9999; 
        }
    </style>

</head>

<body onload="load()">
    <div class="load" id="load"></div>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <div class="leftside-header">
               <h3 style="color: white;">Psheet</h3>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <i class="icon fa fa-user color-light" style="font-size: 20px"></i>
                        </div>
                        <div class="user-info">
                            <span class="user-name"><?= $_SESSION['admin_name']; ?></span>
                            <span class="user-profile">Admin</span>
                        </div>
                    </div>
                </div>
                
                <!--Log out -->
                <div class="header-section">
                    <a href="app/logout.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <?php require_once 'left-sitebar.php'?>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">