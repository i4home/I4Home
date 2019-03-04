<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
   
?>
<html>

<?php require("html/head.html")?>

<script>
history.pushState(null, null, location.href);
window.onpopstate = function() {
    history.go(1);
};
</script>

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
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">please
                        select</button>
                    <div class="dropdown-menu text-center">
                        <a class="dropdown-item" href="groundfloor.php">Ground Floor</a>
                        <a class="dropdown-item" href="#">First Floor</a>
                        <a class="dropdown-item" href="terrace.php">Terrace</a>
                        <a class="dropdown-item" href="outdoor.php">Outdoor</a>
                        <a class="dropdown-item" href="parking.php">Parking</a>
                    </div>
                    <div class="col-md-3"> </div>
                </div>
            </div>
        </div>
        <script>
        imageMapResize();
        </script>
</body>

</html>
