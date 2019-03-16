<!--if already login in other tab then locate home page-->
<?php
session_start();
if (isset ($_SESSION['username']))
{
    header("location: php/welcome.php");
}

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>I4home</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="index/font-awesome.min.css"> -->
    <link rel="stylesheet" href="index/bootstrap.min.css">
    <script src="index/jquery.min.js"></script>
    <script src="index/bootstrap.min.js"></script>
</head>

<body class="center">
    <div class="container-fluid">
        <div class="container m-1">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 ">
                    <form class="form-signin" role="form" action="validate.php" method="post">
                        <center>

                            <img id="logo" src="images\logo.png" width="50%">
                            <h3 class="text-white">LOGIN</h3>
                        </center>
                        <div class="errorMSG  text-danger" Id='errorMsg'>
                            

                            <?php if (isset ($_REQUEST['view']))
                            {
                                echo '<h5> Email or password is wrong </h5>';
                            }?>

                        </div>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required
                                autofocus>
                        </div>
                        <br>
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <p>
                            <label class="text-white"><input name="remember" value="1" type="checkbox">
                                Remember me <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                        </p>
                        <button type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login</button>

                        <h5 class="text-skyblue"><button type="button" class="btn btn-link" data-toggle="modal"
                                data-target="#passlink" style="color:white; padding:0px; text-decoration:none">
                                Forget Password</button></h5>
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
                    <h4 class="modal-title text-info">Forget Password</h4>
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
if (isset ($_COOKIE['email']) and isset ($_COOKIE['pass']))
{
    $email = $_COOKIE['username'];
    $pass = $_COOKIE['password'];
    echo "<script>
            document.getElementById('username').value = '$email';
            document.getElementById('password').value = '$pass';
        </script>";
}
?>

</html>