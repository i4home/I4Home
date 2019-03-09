<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:..\login\index.php");
    }
   
?>
<html>
<title>Kitchen</title>
<?php require("..\html\head.html")?>


<body>
    <?php require("..\html\header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <br />
                    <h3 class="text-white">Kitchen</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/fan.png" alt="fan" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="kitchen_fan" onchange="kitchen_fan()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="kitchen_bulb" onchange="kitchen_bulb()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/fridge.png" alt="fridge" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="kitchen_fridge" onchange="kitchen_fridge()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/microwave oven.png" alt="microwave oven" class="img-fluid w-50" />
                            </td>
                            <td><input type="checkbox" class="" id="kitchen_microwave" onchange="kitchen_microwave()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="kitchen_plug" onchange="kitchen_plug()"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3"> </div>
    </div>
    </div>
    <script>
    function kitchen_fan() {
        var chk = document.getElementById("kitchen_fan");
        if (chk.checked == true) {
            alert('Fan is turning ON');
        }
        if (chk.checked == false) {
            alert('Fan is turning OFF');
        }
    }

    function kitchen_bulb() {
        var chk = document.getElementById("kitchen_bulb");
        if (chk.checked == true) {
            alert('Bulb is turning ON');
        }
        if (chk.checked == false) {
            alert('Bulb is turning OFF');
        }
    }

    function kitchen_fridge() {
        var chk = document.getElementById("kitchen_fridge");
        if (chk.checked == true) {
            alert('Fridge is turning ON');
        }
        if (chk.checked == false) {
            alert('Fridge is turning OFF');
        }
    }

    function kitchen_microwave() {
        var chk = document.getElementById("kitchen_microwave");
        if (chk.checked == true) {
            alert('Microwave is turning ON');
        }
        if (chk.checked == false) {
            alert('Microwave is turning OFF');
        }
    }

    function kitchen_plug() {
        var chk = document.getElementById("kitchen_plug");
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