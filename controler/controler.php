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

        $_SESSION['Prenom'] = $_POST['Prenom'];
        $_SESSION['Nom'] = $_POST['Nom'];
        $_SESSION['Password'] = $_POST['Password'];


        foreach ($Accounts as $account) {
            if ($account['Nom'] == $_SESSION['Nom']) {
                if ($account['Prenom'] == $_SESSION['Prenom']) {
                    if ($account['Password'] == $_SESSION['Password']) {
                        home();
                    }
                }
            }
        }
    }
    session_unset();
    require_once 'view/Connect.php';

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

?>
