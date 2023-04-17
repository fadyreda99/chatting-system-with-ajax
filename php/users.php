<?php
session_start();
include "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE NOT unique_id = '{$outgoing_id}'");
    $stmt->execute();
    $count = $stmt->rowCount();
    $output="";
    if($count == 0 ){
        
        $output .= "no users are available to chat";

    }elseif($count > 0 ){
      include "data.php";
        
    }
echo $output;



?>