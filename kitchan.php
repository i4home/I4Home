<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
   
?>
<html>
<title>Hall</title>
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
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="devices/fan.png" alt="fan" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="res" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="res" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/fridge.png" alt="fridge" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="res" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/microwave oven.png" alt="microwave oven" class="img-fluid w-50" />
                            </td>
                            <td><input type="checkbox" class="" id="res" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/plug.png" alt="microwave oven" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="res" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                </div>
            </div>
        </div>
        <div class="col-md-3"> </div>
    </div>
    </div>
</body>

</html>