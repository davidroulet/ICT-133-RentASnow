<?php
//David Roulet
// 23 01 2020
// ICT-133
ob_start();
$title = "RentASnow - Connection";
?>
<div class="col-12 border ">
    <form action="/index.php?action=TryConnect" method="post">
        Prénom:<br>
        <input type="text" name="Prenom"><br>
        Nom:<br>
        <input type="text" name="Nom"><br><br>
        Mot de passe :<br>
        <input type="password" name="Password"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
