<!--if alwrady login in other tab then locate home page-->
<?php
session_start();
if(isset($_SESSION['username']))
{
	header("location: ..\login\welcome.php");
}
if(isset($_REQUEST['view'])){
  
    echo"<script> alert('Username or Password is Wrong');</script>";
}
?>

<html>

<head>
    <title>I4home</title>
    <link rel="stylesheet" href="..\style.css" type="text/css">
    <link rel="stylesheet" href="..\fontawesome\css\all.css">
    <!-- <link rel="stylesheet" href="index/font-awesome.min.css"> -->
    <link rel="stylesheet" href="..\index\bootstrap.min.css">
    <script src="..\index\jquery.min.js"></script>
    <script src="..\index\bootstrap.min.js"></script> 
</head>

<body class="center">
    <div class="container-fluid">
        <div class="container m-1">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 ">
                    <form class="form-signin" role="form" action="validate.php" method="post">
                        <center>
                            <img id="logo" src="..\images\logo.png" width="50%">
                            <h3 class="text-white">LOGIN</h3>
                        </center>
                        <div class="errorMsg hidden text-danger" Id='errorMsg'>
                            <h5> Email or password is wrong </h5>
                        </div>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                               <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required
                                autofocus>
                        </div>
                        <br>
                        <div class="form-group input-group">
                            <span class="input-group-addon">  <i class="fa fa-unlock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <p>
                            <label class="text-white"><input name="remember" value="1" type="checkbox"> &nbsp Remember
                                me</label>
                        </p>
                        <button type="submit" name="login" value="Login" class="btn btn-primary btn-block"> <i class="fas fa-sign-in-alt"></i>&nbsp; Login</button>

                        <h5 class="text-skyblue"><button type="button" class="btn btn-link" data-toggle="modal"
                                data-target="#passlink" style="color:white; padding:0px; text-decoration:none">Forget
                                Password</button></h5>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- forget password -->
    <div class="modal fade" id="passlink" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-info">Forget Password <i class="fa fa-question"></i></h4>
                </div>
                <div class="modal-body">
                    <p><input type="email" name="email" class="form-control" placeholder="Enter Email"
                            title="Enter Email" /></p>
                </div>
                <div class="modal-footer" style="margin-top:20px">
                    <button type="button" class="btn btn-primary">Forget Password</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>
<?php
    if(isset($_COOKIE['email'])and isset($_COOKIE['pass'])){
        $email = $_COOKIE['username'];
        $pass = $_COOKIE['password'];
        echo "<script>
            document.getElementById('username').value = '$email';
            document.getElementById('password').value = '$pass';
        </script>";
    }
?>

</html>