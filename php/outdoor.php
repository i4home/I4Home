<?php
session_start();
if (!isset ($_SESSION['username']))
{
    header("location: ..\login\index.php");
}

?>
<html>
<title>Outdoor</title>
<?php require ("../html/head.html")?>
<?php require ("try.php")?>

<body>
    <?php require ("../html/header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <br />
                    <h3 class="text-white">Outdoor</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="o_bulb1_on" name="o_bulb1_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="o_bulb1_off" name="o_bulb1_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("o_bulb1_start", "o_bulb1_on"); ?>
                                        &nbsp;
                                        <?php stop("o_bulb1_stop", "o_bulb1_off"); ?>
                                    </p>
                                </form>

                            </td>
                            <?php
                            $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                            if (isset ($_GET['o_bulb1_on']))
                            {
                                $gpio_on = shell_exec("gpio -g write 12 0");
                                echo '<script> 
                                        document.getElementById("o_bulb1_on").style.visibility = "hidden";
                                         document.getElementById("o_bulb1_start").style.visibility = "hidden";
                                         document.getElementById("o_bulb1_off").style.visibility = "visible";
                                         document.getElementById("o_bulb1_stop").style.visibility = "visible";
                                         </script>';
                            }
                            else if (isset ($_GET['o_bulb1_off']))
                            {
                                $gpio_off = shell_exec("gpio -g write 12 1");
                                echo '<script>  
                                    document.getElementById("o_bulb1_start").style.visibility = "visible";
                                    document.getElementById("o_bulb1_off").style.visibility = "hidden";
                                    document.getElementById("o_bulb1_on").style.visibility = "visible";
                                    document.getElementById("o_bulb1_stop").style.visibility = "hidden"; 
                                </script>';
                            }
                            ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="o_bulb2_on" name="o_bulb2_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="o_bulb2_off" name="o_bulb2_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("o_bulb2_start", "o_bulb2_on"); ?>
                                        &nbsp;
                                        <?php stop("o_bulb2_stop", "o_bulb2_off"); ?>
                                    </p>
                                </form>

                            </td>
                            <?php
                            $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                            if (isset ($_GET['o_bulb2_on']))
                            {
                                $gpio_on = shell_exec("gpio -g write 12 0");
                                echo '<script> 
                                        document.getElementById("o_bulb2_on").style.visibility = "hidden";
                                         document.getElementById("o_bulb2_start").style.visibility = "hidden";
                                         document.getElementById("o_bulb2_off").style.visibility = "visible";
                                         document.getElementById("o_bulb2_stop").style.visibility = "visible";
                                         </script>';
                            }
                            else if (isset ($_GET['o_bulb2_off']))
                            {
                                $gpio_off = shell_exec("gpio -g write 12 1");
                                echo '<script>  
                                    document.getElementById("o_bulb2_start").style.visibility = "visible";
                                    document.getElementById("o_bulb2_off").style.visibility = "hidden";
                                    document.getElementById("o_bulb2_on").style.visibility = "visible";
                                    document.getElementById("o_bulb2_stop").style.visibility = "hidden"; 
                                </script>';
                            }
                            ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="blub" class="img-fluid w-50" /></td>
                            <td>
                                <form method="get" action="terrace.php">
                                    <p><input type="submit" id="o_bulb3_on" name="o_bulb3_on" value="On"
                                            class="btn btn-success" />
                                        &nbsp;
                                        <input type="submit" id="o_bulb3_off" name="o_bulb3_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("o_bulb3_start", "o_bulb3_on"); ?>
                                        &nbsp;
                                        <?php stop("o_bulb3_stop", "o_bulb3_off"); ?>
                                    </p>
                                </form>

                            </td>
                            <?php
                            $setmode12 = shell_exec("sudo /usr/local/bin/gpio -g mode 12 out");
                            if (isset ($_GET['o_bulb3_on']))
                            {
                                $gpio_on = shell_exec("gpio -g write 12 0");
                                echo '<script> 
                                        document.getElementById("o_bulb3_on").style.visibility = "hidden";
                                         document.getElementById("o_bulb3_start").style.visibility = "hidden";
                                         document.getElementById("o_bulb3_off").style.visibility = "visible";
                                         document.getElementById("o_bulb3_stop").style.visibility = "visible";
                                         </script>';
                            }
                            else if (isset ($_GET['o_bulb3_off']))
                            {
                                $gpio_off = shell_exec("gpio -g write 12 1");
                                echo '<script>  
                                    document.getElementById("o_bulb3_start").style.visibility = "visible";
                                    document.getElementById("o_bulb3_off").style.visibility = "hidden";
                                    document.getElementById("o_bulb3_on").style.visibility = "visible";
                                    document.getElementById("o_bulb3_stop").style.visibility = "hidden"; 
                                </script>';
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