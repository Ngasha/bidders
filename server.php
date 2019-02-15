<?php
session_start();

$username = "";
$email = "";
$errors = array();


//connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration')  or die("could not connect to database");

//if the registration button is clicked
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    //ensure that all fieds are filled properly
    if(empty($username)){
        array_push($errors, "username is required");
    }
    if(empty($email)){
        array_push($errors, "email is required");
    }
    if(empty($password_1)){
        array_push($errors, "password is required");
    }
    if($password_1 != $password_2){
        array_push($errors, "password mismatch");
    }

    //if there no errors save user to the database
    if(count($errors)== 0){
         $password = md5($password_1);
        $sql = "INSERT INTO register (username, email, password)
                VALUES('$username', '$email', '$password_1')";
                mysqli_query($db, $sql);
                $_SESSION['username']= $username;
                $_SESSION['success']= 'you are logged in';
                header('location : index.php');//redirect to home page
    }
}
?>