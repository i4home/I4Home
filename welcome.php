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
                        <a class="dropdown-item" href="#">Tarrace</a>
                        <a class="dropdown-item" href="#">Outdoor</a>
                        <a class="dropdown-item" href="#">Parking</a>
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
<!--<div class="dropdown text-center mt-5">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">select room</button>
					<div class="dropdown-menu text-center">
					<a class="dropdown-item" href="#">Hall</a>
					<a class="dropdown-item" href="#">Kitchan</a>
					<a class="dropdown-item" href="#">Bed Room</a>
				
					</div>
					</div>
					<div class="w-100"></div>	-->
<!-- <div><a href="welcome.php"><img src="logo.png" alt="I4home" class="img-responsive"
                                width="60%" /></a></div>
                    <div class="mt-5">
                        <a href="#" <button type="button" class="btn btn-primary squre ">Hall</button></a>
                        <a href="#" <button type="button" class="btn btn-primary ">kitchan</button></a>
                        <a href="#" <button type="button" class="btn btn-primary ">Bed Room</button></a>
                    </div>
                </div>