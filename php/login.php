<?php
session_start();

include "config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(!empty($email) && !empty($password) ){

        $stmt = $conn->prepare("SELECT * FROM users WHERE  email = '$email' AND password = '$password'");
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count > 0 ){
            $user=$stmt->fetch();

            $status = "Active now";

            $stmt2=$conn->prepare("UPDATE users SET status = ? WHERE unique_id=?");
            $stmt2->execute(array ($status , $user['unique_id']));
            if($stmt2){
                $_SESSION['unique_id'] = $user['unique_id'];
                echo "success";
            }
     
        }else{
            echo "email or password is wrong please try again";
        }

    }else{
        echo "please enter your email and password";
    }





}