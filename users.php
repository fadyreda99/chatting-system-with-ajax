<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    include "header.php";
?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php
                include "php/config.php";
                $stmt = $conn->prepare("SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0 ){
                    $user=$stmt->fetch();
                }


            ?>
                <div class="content">
                    <img src="php/images/<?php echo $user['image'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $user['First_Name'] . ' '. $user['Last_Name']  ?></span>
                        <p><?php echo $user['status']?> </p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $user['unique_id'] ?>" class="logout">logout</a>
            </header>
            <div class="search">
                <span class="text">select user </span>
                <input type="text" placeholder="enter name of user">
                <button> <i class="fas fa-search"></i> </button>
            </div>
            <div class="users-list">
             
           
              
          
       
            </div>
           
           
           
            
        </section>
    </div>
    <script src="js/users.js"></script>
</body>
</html>
<?php

}else{
    header("location:login.php");
}

