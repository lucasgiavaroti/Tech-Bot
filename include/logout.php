<?php
session_start();

if(isset($_SESSION["dados_usuario"]["email"]) and isset($_SESSION["dados_usuario"]["senha"])){
    session_destroy();
    header('location: /lpage/index.php');
    exit();
}

?>