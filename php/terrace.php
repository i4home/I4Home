<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\login\index.php");
    }
   
?>
<html>
<title>Terrace</title>
<?php require("../html/head.html")?>


<body>
    <?php require("../html/header.html")?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <br />
                    <h3 class="text-white">Tarrace</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="t_bulb1_on" name="t_bulb1_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="t_bulb1_off" name="t_bulb1_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['t_bulb1_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("t_bulb1_on").style.visibility = "hidden"; document.getElementById("t_bulb1_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['t_bulb1_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("t_bulb1_off").style.visibility = "hidden"; document.getElementById("t_bulb1_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="t_bulb2_on" name="t_bulb2_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="t_bulb2_off" name="t_bulb2_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['t_bulb2_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("t_bulb2_on").style.visibility = "hidden"; document.getElementById("t_bulb2_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['t_bulb2_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("t_bulb2_off").style.visibility = "hidden"; document.getElementById("t_bulb2_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="t_plug_on" name="t_plug_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="t_plug_off" name="t_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['t_plug_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("t_plug_on").style.visibility = "hidden"; document.getElementById("t_plug_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['t_plug_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("t_plug_off").style.visibility = "hidden"; document.getElementById("t_plug_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-3"> </div>
        </div>
    </div>
    <script>
    function terrace_bulb1() {
        var chk = document.getElementById("terrace_bulb1");
        if (chk.checked == true) {
            alert('Bulb is turning ON');
        }
        if (chk.checked == false) {
            alert('Bulb is turning OFF');
        }
    }

    function terrace_bulb2() {
        var chk = document.getElementById("terrace_bulb2");
        if (chk.checked == true) {
            alert('Bulb is turning ON');
        }
        if (chk.checked == false) {
            alert('Bulb is turning OFF');
        }
    }

    function terrace_plug() {
        var chk = document.getElementById("terrace_plug");
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