<?php require_once 'frontend/components/header.php'; ?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
    <div class="content">
        <div class="content-body">
            <div class="row">
               <div class="col-sm-3 mb-none ">
                <?php require_once 'frontend/components/left-sitebar.php';?>
               </div>
                <div class="col-sm-6">
                    <div class="posts">
                        <div class="filter mb-none">
                            <p>Filter <span class="btn"><a href="frontend/answered.php">Answered</a></span> <span class="btn"><a href="frontend/unanswered.php">Unanswered</a></span></p>
                        </div>
                        <div class="post mb-3">
                            <div class="row text-center">
                                <div class="col-xs-2"><i class="fa fa-user"></i></div>
                                <div class="col-xs-3">
                                    <p class="mb-0">Sam Aun</p>
                                    <span class="p-time">6 min ago</span>
                                </div>
                                <div class="col-xs-4">JAVA</div>
                                <div class="col-xs-3">points: 8</div>
                            </div>
                             <h1 class="ques">What is php?</h1>
                             <div class="row">
                                 <div class="col-xs-8"></div>
                                 <div class="col-xs-4"><a href="frontend/single.php" class="btn btn-primary">Answer</a></div>
                             </div>
                        </div>
                        <div class="post mb-3">
                            <div class="row">
                                <div class="col-xs-2"><i class="fa fa-user"></i></div>
                                <div class="col-xs-3">
                                    <p class="mb-0">Sam Aun</p>
                                    <span class="p-time">6 min ago</span>
                                </div>
                                <div class="col-xs-4">JAVA</div>
                                <div class="col-xs-3">points: 8</div>
                            </div>
                             <h1 class="ques">What is programming language?</h1>
                             <div class="row">
                                 <div class="col-xs-8"></div>
                                 <div class="col-xs-4"><a href="frontend/single.php" class="btn btn-primary">Answer</a></div>
                             </div>
                        </div>
                        <div class="post mb-3">
                            <div class="row">
                                <div class="col-xs-2"><i class="fa fa-user"></i></div>
                                <div class="col-xs-3">
                                    <p class="mb-0">Sam Aun</p>
                                    <span class="p-time">6 min ago</span>
                                </div>
                                <div class="col-xs-4">JAVA</div>
                                <div class="col-xs-3">points: 8</div>
                            </div>
                            <h1 class="ques">How can I build a mobile app?</h1>
                            <div class="row">
                                <div class="col-xs-8"></div>
                                <div class="col-xs-4"><a href="frontend/single.php" class="btn btn-primary">Answer</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-none">
                    <div class="left-sitebar">
                        <?php require_once 'frontend/components/right-sitebar.php';?>
                    </div>
                </div> 
            </div>
        </div>                  
    </div>
<?php require_once 'frontend/components/footer.php';?>  