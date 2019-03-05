<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
   
?>
<html>
<title>Bed Room 2</title>
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
                            <td><input type="checkbox" class="" id="bed2_fan" onchange="bed2_fan()" data-toggle="toggle"
                                    data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="bed2_bulb" onchange="bed2_bulb()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="bed2_tv" onchange="bed2_tv()" data-toggle="toggle"
                                    data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/ac.png" alt="ac" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="bed2_ac" onchange="bed2_ac()" data-toggle="toggle"
                                    data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="bed_plug" onchange="bed_plug()" data-toggle="toggle"
                                    data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                </div>
            </div>

            <div class="col-md-3"> </div>
        </div>
    </div>
    <script>
    function bed2_fan() {
        var chk = document.getElementById("bed2_fan");
        if (chk.checked == true) {
            alert('Fan is turning ON');
        }
        if (chk.checked == false) {
            alert('Fan is turning OFF');
        }
    }

    function bed2_bulb() {
        var chk = document.getElementById("bed2_bulb");
        if (chk.checked == true) {
            alert('Bulb is turning ON');
        }
        if (chk.checked == false) {
            alert('Bulb is turning OFF');
        }
    }

    function bed2_tv() {
        var chk = document.getElementById("bed2_tv");
        if (chk.checked == true) {
            alert('TV is turning ON');
        }
        if (chk.checked == false) {
            alert('TV is turning OFF');
        }
    }

    function bed2_ac() {
        var chk = document.getElementById("bed2_ac");
        if (chk.checked == true) {
            alert('AC is turning ON');
        }
        if (chk.checked == false) {
            alert('AC is turning OFF');
        }
    }

    function bed2_plug() {
        var chk = document.getElementById("bed2_plug");
        if (chk.checked == true) {
            alert('Plug is turning ON');
        }
        if (chk.checked == false) {
            alert('Plug is turning OFF');
        }
    }
    </script>
</body>

</html>