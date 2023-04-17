<?php 

session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
include "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>realtime chat</header>
            <form action="#">
                <div class="error-txt"> </div>
            
                    <div class="field input">
                        <label>email</label>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" placeholder="password">
                        <i class="fas fa-eye"></i>
                    </div>
                
                    <div class="field button">
                        
                        <input type="submit" value="start chating">
                    </div>
                
            </form>
            <div class="link">not yet signed up? <a href="index.php">signup</a> </div>
        </section>
    </div>
    <script src="js/passshow.js"></script>
    <script src="js/login.js"></script>
</body>
</html>