<?php 
    session_start();
    require("model.php");

    $_SESSION["pd_msg"] = "";

    if(isset($_POST["delete"])){
        deleteProduct($_POST["serial"]);
        $_SESSION["pd_msg"] = " Deleted ";
    }else{
        $_SESSION["pd_msg"] = " Not Selected ";
    }
    header("location: view.php");


?>