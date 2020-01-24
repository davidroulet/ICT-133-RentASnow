<?php
//David Roulet
// 23 01 2020
// ICT-133
require_once 'model/model.php';

// This file contains nothing but functions


// Affiche la page home
function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
// Affiche la liste des sonws
function displaySnows()
{
    $snows = getSnows();
    require_once 'view/DisplaySnow.php';

}
// Affiche la page connection
function Connect()
{
    require_once 'view/Connect.php';
}
// Vas Check si les données entrée coresponde aux donée deja enrgistrée
function TryConnect()
{
    $Accounts = getName();

    if (isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['Password'])) {


        foreach ($Accounts as $account) {
            if ($account['Nom'] == $_POST['Nom']) {
                if ($account['Prenom'] == $_POST['Prenom']) {
                    if ($account['Password'] == $_POST['Password']) {
                        $_SESSION['Prenom'] = $_POST['Prenom'];
                        $_SESSION['Nom'] = $_POST['Nom'];
                        $_SESSION['Password'] = $_POST['Password'];
                        $_SESSION['id']=$account["id"];
                        home();
                    }
                }
            }
        }
    }
    if (!isset($_SESSION['Nom']) && !isset($_SESSION['Password'])) {
        require_once 'view/Connect.php';
    }


}
// Supprime les valeurs enrgistrées et retours a la page d 'acceuille
function DisConnect()
{
    session_unset();
    home();
}
// affiche une page de compte
function Compte()
{
    require_once 'view/Compte.php';
}
// Permet de crée et ajouter un nouveau compte aux fichier de donnée
function NewAcc()
{
    if (isset($_POST["PrenomR"]) && isset($_POST["NomR"]) && isset($_POST["PasswordR"]) && $_POST["PrenomR"] != "" && $_POST["NomR"] != "" && $_POST["PasswordR"] != "") {


        $liste = getName();
        $Lastid = 0;
        foreach ($liste as $user) {
            $id = $user["id"];

            if ($id > $Lastid) {
                $Lastid = $id;
            }
        }
        $Lastid++;
        $liste[] = ["id" => $Lastid, "Prenom" => $_POST["PrenomR"], "Nom" => $_POST["NomR"], "Password" => $_POST["PasswordR"]];
        InsertAcc($liste);
    }
    require_once 'view/NewAcc.php';
    $_POST["PrenomR"] = null;
    unset($_POST["NomR"]);
    unset($_POST["PasswordR"]);
}
// affichier la liste des users
function AllUser(){
    $liste = getName();
    require_once 'view/AllUser.php';
}
// Affiche la page pour changer les utilisateurs
function ChangeUser(){
    $liste = getName();
    require_once 'view/ChangeUser.php';
}
//Function permetant de supprimé un utilisateurs
function DelUser(){

    $liste = getName();
$i=0;
    foreach ($liste as $user){
        if(isset($_POST[$user["id"]])){
           unset($liste[$i]) ;
            SuppAcc($liste);
        }
        $i++;
    }
    ChangeUser();
}
//Function Premetant de changer le mot de passe de l'utilisateurs
function Changemdp(){
    $liste = getName();
    $i=0;
    foreach ($liste as $user){
        if($user["id"]==$_SESSION["id"]){
            $liste[$i] = ["id" => $user["id"], "Prenom" => $user["Prenom"], "Nom" => $user["Nom"], "Password" => $_POST["NewPassword"]];
            ChangeAcc($liste);
            $_SESSION['Password']=$_POST["NewPassword"];
        }
        $i++;
    }
    Compte();
}
?>
