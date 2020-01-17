<?php
ob_start();
$title = "RentASnow - Nouveau compte";
?>
<div class="col-12 border ">
    <form action="/index.php?action=NewAcc" method="post">
        Prénom:<br>
        <input type="text" name="PrenomR"><br>
        Nom:<br>
        <input type="text" name="NomR"><br><br>
        Mot de passe :<br>
        <input type="text" name="PasswordR"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
