
<form method="get" action="read.php">
                                    <p><input type="submit" id="hall_fan_on" name="hall_fan_on" value="on"
                                            class="btn btn-success"/>
                                        &nbsp;
                                        <input type="submit" id="hall_fan_off" name="hall_fan_off" value="off"
                                            class="btn btn-danger"  />
                                    </p>
                                    </form>
<?php 
check('hall_fan',12);
function check($var,$pin){

$start=$var."_start";
$stop=$var."_stop";
$on=$var."_on";
$off=$var."_off";
 if(isset($_GET[$on]))
   {
       on($start,$stop,$on,$off);
    $gpio_on = shell_exec("gpio -g write ".$pin." 0");
 	
	}
	else if(isset($_GET[$off]))
     {
	 off($start,$stop,$on,$off);
	$gpio_off = shell_exec("gpio -g write ".$pin." 1");

    }

}
function on($start,$stop,$on,$off){	   
echo'<script>
    debugger; 
    document.getElementById("'.$start.'").style.display="none";
    document.getElementById("'.$on.'").style.display="none";
    document.getElementById('.$stop.').style.display="inline";
    document.getElementById("'.$off.'").style.display = "inline"; 
    </script>';
    }
function off($start,$stop,$on,$off){
echo'<script> 
    debugger; 
  document.getElementById('.$start.').style.display = "inline";
    document.getElementById("'.$on.'").style.display = "inline";
 document.getElementById('.$stop.').style.display = "none"; 
    document.getElementById("'.$off.'").style.display = "none"; 
    </script>';
    }

?>

