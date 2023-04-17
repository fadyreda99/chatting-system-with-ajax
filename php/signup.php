<?php
session_start();
include "config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            $stmt=$conn->prepare("SELECT email FROM users WHERE email = '{$email}'");
            $stmt->execute();
            $count=$stmt->rowCount();

            if($count > 0){
                echo "this email already exsists";
            }else{
                if(isset($_FILES['image'])){
                    $img_name=$_FILES['image']['name'];
                    $img_type=$_FILES['image']['type'];
                    $tmp_name=$_FILES['image']['tmp_name'];

                    $explode = explode('.' , $img_name);
                    $img_ext = end($explode);

                    $extensions= ['png' , 'jpeg' ,'jpg'];

                    if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name= $time . $img_name;
                        if( move_uploaded_file($tmp_name , "images/".$new_img_name)){
                            $status = "active now";
                            $random_id = rand(time() , 1000000000);

                            //insert data in database
                            $stmt_insert=$conn->prepare("INSERT INTO users (unique_id , First_Name , Last_Name , email , password , image , status) VALUES (?,?,?,?,?,?,?)");
                            $stmt_insert->execute(array ($random_id , $fname ,$lname ,$email ,$password ,$new_img_name ,$status));

                            if($stmt_insert){
                                                    
                                $stmt=$conn->prepare("SELECT * FROM users WHERE email = '{$email}'");
                                $stmt->execute();
                                $count=$stmt->rowCount();
                                if($count > 0){
                                    $user=$stmt->fetch();
                                    $_SESSION['unique_id'] = $user['unique_id'];
                                    echo "success";
                                }
                            }else{
                                echo "something is wrong please try again";
                            }
                        }

                       
                        

                    }else{
                        echo "this image is not valid (png , jpeg ,jpg)";
                    }

                }else{
                    echo "please slecet image ";
                }
            }
    
        }else{
            echo "this email is not valid ";   
    
        }
        
    }else{
        echo "all fields are required";
    }
}

