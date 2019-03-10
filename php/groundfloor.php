<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\login\index.php");
    }
?>
<html>

<?php require("..\html\head.html")?>

<body>
    <?php require("..\html\header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <br />
                
                <h3 class="text-white">Ground Floor</h3>
                <br />
                <img src="..\images\groundfloor plan.jpeg" alt="groundfloor" class="img-fluid" usemap="#groundfloor" />
                <map name="groundfloor">
                    <area shape="rect" coords="214,539,389,370" alt="hall" href="..\php\hall.php" />
                    <area shaep="rect" coords="109,211,280,373" alt="kitchen" href="..\php\kitchen.php" />
                    <area shaep="rect" coords="577,390,701,537" alt="Bed Room1" href="..\php\bedroom1.php" />
                    <area shaep="rect" coords="525,271,676,383" alt="Bed Room2" href="..\php\bedroom2.php" />
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