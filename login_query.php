<?php
require_once 'admin/dbcon.php';
include('errors.php');
include('server.php');
 //log user to the login page
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

   //ensure user filled the right details
   if(empty($username)){
       array_push($errors, "username required")
   }

   if(empty($password)){
    array_push($errors, "password required")
}

    if(count($errors)=== 0){
        $password = md5($password);
        $query = "SELECT *FROM register WHERE username = '$username' && password = '$password'");
        $result = msqli_query($db, $query);
        if(msqli_num_rows($result)==1){
            //log user in
            $_SESSION['username']= $username;
            $_SESSION['success']= 'you are logged in';
            header('location : ../index.php');
        }else{
            array_push($errors, "wrong username or password");
            header('location: login.php');
        }
    }
}
?>