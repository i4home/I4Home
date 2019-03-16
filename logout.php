<!DOCTYPE html>
<?php
    session_start();
    session_destroy();
    if(isset($_COOKIE['email'])and isset($_COOKIE['pass'])){
        $email = $_COOKIE['username'];
        $pass = $_COOKIE['password'];
        
        setcookie('email',$email ,time()-1);
        setcookie('passoword',$pass ,time()-1);
    }
    header("location:index.php");
?>