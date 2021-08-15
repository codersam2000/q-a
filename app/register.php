<?php
if (isset($_SESSION['user_login'])) {
   ?>
   <script>
    window.location.href='index.php';
   </script>
   <?php
}
if(isset($_POST['signup'])){
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);

    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = time().substr(1111, 9999).'.'.$photo;


    if($photo == 'jpg' || $photo == 'jpeg' || $photo == 'png'){
        $email_check = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
        $email_check_row = mysqli_num_rows($email_check);
        if ($email_check_row == 0) {
            $sql    = "INSERT INTO `users`(`name`, `email`, `password`, `photo`,`points`, `status`) VALUES ('$name','$email','$password','$photo_name','100','active')";
            $result = mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$photo_name);
                $_SESSION['user_login'] = true;
                $_SESSION['email'] = $email ;
                header('location: index.php');
                die();
                }else{
                $error = "something weent wrong";
                } 
            }else{
            $error = "The Email is exist!";
            }
    }else{
        $error = "Invalid filr type or empty fields!";
    }
}
?>