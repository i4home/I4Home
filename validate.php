<!DOCTYPE html>
<?php

    $myEmail ="admin"||"Admin";
    $myPass = "admin";

    if(isset($_POST['login']))
	{
        $email = $_POST['username'];
        $pass = $_POST['password'];
        
        if($email == $myEmail and $pass == $myPass)
		{
            if(!isset($_SESSION['username']))
			{
				session_start();
				$_SESSION['username']=$email;
				header("location: php/welcome.php");
			}
            if(isset($_POST['remember']))
            {    
                setcookie('email',$email ,time()+60*60*30);
                setcookie('passoword',$pass ,time()+60*60*30);
            }            
        }
        	/*if email and pass are wrong*/
        else{
                header("location: index.php?view=$email"); 
            }
    }else {      
        header("location: index.php ");
    }
?>
