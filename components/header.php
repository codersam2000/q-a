<?php
    require_once 'dbconn.php';
    session_start();
?>
<!doctype html>
<html lang="en" class="fixed left-sidebar-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
   <link rel="stylesheet" href="assets/stylesheets/style.css">
</head>
<body>
    <div class="qa-header">
        <!-- HEADER -->
        <!-- ========================================================= -->
        <div class="pg-header">
            <div class="row">
                <div class="col-xs-3 text-center">
                    <a href="index.php"><img class="site-logo" src="images/site-logo.webp" alt="site-logo"></a>
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
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-1 col-md-1"> 
                <!--USER HEADERBOX -->
                <?php if (isset($_SESSION['user_login'])){ ?>
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <?php 
                            $email = $_SESSION['email'];
                            $result = mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
                            $user = mysqli_fetch_assoc($result);
                            ?>
                            <img src="uploads/<?= $user['photo'] ?>" alt="<?= $user['name'] ?>">
                        </div>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li><a href="profile.php?id=<?=base64_encode($user['id']) ?>"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li><a href="app/logout.php"><i class="fa fa-sign-out log-out" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="ligin">
                    <a href="login.php" class="btn btn-success">Login</a>
                </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="content-header des-none">
            <!-- mobile header -->
            <div class="row">
                <div class="col-xs-3 bl">
                    <div class="dropdown">
                      <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subjects
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                         $result = mysqli_query($conn,"SELECT * FROM `subjects`");
                         if (mysqli_num_rows($result)>0) {
                                while ($sub_row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <a class="dropdown-item" href="subjective.php?id=<?= base64_encode($sub_row['id']);?>"><?= $sub_row['name']; ?></a>
                                    <?php
                                }
                            }   
                        ?>
                      </div>
                    </div>
                </div>
                <div class="col-xs-9"><a href="#">Recent</a> <a href="answered.php">Answered</a> <a href="unanswered.php">Unanswered</a> 
                </div>
            </div>
        </div>
    </div>
            