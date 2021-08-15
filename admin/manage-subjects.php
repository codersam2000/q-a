<?php require_once 'components/header.php'; 

?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">All Subjects</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Columns hiding</b> responsive</h4>
                    <div class="panel">
                        <div class="panel-content">
                            <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SUBJECT</th>
                                    <th>SLUG</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                               <?php
                               $query   = "SELECT `id`, `name`, `slug`, `date_time` FROM `subjects`";
                               $result  = mysqli_query($conn,$query);
                               while ($row = mysqli_fetch_assoc($result)) {
                               ?>
                                <tr>
                                    <td><?= $row['id'];?></td>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['slug'];?></td>
                                    <td>
                                        <a href="update-subject.php?id=<?= base64_encode($row['id']);?>"><i class="fa fa-pencil"></i></a>
                                        <a href="app/delete-subject.php?id=<?= base64_encode($row['id']);?>"><i class="fa fa-trash ml-2"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                      
<?php require_once 'components/footer.php';?>  