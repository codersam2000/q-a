<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    
    <!--load progress bar-->
    <script src="frontend/assets/vendor/pace/pace.min.js"></script>
    <link href="frontend/assets/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="frontend/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="frontend/assets/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="frontend/assets/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="frontend/assets/vendor/magnific-popup/magnific-popup.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
   <link rel="stylesheet" href="frontend/assets/stylesheets/style.css">


</head>

<body>
    <div class="qa-header">
        <!-- HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <div class="row">
                <div class="col-xs-3 text-center">
                    <a href="index.php"><img class="site-logo" src="frontend/images/site-logo.webp" alt="site-logo"></a>
                </div>
                <div class="col-xs-7 col-md-8 des-nav">
                    <div class="search-bar">
                        <form action="">
                            <input type="text" name="search" class="search-box">
                            <button type="button" class="search-btn"><i class="fa fa-search"></i></button>
                        </form>  
                    </div>
                    <div class="mb-none">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">Acout</a></li>
                                <li><a href="contact-us.php">Contat Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-1 col-md-1"> 
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <i class="fa fa-user user"></i>
                        </div>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li><a href="frontend/profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                                <li><a href="#"><i class="fa fa-sign-out log-out" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="content-header des-none">
            <!-- mobile header -->
            <div class="row">
                <div class="col-xs-4 bl">Subject</div>
                <div class="col-xs-8">Filter <a href="frontend/answered.php">Answered</a> <a href="frontend/unanswered.php">Unanswered</a>
                </div>
            </div>
        </div>
    </div>
            