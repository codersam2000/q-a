<?php
    require_once '../dbconn.php';
    session_start();
if (isset($_POST['ask'])) {
	$ques 		= $_POST['ques'];
	$slug 		= strtolower(str_replace(' ', '-', $ques));
	$sub_id 	= $_POST['sub-id'];
	$points 	= $_POST['points'];

	$email 		= $_SESSION['email'];
	$u_result 	= mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
	$u_info		= mysqli_fetch_assoc($u_result);
	$user_id	= $u_info['id'];
	$ques_sql 	= "INSERT INTO `question`(`question`, `slug`, `user_id`, `sub_id`, `points`) VALUES ('$ques','$slug','$user_id','$sub_id','$points')";
	$ques_result= mysqli_query($conn,$ques_sql);
	if ($ques_result) {
			header('location:../index.php');
		}else{
			header('location:../ask-ques.php?error='.base64_encode('Something went wrong! Try again leter.'));
		}	
}
?>