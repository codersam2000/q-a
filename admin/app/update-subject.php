<?php
require_once '../../dbconn.php';

$id = base64_decode($_GET['id']);
if(isset($_POST['update'])){
	$sub_name	= $_POST['name'];
	$slug		= strtolower(str_replace(' ', '-', $sub_name));

	$sql = "UPDATE `subjects` SET `name`='$sub_name',`slug`='$slug' WHERE `id`='$id'";
	$update = mysqli_query($conn,$sql);
if ($update) {
	header('location: ../manage-subjects.php');
	}else{
		$error =  "Something went wrong!";
		header('location:../update-subject.php?error='.$error);
	}
}