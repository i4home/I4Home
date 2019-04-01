<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:..\index.php");
    }
   
?>
<html>
<title>Kitchen</title>
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
                    <h3 class="text-white">Kitchen</h3>
                    <br />
                    <table class="table table-borderd text-white">
                        <tr class="mh-25">
                            <td><img src="../devices/fan.png" alt="fan" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="kitchen.php">
                                    <p><input type="submit" id="k_fan_on" name="k_fan_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="k_fan_off" name="k_fan_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('k_fan_start','k_fan_on');?>
                                        
                                        <?php stop('k_fan_stop','k_fan_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('k_fan');
                                        }
										else if ($jay == 1){
                                     check_off('k_fan');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('k_fan',12); ?>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                                       <td>
                                <form method="GET" action="kitchen.php">
                                    <p><input type="submit" id="k_bulb_on" name="k_bulb_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="k_bulb_off" name="k_bulb_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('k_bulb_start','k_bulb_on');?>
                                        
                                        <?php stop('k_bulb_stop','k_bulb_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('k_bulb');
                                        }
										else if ($jay == 1){
                                     check_off('k_bulb');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('k_bulb',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/fridge.png" alt="fridge" class="img-fluid w-50" /></td>
                            <td>
                                <form method="GET" action="kitchen.php">
                                    <p><input type="submit" id="k_fridge_on" name="k_fridge_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="k_fridge_off" name="k_fridge_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('k_fridge_start','k_fridge_on');?>
                                        
                                        <?php stop('k_fridge_stop','k_fridge_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('k_fridge');
                                        }
										else if ($jay == 1){
                                     check_off('k_fridge');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('k_fridge',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/microwave oven.png" alt="microwave oven" class="img-fluid w-50" />
                            </td>
                              <td>
                                <form method="GET" action="kitchen.php">
                                    <p><input type="submit" id="k_oven_on" name="k_oven_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="k_oven_off" name="k_oven_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('k_oven_start','k_oven_on');?>
                                        
                                        <?php stop('k_oven_stop','k_oven_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('k_oven');
                                        }
										else if ($jay == 1){
                                     check_off('k_oven');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('k_oven',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                                                       <td>
                                <form method="GET" action="kitchen.php">
                                    <p><input type="submit" id="k_plug_on" name="k_plug_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="k_plug_off" name="k_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('k_plug_start','k_plug_on');?>
                                        
                                        <?php stop('k_plug_stop','k_plug_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 13");
                                    if($jay == 0){   
                                    check_on('k_plug');
                                        }
										else if ($jay == 1){
                                     check_off('k_plug');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('k_plug',12); ?>
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
