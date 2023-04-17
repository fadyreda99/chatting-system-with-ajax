<?php
session_start();
include "config.php";
$outgoing_id = $_SESSION['unique_id'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $searchTerm = $_POST['searchTerm'];
    $output = "";
    $stmt=$conn->prepare("SELECT * FROM users WHERE NOT unique_id = '{$outgoing_id}' AND First_Name LIKE '%{$searchTerm}%' OR Last_Name LIKE '%{$searchTerm}%'");
    $stmt->execute();
    $count=$stmt->rowCount();
    if($count > 0 ){
        include "data.php";
    }else{
        $output .="no user found related to your search term"; 
    }
    echo $output;

}