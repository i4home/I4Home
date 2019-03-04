<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
   
?>
<html>
<title>Hall</title>
<?php require("html/head.html")?>

<body>
    <?php require("html/header.html")?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="text-center text-muted mx-auto mt-4 w-75 mb-4">
                    <h2 class="text-success">
                        <?php  echo 'welcome &nbsp;' .$_SESSION["username"]; ?>
                    </h2>
                    <table class="table">
                        <tr class="mh-25">
                            <td><img src="devices/fan.png" alt="fan" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="hall_fan" onchange="hall_fan()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="hall_bulb" onchange="hall_bulb()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/tv.png" alt="tv" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="hall_tv" onchange="hall_tv()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/ac.png" alt="ac" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="hall_ac" onchange="hall_ac()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                </div>
            </div>
       
        <div class="col-md-3"> </div>
    </div>
    </div>
    <script>
    function hall_fan(){
        var chk=document.getElementById("hall_fan");
        if(chk.checked==true){
            alert('Fan is turning ON');
        }
        if(chk.checked==false){
            alert('Fan is turning OFF');
        }
    }

    function hall_bulb(){
        var chk=document.getElementById("hall_bulb");
        if(chk.checked==true){
            alert('Bulb is turning ON');
        }
        if(chk.checked==false){
            alert('Bulb is turning OFF');
        }
    }

    function hall_tv(){
        var chk=document.getElementById("hall_tv");
        if(chk.checked==true){
            alert('TV is turning ON');
        }
        if(chk.checked==false){
            alert('TV is turning OFF');
        }
    }

    function hall_ac(){
        var chk=document.getElementById("hall_ac");
        if(chk.checked==true){
            alert('AC is turning ON');
        }
        if(chk.checked==false){
            alert('AC is turning OFF');
        }
    }

    </script>
</body>

</html>