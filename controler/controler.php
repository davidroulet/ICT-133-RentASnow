<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function displaySnows()
{
    $snows = getSnows();
    require_once 'view/DisplaySnow.php';

}

function Connect()
{
    require_once 'view/Connect.php';
}

function TryConnect()
{
    $Accounts = getName();

    if (isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['Password'])) {




        foreach ($Accounts as $account) {
            if ($account['Nom'] == $_POST['Prenom']) {
                if ($account['Prenom'] == $_POST['Nom']) {
                    if ($account['Password'] == $_POST['Password']) {
                        $_SESSION['Prenom'] = $_POST['Prenom'];
                        $_SESSION['Nom'] = $_POST['Nom'];
                        $_SESSION['Password'] = $_POST['Password'];
                        home();
                    }
                }
            }
        }
    }
if(!isset($_SESSION['Nom'])&&!isset($_SESSION['Password'])){
    require_once 'view/Connect.php';
}



}

function DisConnect()
{
    session_unset();
    home();
}

function Compte()
{
    require_once 'view/Compte.php';
}
function NewAcc(){
    require_once 'view/NewAcc.php';
    $data="teste";
    InsertAcc($data);
}
?>
