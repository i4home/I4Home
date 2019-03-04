<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
   
?>
<html>
<title>Out Door</title>
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
                            <td><img src="devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="outdoor_bulb1" onchange="outdoor_bulb1()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/bulb.png" alt="bulb" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="outdoor_bulb2" onchange="outdoor_bulb2()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                        <tr class="mh-25">
                            <td><img src="devices/bulb.png" alt="blub" class="img-fluid w-50" /></td>
                            <td><input type="checkbox" class="" id="outdoor_bulb3" onchange="outdoor_bulb3()" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger"></td>
                        </tr>
                </div>
            </div>
       
        <div class="col-md-3"> </div>
    </div>
    </div>
<script>
    function outdoor_bulb1(){
        var chk=document.getElementById("outdoor_bulb1");
        if(chk.checked==true){
            alert('Bulb is turning ON');
        }
        if(chk.checked==false){
            alert('Bulb is turning OFF');
        }
    }

    function outdoor_bulb2(){
        var chk=document.getElementById("outdoor_bulb2");
        if(chk.checked==true){
            alert('Bulb is turning ON');
        }
        if(chk.checked==false){
            alert('Bulb is turning OFF');
        }
    }

    function outdoor_bulb3(){
        var chk=document.getElementById("outdoor_bulb3");
        if(chk.checked==true){
            alert('Bulb is turning ON');
        }
        if(chk.checked==false){
            alert('Bulb is turning OFF');
        }
    }
</script>
</body>

</html>