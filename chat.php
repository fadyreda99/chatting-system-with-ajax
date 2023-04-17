<?php  
session_start();
if(isset($_SESSION['unique_id'])){
    include "header.php";
   

}else{
    header("location:login.php");
}
?>



<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include "php/config.php";
                $user_id=$_GET['user_id'];
               
                
                $stmt = $conn->prepare("SELECT * FROM users WHERE unique_id = '{$user_id}'");
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0 ){
                    $user=$stmt->fetch();
                }


            ?>
            <a href="users.php" class="back-icon"> <i class="fas fa-arrow-left"></i></a>
                    <img src="php/images/<?php echo $user['image'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $user['First_Name'] . ' '. $user['Last_Name']  ?></span>
                        <p><?php echo $user['status']?></p>
                    </div>
            </header>

            <div class="chat-box">
              
            </div>
            

             

             

            
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>"  hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="type your message" autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>  
        </section>
    </div>

    <script src="js/chat.js"></script>
</body>
</html>