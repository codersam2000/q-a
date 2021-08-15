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
			<h3>Add new subject</h3>
		</div>
	</div>
</div>
<?php
if(isset($_POST['add'])){
	$sub_name	= $_POST['name'];
	$slug		= strtolower(str_replace(' ', '-', $sub_name));

	if (!empty($sub_name)) {
	$query	= "INSERT INTO `subjects`( `name`, `slug`) VALUES ('$sub_name','$slug')";
	$result	= mysqli_query($conn,$query);
if ($result) {
	?>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="alert-success p-3">
			Subject added successfully:)
			<script>
				window.location = "<?= $_SERVER['PHP_SELF']?>"
			</script>
		</div>
	</div>
</div>
	<?php
	}else{
		?>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="alert-danger p-3">
		Something went wrong!
		</div>
	</div>
</div>
	<?php
	}
  }
}
?>      
<div class="row">
	<div class="col-md-6 col-sm-12">
		<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input class="form-control" type="text" name="name" placeholder="Subject's name" required>
			<button class="s-btn" name="add" type="submit">Add Subject</button>
		</form>
	</div>
</div>
                     
<?php require_once 'components/footer.php';?>  