<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
include "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>realtime chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"> </div>
                <div class="name-details">
                    <div class="field input">
                        <label>first name</label>
                        <input type="text" name="fname" placeholder="first name" required>
                    </div>
                    <div class="field input">
                        <label>last name</label>
                        <input type="text" name="lname" placeholder="last name required">
                    </div>
                </div>
                    <div class="field input">
                        <label>email</label>
                        <input type="text" name="email" placeholder="email required">
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" placeholder="password required">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field  image">
                        <label>image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        
                        <input type="submit" value="start chating">
                    </div>
                
            </form>
            <div class="link">alredy signed up? <a href="login.php">login</a> </div>
        </section>
    </div>

    <script src="js/passshow.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>