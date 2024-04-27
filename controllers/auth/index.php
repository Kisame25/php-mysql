<?php 
    include './database/db.php';
    include "./config.php";
    $message = '';
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        if($re_password !== $password){
            $message = "Password and Re-password not match";
        }else{
            $hashed_password = md5($password);

            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password');";
            $register = $conn->query($sql);
            if($register){
                header("Location: http://$LHOST:$LPORT/dashboard");
                exit();
            }
        }


    }else if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = md5($password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
        $login = $conn->query($sql);
        if($login->num_rows > 0){
            header("Location: http://$LHOST:$LPORT/dashboard");
        }else{
            $message = "Invalid email or password.";
        }
        
    }else{
        include './views/auth/index.php';
    }
    include './views/auth/index.php';
?>