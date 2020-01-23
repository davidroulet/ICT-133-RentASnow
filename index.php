<?php
//David Roulet
// 23 01 2020
// ICT-133
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
    case"Compte":
        Compte();
        break;
    case "NewAcc":
        NewAcc();
        break;
    case "AllUser":
        AllUser();
        break;
    case "ChangeUser":
        ChangeUser();
        break;
    case "DelUser":
        DelUser();
        break;
    default:
 home();
        break;
}


?>
