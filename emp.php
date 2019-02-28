<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
?>
<html>
<?php require("html/head.html")?>

<body>
    <?php require("html/header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <h2 class="text-success">
                        <?php  echo 'welcome &nbsp;' .$_SESSION["username"]; ?>
                    </h2>
                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>