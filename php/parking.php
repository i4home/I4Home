<?php
session_start();
if (!isset ($_SESSION['username']))
{
    header("location: ..\index.php");
}

?>
<html>
<title>Parking</title>
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
                    <h3 class="text-white">Parking</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                              <td>
                                <form method="GET" action="parking.php">
                                    <p><input type="submit" id="P_bulb1_on" name="P_bulb1_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="P_bulb1_off" name="P_bulb1_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('P_bulb1_start','P_bulb1_on');?>
                                        
                                        <?php stop('P_bulb1_stop','P_bulb1_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('P_bulb1');
                                        }
										else if ($jay == 1){
                                     check_off('P_bulb1');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('P_bulb1',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                          <td>
                                <form method="GET" action="parking.php">
                                    <p><input type="submit" id="P_bulb2_on" name="P_bulb2_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="P_bulb2_off" name="P_bulb2_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('P_bulb2_start','P_bulb2_on');?>
                                        
                                        <?php stop('P_bulb2_stop','P_bulb2_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('P_bulb2');
                                        }
										else if ($jay == 1){
                                     check_off('P_bulb2');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('P_bulb2',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                                          <td>
                                <form method="GET" action="parking.php">
                                    <p><input type="submit" id="p_plug_on" name="p_plug_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="p_plug_off" name="p_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('p_plug_start','p_plug_on');?>
                                        
                                        <?php stop('p_plug_stop','p_plug_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('p_plug');
                                        }
										else if ($jay == 1){
                                     check_off('p_plug');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('p_plug',12); ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>

</body>

</html>
