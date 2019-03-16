<?php
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
    if (isset ($_POST[$param1]))
    {
        echo '
                    <script>
                        debugger;
                        var req = document.getElementById("' . $param2 . '");
                        var x = prompt("please enter minites only ");
                        if (x != null) {
                            setTimeout(function () { req.click() }, x * 1000);
                        }
                    </script>';
    }
}
?>