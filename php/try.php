<?php
function check($var,$pin){

$start=$var."_start";
$stop=$var."_stop";
$on=$var."_on";
$off=$var."_off";

$setmode = shell_exec("sudo /usr/local/bin/gpio -g mode ".$pin." out");
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
  // debugger; 
    document.getElementById("'.$start.'").style.display="none";
    document.getElementById("'.$on.'").style.display="none";
    document.getElementById("'.$stop.'").style.display="inline";
    document.getElementById("'.$off.'").style.display = "inline"; 
    </script>';
    }
function off($start,$stop,$on,$off){
echo'<script> 
    //debugger; 
    document.getElementById("'.$start.'").style.display = "inline";
    document.getElementById("'.$on.'").style.display = "inline";
    document.getElementById("'.$stop.'").style.display = "none"; 
    document.getElementById("'.$off.'").style.display = "none"; 
    </script>';
    }

function check_on($var){
    
$start=$var."_start";
$stop=$var."_stop";
$on=$var."_on";
$off=$var."_off";
echo'<script>
   // debugger; 
    document.getElementById("'.$start.'").style.display="none";
    document.getElementById("'.$on.'").style.display="none";
    document.getElementById("'.$stop.'").style.display="inline";
    document.getElementById("'.$off.'").style.display = "inline"; 
    </script>';

    }
    
function check_off($var){
    
$start=$var."_start";
$stop=$var."_stop";
$on=$var."_on";
$off=$var."_off";
echo'<script> 
    //debugger; 
    document.getElementById("'.$start.'").style.display = "inline";
    document.getElementById("'.$on.'").style.display = "inline";
    document.getElementById("'.$stop.'").style.display = "none"; 
    document.getElementById("'.$off.'").style.display = "none"; 
    </script>';

    }


function start($param1, $param2)
{
    echo '<button type="submit" id=' . $param1 . '  name=' . $param1 . ' class="btn
    btn-primary"  onclick=' . timer($param1, $param2) . '><i class="fa fa-play" style="margin:3px;"></i></button>';
}
function stop($param1, $param2)
{
    echo '<button type="submit" id=' . $param1 . '  name=' . $param1 . ' class="btn
    btn-primary"  onclick=' . timer($param1, $param2) . '><i class="fa fa-stop" style="margin:4px;"></i></button>';
}
function timer($param1, $param2)
{
    if (isset ($_GET[$param1]))
    {
        echo '
                    <script>
                      //  debugger;
                        var req = document.getElementById("' . $param2 . '");
                        var x = prompt("please enter minites only ");
                        if (x != null) {
                            setTimeout(function () { req.click() }, x * 1000);
                        }
                    </script>';
    }
}



    
    
    
    
    
// function read($pin){
    
    // $btnpin = shell_exec('gpio -g read .'$pin'.');
    // echo'<script>debugger; alert('$btnpin');</script>';
// }

?>
