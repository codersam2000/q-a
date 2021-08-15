<?php
require_once '../../dbconn.php';

	$id		= base64_decode($_GET['id']);
	$sql 	= "DELETE FROM `subjects` WHERE `id`='$id'";
	$delete = mysqli_query($conn,$sql);
	header('location: ../manage-subjects.php');