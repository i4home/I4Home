<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\login\index.php");
    }
   
?>
<html>
<title>Hall</title>
<?php require("../html/head.html")?>

<body>
    <?php require("../html/header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <br />
                    <h3 class="text-white">Hall</h3>
                    <br />

                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/fan.png" alt="fan" class="img-fluid w-50" /></td>
                            <td style="padding-top:50px">
                                <form method="get" action="hall.php">
                                    <p><input type="submit" id="hall_fan_on" name="hall_fan_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="hall_fan_off" name="hall_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <button type="submit" id="hall_fan_start" name="hall_fan_start"
                                            class="btn btn-primary">
                                            <i class="fa fa-play"></i>
                                        </button>
                                        &nbsp;
                                        <button type="submit" id="hall_fan_stop" name="hall_fan_stop"
                                            class="btn btn-primary">
                                            <i class="fa fa-stop"></i>
                                        </button>
                                    </p>
                                    </p>
                                </form>
                            </td>
                            <?php
                                if(isset($_GET['hall_fan_start'])){
                                    echo '<script>
                                     var H_F_O=document.getElementById("hall_fan_on");
                                    var x=prompt("please enter minites only ");
                                    if(x!=null){
                                    setTimeout(function(){H_F_O.click()}, x*1000)
                                    }
                              
                                     </script>;';
                                }
                                if(isset($_GET['hall_fan_stop'])){
                                    echo '<script>
                                    debugger;
                                    var x=prompt("please enter minites only ");
                                    if(x!=null){
                                    setTimeout(function(){document.getElementById("hall_fan_off").click()}, x*1000)
                                     }
                                </script>;';
                                }
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['hall_fan_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> 
                                        document.getElementById("hall_fan_on").style.visibility = "hidden";
                                         document.getElementById("hall_fan_start").style.visibility = "hidden";
                                         document.getElementById("hall_fan_off").style.visibility = "visible";
                                         document.getElementById("hall_fan_stop").style.visibility = "visible";
                                         </script>';

                                }
                                else if(isset($_GET['hall_fan_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script>  
                                         document.getElementById("hall_fan_start").style.visibility = "visible";
                                         document.getElementById("hall_fan_off").style.visibility = "hidden";
                                         document.getElementById("hall_fan_on").style.visibility = "visible";
                                         document.getElementById("hall_fan_stop").style.visibility = "hidden"; 
                                        </script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td style="padding-top:50px"> 
                                <form method="get" action="hall.php">
                                    <p><input type="submit" id="hall_bulb_on" name="hall_bulb_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="hall_bulb_off" name="hall_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['hall_bulb_on'])){
                                        $gpio_on = shell_exec("gpio -g write 16 0");
                                        echo'<script> document.getElementById("hall_bulb_on").style.visibility = "hidden"; document.getElementById("hall_bulb_off").style.visibility = "visible";</script>';
                                }
                                else if(isset($_GET['hall_bulb_off'])){
                                        $gpio_off = shell_exec("gpio -g write 16 1");
                                        echo'<script> document.getElementById("hall_bulb_off").style.visibility = "hidden"; document.getElementById("hall_bulb_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                            <td style="padding-top:50px">
                                <form method="get" action="hall.php">
                                    <p><input type="submit" id="hall_tv_on" name="hall_tv_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="hall_tv_off" name="hall_tv_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['hall_tv_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("hall_tv_on").style.visibility = "hidden"; document.getElementById("hall_tv_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['hall_tv_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("hall_tv_off").style.visibility = "hidden"; document.getElementById("hall_tv_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/ac.png" alt="ac" class="img-fluid w-50" /></td>
                            <td style="padding-top:50px">
                                <form method="get" action="hall.php">
                                    <p><input type="submit" id="hall_ac_on" name="hall_ac_on" value="On"
                                            class="btn btn-success" />
                                        <input type="submit" id="hall_ac_off" name="hall_ac_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                </form>
                            </td>
                            <?php
                                $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                                if(isset($_GET['hall_ac_on'])){
                                        $gpio_on = shell_exec("gpio -g write 12 0");
                                        echo'<script> document.getElementById("hall_ac_on").style.visibility = "hidden"; document.getElementById("hall_ac_off").style.visibility = "visible";</script>';

                                }
                                else if(isset($_GET['hall_ac_off'])){
                                        $gpio_off = shell_exec("gpio -g write 12 1");
                                        echo'<script> document.getElementById("hall_ac_off").style.visibility = "hidden"; document.getElementById("hall_ac_on").style.visibility = "visible";</script>';
                                }
                              ?>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>