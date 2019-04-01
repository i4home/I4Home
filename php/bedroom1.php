<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\index.php");
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
                                <form method="GET" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_fan_on" name="bd1_fan_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="bd1_fan_off" name="bd1_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('bd1_fan_start','bd1_fan_on');?>
                                        
                                        <?php stop('bd1_fan_stop','bd1_fan_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('bd1_fan');
                                        }
										else if ($jay == 1){
                                     check_off('bd1_fan');
                                        }?>
                                </form>
                            </td>
                        <?php  check('bd1_fan',12); ?>
         

                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_bulb_on" name="bd1_bulb_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="bd1_bulb_off" name="bd1_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('bd1_bulb_start','bd1_bulb_on');?>
                                        
                                        <?php stop('bd1_bulb_stop','bd1_bulb_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('bd1_bulb');
                                        }
										else if ($jay == 1){
                                     check_off('bd1_bulb');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('bd1_bulb',12); ?>

                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                              <td>
                                <form method="GET" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_tv_on" name="bd1_tv_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="bd1_tv_off" name="bd1_tv_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('bd1_tv_start','bd1_tv_on');?>
                                        
                                        <?php stop('bd1_tv_stop','bd1_tv_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('bd1_tv');
                                        }
										else if ($jay == 1){
                                     check_off('bd1_tv');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('bd1_tv',12); ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/ac.png" alt="ac" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_ac_on" name="bd1_ac_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="bd1_ac_off" name="bd1_ac_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('bd1_ac_start','bd1_ac_on');?>
                                        
                                        <?php stop('bd1_ac_stop','bd1_ac_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('bd1_ac');
                                        }
										else if ($jay == 1){
                                     check_off('bd1_ac');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('bd1_ac',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="bedroom1.php">
                                    <p><input type="submit" id="bd1_plug_on" name="bd1_plug_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="bd1_plug_off" name="bd1_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('bd1_plug_start','bd1_plug_on');?>
                                        
                                        <?php stop('bd1_plug_stop','bd1_plug_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('bd1_plug');
                                        }
										else if ($jay == 1){
                                     check_off('bd1_plug');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('bd1_plug',12); ?>
                    </table>
                </div>
            </div>

            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>
