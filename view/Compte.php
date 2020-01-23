<?php
//David Roulet
// 23 01 2020
// ICT-133
ob_start();
$title = "RentASnow - Compte";
?>
<div class="span12">
    <h1>Les infos</h1>
            <div> Prenom: <?=$_SESSION['Prenom'] ?></div>
            <div> Nom: <?= $_SESSION['Nom'] ?></di>
                <div > Mot de passe: <?= $_SESSION['Password'] ?></div>
</div>
    <form action="/index.php?action=Changemdp" method="post">
        <input name="NewPassword">
        <button type="submit" class="btn-danger">Change</button>
    </form>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
