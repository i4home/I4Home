<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\login\index.php");
    }
   
?>
<html>
<title>Bed Room 1</title>
<?php require("../html/head.html")?>
<?php require("try.php")?>

<body>
    <?php require("../html/header.html")?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <br />
                    <h3 class="text-white">BedRoom</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/fan.png" alt="fan" class="img-fluid w-50" /></td>

                            <td>
                                <form method="POST" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_fan_on" name="bd1_fan_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="bd1_fan_off" name="bd1_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("bd1_fan_start","bd1_fan_on");?>
                                        &nbsp;
                                        <?php stop("bd1_fan_stop","bd1_fan_off");?>
                                    </p>
                                </form>

                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_POST['bd1_fan_on']))
                                {
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("bd1_fan_on").style.visibility = "hidden";
                                         document.getElementById("bd1_fan_start").style.visibility = "hidden";
                                         document.getElementById("bd1_fan_off").style.visibility = "visible";
                                         document.getElementById("bd1_fan_stop").style.visibility = "visible";
                                         </script>';
                                }
                                else if(isset($_POST['bd1_fan_off']))
                                {
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("bd1_fan_start").style.visibility = "visible";
                                         document.getElementById("bd1_fan_off").style.visibility = "hidden";
                                         document.getElementById("bd1_fan_on").style.visibility = "visible";
                                         document.getElementById("bd1_fan_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>

                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="POST" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_bulb_on" name="bd1_bulb_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="bd1_bulb_off" name="bd1_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("bd1_bulb_start","bd1_bulb_on");?>
                                        &nbsp;
                                        <?php stop("bd1_bulb_stop","bd1_bulb_off");?>
                                    </p>
                                </form>

                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_POST['bd1_bulb_on']))
                                {
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("bd1_bulb_on").style.visibility = "hidden";
                                         document.getElementById("bd1_bulb_start").style.visibility = "hidden";
                                         document.getElementById("bd1_bulb_off").style.visibility = "visible";
                                         document.getElementById("bd1_bulb_stop").style.visibility = "visible";
                                         </script>';
                                }
                                else if(isset($_POST['bd1_bulb_off']))
                                {
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("bd1_bulb_start").style.visibility = "visible";
                                         document.getElementById("bd1_bulb_off").style.visibility = "hidden";
                                         document.getElementById("bd1_bulb_on").style.visibility = "visible";
                                         document.getElementById("bd1_bulb_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>

                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                            <td>
                                <form method="POST" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_tv_on" name="bd1_tv_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="bd1_tv_off" name="bd1_tv_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("bd1_tv_start","bd1_tv_on");?>
                                        &nbsp;
                                        <?php stop("bd1_tv_stop","bd1_tv_off");?>
                                    </p>
                                </form>

                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_POST['bd1_tv_on']))
                                {
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("bd1_tv_on").style.visibility = "hidden";
                                         document.getElementById("bd1_tv_start").style.visibility = "hidden";
                                         document.getElementById("bd1_tv_off").style.visibility = "visible";
                                         document.getElementById("bd1_tv_stop").style.visibility = "visible";
                                         </script>';
                                }
                                else if(isset($_POST['bd1_tv_off']))
                                {
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("bd1_tv_start").style.visibility = "visible";
                                         document.getElementById("bd1_tv_off").style.visibility = "hidden";
                                         document.getElementById("bd1_tv_on").style.visibility = "visible";
                                         document.getElementById("bd1_tv_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/ac.png" alt="ac" class="img-fluid w-50" /></td>
                            <td>
                                <form method="POST" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_ac_on" name="bd1_ac_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="bd1_ac_off" name="bd1_ac_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("bd1_ac_start","bd1_ac_on");?>
                                        &nbsp;
                                        <?php stop("bd1_ac_stop","bd1_ac_off");?>
                                    </p>
                                </form>

                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_POST['bd1_ac_on']))
                                {
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("bd1_ac_on").style.visibility = "hidden";
                                         document.getElementById("bd1_ac_start").style.visibility = "hidden";
                                         document.getElementById("bd1_ac_off").style.visibility = "visible";
                                         document.getElementById("bd1_ac_stop").style.visibility = "visible";
                                         </script>';
                                }
                                else if(isset($_POST['bd1_ac_off']))
                                {
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("bd1_ac_start").style.visibility = "visible";
                                         document.getElementById("bd1_ac_off").style.visibility = "hidden";
                                         document.getElementById("bd1_ac_on").style.visibility = "visible";
                                         document.getElementById("bd1_ac_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                            <td>
                                <form method="POST" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_plug_on" name="bd1_plug_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="bd1_plug_off" name="bd1_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("bd1_plug_start","bd1_plug_on");?>
                                        &nbsp;
                                        <?php stop("bd1_plug_stop","bd1_plug_off");?>
                                    </p>
                                </form>

                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_POST['bd1_plug_on']))
                                {
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("bd1_plug_on").style.visibility = "hidden";
                                         document.getElementById("bd1_plug_start").style.visibility = "hidden";
                                         document.getElementById("bd1_plug_off").style.visibility = "visible";
                                         document.getElementById("bd1_plug_stop").style.visibility = "visible";
                                         </script>';
                                }
                                else if(isset($_POST['bd1_plug_off']))
                                {
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("bd1_plug_start").style.visibility = "visible";
                                         document.getElementById("bd1_plug_off").style.visibility = "hidden";
                                         document.getElementById("bd1_plug_on").style.visibility = "visible";
                                         document.getElementById("bd1_plug_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>
                    </table>
                </div>
            </div>

            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>