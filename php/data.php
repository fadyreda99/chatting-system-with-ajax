<?php

while($user=$stmt->fetch()){
 
    $sql2 = $conn->prepare("SELECT * FROM messages WHERE (income_message_id = {$user['unique_id']}
                OR outing_message_id = {$user['unique_id']}) AND (outing_message_id = {$outgoing_id} 
                OR income_message_id = {$outgoing_id}) ORDER BY Message_ID DESC LIMIT 1");
                $sql2->execute();
                
                $row2=$sql2->fetch();
             
               $count = $sql2->rowCount();
               //if there are no message it well be shwing 
                ($count > 0) ? $result = $row2['message'] : $result ="No message available";
                    //cut the message if word more than 28 letter
                (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
                //if last message from sender . well be put You aefor message 
                if(isset($row2['outing_message_id'])){
                    ($outgoing_id == $row2['outing_message_id']) ? $you = "You: " : $you = "";
                }else{
                    $you = "";
                }

                //check if user online or offline
                if($user['status'] == "offline now"){
                    $offline = "offline";
                }else{
                    $offline = " ";
                }
    

    $output .= '   <a href="chat.php?user_id='.$user['unique_id'].'">
                    <div class="content">
                        <img src="php/images/'. $user['image'] .'" alt="">
                        <div class="details">
                            <span>'.$user['First_Name'] . ' '. $user['Last_Name'] .'</span>
                            <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                   </a>';
}