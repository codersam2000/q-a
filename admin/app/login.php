<?php
require_once '../../dbconn.php';
session_start();

if (isset($_POST['log_in'])) {
   $email   =  $_POST['email'];
   $password=  $_POST['password'];
   $query   =  "SELECT * FROM `admin` WHERE `email`='$email'";
   $result  = mysqli_query($conn,$query);
   if (mysqli_num_rows($result) == 1) {
       $row = mysqli_fetch_assoc($result);
       if ($row['password'] == $password) {
           $_SESSION['admin_id'] = $row['id'] ;
           $_SESSION['admin_email'] = $row['email'] ;
           $_SESSION['admin_name'] = $row['name'] ;
            header('location: ../dashboard.php');
       }else{
        $error = "Password is invalid!";
        header('location: ../index.php?error='.$error.'&email='.$email);
       }
   }else{
      $error = "Email or username is invalid!";
      header('location: ../index.php?error='.$error);
   }
}
?>