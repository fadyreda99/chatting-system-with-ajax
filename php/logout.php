<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include "config.php";
    $logout_id=$_GET['logout_id'];
    if(isset($logout_id)){
        $status = "offline now";
        $stmt=$conn->prepare("UPDATE users SET status = ? WHERE unique_id=?");
        $stmt->execute(array ($status , $logout_id));
        if($stmt){
            session_unset();
            session_destroy();
            header('location: ../login.php');
        }else{
            header('location: ../users.php');
        }

    }
}else{
    header("location: ../login.php");
}


?>