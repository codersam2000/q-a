<?php
ob_start();
if (isset($_SESSION['user_login'])) {
   ?>
   <script>
   	window.location.href='index.php';
   </script>
   <?php
}
ob_end_flush();
if (isset($_POST['login'])) {
	$email		= $_POST['email'];
	$password	= md5($_POST['password']);
	$sql	= "SELECT * FROM `users` WHERE `email`='$email'";
	$result	= mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['password'] == $password) {
			if ($_POST['remember']) {
				setcookie('email',$email,time()+60*60*24*365);
				setcookie('password',$_POST['password'],time()+60*60*24*365);
			}else{
				setcookie('email',$email,30);
				setcookie('password',$_POST['password'],30);
			}
			$_SESSION['user_login'] = true;
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			header('Location:index.php');
			die();
		}else{
			$error = "Invalid password!";
		}
	}else{
		$error = "Email not exist!";
	}
}
$email_cookie 	= '';
$password_cookie= '';
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
	$email_cookie = $_COOKIE['email'];
	$password_cookie = $_COOKIE['password'];
}
?>