<?php require_once 'components/header.php';?>
<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Add Subject</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="p-3">
			<h3>Update Subject</h3>
		</div>
	</div>
</div>


<?php
if (isset($_GET['id'])) {
	$id 	= base64_decode($_GET['id']);
	$sql 	= "SELECT * FROM `subjects` WHERE `id`='$id'";
	$result	= mysqli_query($conn,$sql);
	$row	= mysqli_fetch_assoc($result);
}

if (isset($_GET['error'])) {
	$error 	= $_GET['error'];
	?>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="alert-success p-3">
			<?= $error; ?>
		</div>
	</div>
</div>
<?php
}
?>	    
<div class="row">
	<div class="col-md-6 col-sm-12">
		<form class="form" method="post" action="app/update-subject.php?id=<?= base64_encode($id); ?>">
			<input class="form-control" type="text" name="name" value="<?= $row['name']?>" placeholder="Subject's name" required>
			<button class="s-btn" name="update" type="submit">Update</button>
		</form>
	</div>
</div>
                     
<?php require_once 'components/footer.php';?>  