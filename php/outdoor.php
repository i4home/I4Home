<?php
session_start();
if (!isset ($_SESSION['username']))
{
    header("location: ..\index.php");
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
                                <form method="GET" action="outdoor.php">
                                    <p><input type="submit" id="o_bulb1_on" name="o_bulb1_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="o_bulb1_off" name="o_bulb1_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('o_bulb1_start','o_bulb1_on');?>
                                        
                                        <?php stop('o_bulb1_stop','o_bulb1_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('o_bulb1');
                                        }
										else if ($jay == 1){
                                     check_off('o_bulb1');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('o_bulb1',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                      <td>
                                <form method="GET" action="outdoor.php">
                                    <p><input type="submit" id="o_bulb2_on" name="o_bulb2_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="o_bulb2_off" name="o_bulb2_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('o_bulb2_start','o_bulb2_on');?>
                                        
                                        <?php stop('o_bulb2_stop','o_bulb2_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('o_bulb2');
                                        }
										else if ($jay == 1){
                                     check_off('o_bulb2');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('o_bulb2',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="blub" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="outdoor.php">
                                    <p><input type="submit" id="o_bulb3_on" name="o_bulb3_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="o_bulb3_off" name="o_bulb3_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('o_bulb3_start','o_bulb3_on');?>
                                        
                                        <?php stop('o_bulb3_stop','o_bulb3_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('o_bulb3');
                                        }
										else if ($jay == 1){
                                     check_off('o_bulb3');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('o_bulb3',12); ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>

</body>

</html>
