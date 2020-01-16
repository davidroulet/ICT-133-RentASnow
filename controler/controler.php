<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
function displaySnows(){
    $snows=getSnows();
    require_once 'view/DisplaySnow.php';

}
function Connect(){
    require_once 'view/Connect.php';
}
function TryConnect(){
    if (isset($_POST['Prenom']) && isset($_POST['Nom'])&&isset($_POST['Password'])){
        $_SESSION['Prenom']=$_POST['Prenom'];
        $_SESSION['Nom']=$_POST['Nom'];
        $_SESSION['Password']=$_POST['Password'];
    }
    require_once 'view/home.php';
}
function DisConnect(){
    session_unset();
    require_once 'view/home.php';
}
?>
