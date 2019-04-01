<?php
session_start();
if (!isset ($_SESSION['username']))
{
    header("location: ..\index.php");
}

?>
<html>
<title>Terrace</title>
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
                    <h3 class="text-white">Tarrace</h3>
                    <br />
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                              <td>
                                <form method="GET" action="terrace.php">
                                    <p><input type="submit" id="T_bulb1_on" name="T_bulb1_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="T_bulb1_off" name="T_bulb1_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('T_bulb1_start','T_bulb1_on');?>
                                        
                                        <?php stop('T_bulb1_stop','T_bulb1_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('T_bulb1');
                                        }
										else if ($jay == 1){
                                     check_off('T_bulb1');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('T_bulb1',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="terrace.php">
                                    <p><input type="submit" id="T_bulb2_on" name="T_bulb2_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="T_bulb2_off" name="T_bulb2_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('T_bulb2_start','T_bulb2_on');?>
                                        
                                        <?php stop('T_bulb2_stop','T_bulb2_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('T_bulb2');
                                        }
										else if ($jay == 1){
                                     check_off('T_bulb2');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('T_bulb2',12); ?>
         
                        </tr>
                        <tr class="mh-25">
                            <td><img src="../devices/plug.png" alt="plug" class="img-fluid w-50" /></td>
                                                        <td>
                                <form method="GET" action="terrace.php">
                                    <p><input type="submit" id="T_plug_on" name="T_plug_on" value="On"
                                            class="btn btn-success" />
                                                                           
                                        <input type="submit" id="T_plug_off" name="T_plug_off" value="Off"
                                            class="btn btn-danger" />
                                    </p>
                                    <p>
                                        <?php start('T_plug_start','T_plug_on');?>
                                        
                                        <?php stop('T_plug_stop','T_plug_off');?>
                                    </p>
                                    <?php 
                                    $jay= shell_exec("gpio -g read 12");
                                    if($jay == 0){   
                                    check_on('T_plug');
                                        }
										else if ($jay == 1){
                                     check_off('T_plug');                                          
                                        }?>
                                </form>
                            </td>
                        <?php  check('T_plug',12); ?>
         
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-3"> </div>
        </div>
    </div>
</body>

</html>
