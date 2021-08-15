<?php
if (isset($_POST['ask'])) {
	$ques 		= $_POST['ques'];
	$slug 		= strtolower(str_replace(' ', '-', $ques));
	$sub_id 	= $_POST['sub-id'];
	$user_id 	= $_SESSION['user_id'];
	$points 	= $_POST['points'];

	$ques_sql 	= "INSERT INTO `question`(`question`, `slug`, `user_id`, `sub_id`, `points`) VALUES ('$ques','$slug','$user_id','$sub_id','$points')";
	
}
?>