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
                <img src="images/groundfloor plan.jpeg" alt="groundfloor" class="img-fluid" usemap="#groundfloor" />
                <map name="groundfloor">
                    <area shape="rect" coords="216,540,389,376" alt="hall" href="hall.php" />
                    <area shaep="rect" coords="110,215,270,373" alt="kitchan" href="kitchan.php" />
                </map>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>
    <script>
    imageMapResize();
    </script>
</body>

</html>