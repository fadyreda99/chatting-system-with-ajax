<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include "config.php";
        $outgoing_id = $_POST['outgoing_id'];
        $incoming_id = $_POST['incoming_id'];
        $output = "";
        
        $stmt = $conn->prepare("SELECT * FROM messages 
                                LEFT JOIN users ON users.unique_id = messages.outing_message_id
                                WHERE outing_message_id = {$outgoing_id} AND income_message_id = {$incoming_id}
                                OR    outing_message_id = {$incoming_id} AND income_message_id = {$outgoing_id}
                                ORDER BY Message_ID ");
        $stmt->execute();
        $count = $stmt->rowCount();
       
        if($count > 0 ){
            while($msg=$stmt->fetch()){
                if($msg['outing_message_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'. $msg['message'] .'</p>
                                    </div>
                                </div>';
                }else{
                    $output .= '
                                <div class="chat incoming">
                                    <img src="php/images/'.$msg['image'].'" alt="">
                                    <div class="details">
                                        <p>'. $msg['message'] .'</p>
                                    </div>
                                </div>';
                }
            }
            echo $output;
            
        }
    }else{
        header("../login.php");
    }




?>