<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
?>
<html>
<?php require("html/head.html")?>

<body>
    <?php require("html/header.html")?>
    
</body>

</html>