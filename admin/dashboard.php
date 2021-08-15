<?php require_once 'components/header.php';


?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-dashboard" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-lg-9">
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--WIDGETBOX-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-question color-darker-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">Total Question</h4>
                                                    <h1 class="title color-w">50</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-adn color-lighter-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-2">Total Answer</h4>
                                                    <h1 class="title color-light">20</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-user color-darker-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">Total Users</h4>
                                                    <h1 class="title color-w">50</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-envelope color-lighter-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-2">Total </h4>
                                                    <h1 class="title color-light">20</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--AREA CHART-->
                            <div class="col-sm-12 col-md-8">
                                <div class="panel">
                                    <div class="panel-content">
                                        <h5><b>Psheet</b></h5>
                                        <p class="section-text">Website <span class="highlight">Analytics</span></p>
                                        <canvas id="area-chart" width="400" height="160"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                      <?php require_once 'components/footer.php';?>  