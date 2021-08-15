<div class="left-sidebar">
    <!-- left sidebar HEADER -->
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Navigation</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    <!-- NAVIGATION -->
    <!-- ========================================================= -->
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">
                    <!--HOME-->
                    <li class="<?= $page == 'dashboard.php' ? 'active-item' : '' ?>"><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                    <li class="<?= $page == 'manage-users.php' ? 'active-item' : '' ?>"><a href="manage-users.php"><i class="fa fa-users" aria-hidden="true"></i><span>Manage Users</span></a></li>
                    <li class="<?= $page == 'manage-questions.php' ? 'active-item' : '' ?>"><a href="manage-questions.php"><i class="fa fa-question" aria-hidden="true"></i><span>Manage Questions</span></a></li>
                    <li class="<?= $page == 'manage-answers.php' ? 'active-item' : '' ?>"><a href="manage-answers.php"><i class="fa fa-adn" aria-hidden="true"></i><span>Manage Answers</span></a></li>
                    <!--UI ELEMENTENTS-->
                    
                    <li class="has-child-item close-item <?= $page == 'manage-subjects.php' ? 'open-item' : ''?> <?= $page == 'add-subject.php' ? 'open-item' : ''?>">
                        <a><i class="fa fa-book" aria-hidden="true"></i><span>Subjects</span> </a>
                        <ul class="nav child-nav level-1">
                            <li class="<?= $page == 'add-subject.php' ? 'active-item' : ''?>"><a href="add-subject.php">Add Subject</a></li>
                            <li class="<?= $page == 'manage-subjects.php' ? 'active-item' : ''?>"><a href="manage-subjects.php">Manage Subjects</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>