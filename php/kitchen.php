<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:..\login\index.php");
    }
   
?>
<html>
<title>Kitchen</title>
<?php require("../html/head.html")?>


<body>
    <?php require("../html/header.html")?>
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
                            <td>
                                <form method="get" action="kitchen.php">
                                    <p style="display:inline"><input type="submit" id="k_fan_on" name="k_fan_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="k_fan_off" name="k_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['k_fan_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("k_fan_on").style.visibility = "hidden"; document.getElementById("k_fan_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['k_fan_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("k_fan_off").style.visibility = "hidden"; document.getElementById("k_fan_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="kitchen.php">

                                    <p>
                                        <input type="submit" id="k_bulb_on" name="k_bulb_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="k_bulb_off" name="k_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>

                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['k_bulb_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("k_bulb_on").style.visibility = "hidden"; document.getElementById("k_bulb_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['k_bulb_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("k_bulb_off").style.visibility = "hidden"; document.getElementById("k_bulb_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/fridge.png" alt="fridge" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="kitchen.php">

                                    <p>
                                        <input type="submit" id="k_fridge_on" name="k_fridge_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="k_fridge_off" name="k_fridge_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>

                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['k_fridge_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("k_fridge_on").style.visibility = "hidden"; document.getElementById("k_fridge_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['k_fridge_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("k_fridge_off").style.visibility = "hidden"; document.getElementById("k_fridge_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/microwave oven.png" alt="microwave oven" class="img-fluid w-50" />
                            </td>
                            <td>
                                <form method="get" action="kitchen.php">
                                    <p><input type="submit" id="k_oven_on" name="k_oven_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="k_oven_off" name="k_oven_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['k_oven_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("k_oven_on").style.visibility = "hidden"; document.getElementById("k_oven_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['k_oven_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("k_oven_off").style.visibility = "hidden"; document.getElementById("k_oven_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="kitchen.php">
                                    <p><input type="submit" id="k_plug_on" name="k_plug_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="k_plug_off" name="k_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['k_plug_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("k_plug_on").style.visibility = "hidden"; document.getElementById("k_plug_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['k_plug_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("k_plug_off").style.visibility = "hidden"; document.getElementById("k_plug_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3"> </div>
    </div>
    </div>
    
</body>

</html>