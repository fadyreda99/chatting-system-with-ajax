<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include "config.php";
        $outgoing_id = $_POST['outgoing_id'];
        $incoming_id = $_POST['incoming_id'];
        $message     = $_POST['message'];
        
        if(!empty($message)){
            $stmt=$conn->prepare("INSERT INTO messages (income_message_id , outing_message_id , message) VALUES (?,?,?)");
            $stmt->execute(array ($incoming_id , $outgoing_id ,$message));
        }

    }else{
        header("../login.php");
    }




?>