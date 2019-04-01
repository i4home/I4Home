<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ..\index.php");
    }
   
?>
<html>
<title>Hall</title>
<?php require("../html/head.html")?>
<?php require("../php/try.php")?>

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
                            <td><img src="../devices/fan.png" alt="fan" class="rounded img-fluid  w-50" /></td>
                            <td>
                                <form method="GET" action="hall.php">
                                    <p><input type="submit" id="hall_fan_on" name="hall_fan_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="hall_fan_off" name="hall_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('hall_fan_start','hall_fan_on');?>
                                        
                                        <?php stop('hall_fan_stop','hall_fan_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('hall_fan');
                                        }
										else if ($jay == 1){
                                     check_off('hall_fan');
                                  
                                            
                                            }?>

                                </form>
                            </td>
                        <?php  check('hall_fan',12); ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td>
                                <form method="GET" action="hall.php">
                                    <p><input type="submit" id="hall_bulb_on" name="hall_bulb_on" value="On"
                                            class="btn btn-success" />
                                        
                                        <input type="submit" id="hall_bulb_off" name="hall_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("hall_bulb_start","hall_bulb_on");?>
                                        
                                        <?php stop("hall_bulb_stop","hall_bulb_off");?>
                                    </p>
                                </form>
                               <?php 
                                    $jay= shell_exec("gpio -g read 16");
                                    if($jay == 0){   
                                        check_on('hall_bulb');
                                        }
                                    else if ($jay == 1){
                                          check_off('hall_bulb');                                            
                                        }?>
                            </td>
                          <?php check('hall_bulb',16);?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                            <td>
                                <form method="GET" action="hall.php">
                                    <p><input type="submit" id="hall_tv_on" name="hall_tv_on" value="On"
                                            class="btn btn-success" />
                                        
                                        <input type="submit" id="hall_tv_off" name="hall_tv_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("hall_tv_start","hall_tv_on");?>
                                        
                                        <?php stop("hall_tv_stop","hall_tv_off");?>
                                    </p>
                                </form>
                                 <?php 
                                    $jay= shell_exec("gpio -g read 20");
                                    if($jay == 0){   
                                        check_on('hall_tv');
                                        }
                                    else if ($jay == 1){
                                          check_off('hall_tv');                                            
                                        }?>
                            </td>
                            <?php check('hall_bulb',20);?>
                        </tr>
                        <tr class="mh-25">
                            <td>
                                <img src="../devices/ac.png" alt="ac" class="img-fluid w-50" />
                            </td>
                            <td>
                                <form method="GET" action="hall.php">
                                    <p><input type="submit" id="hall_ac_on" name="hall_ac_on" value="On"
                                            class="btn btn-success" />
                                        
                                        <input type="submit" id="hall_ac_off" name="hall_ac_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start("hall_ac_start","hall_ac_on");?>
                                        
                                        <?php stop("hall_ac_stop","hall_ac_off");?>
                                    </p>
                                </form>
                           <?php 
                                    $jay= shell_exec("gpio -g read 21");
                                    if($jay == 0){   
                                        check_on('hall_ac');
                                        }
                                    else if ($jay == 1){
                                        check_off('hall_ac');                                            
                                        }?>
                            </td>
                          <?php check('hall_ac',21);?>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>
