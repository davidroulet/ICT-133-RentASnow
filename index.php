<?php
session_start();
require "controler/controler.php";

if(isset($_GET["action"])){
    $action=$_GET["action"];
}else{
    $action="Home";
}
switch ($action){
    case"home":
home();
        break;

    case"displaySnows":
        displaySnows();
        break;
    case"Connect":
        Connect();
        break;
    case"TryConnect":
        TryConnect();
        break;
    case"DisConnect":
        DisConnect();
        break;
    default:
 home();
        break;
}


?>
