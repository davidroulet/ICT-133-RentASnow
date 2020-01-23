<?php
//David Roulet
// 23 01 2020
// ICT-133
ob_start();
$title = "RentASnow - Snow";
?>

<!-- ________ SNOW _____________-->
<div class="span12">
    <h1>Les Snow</h1>
    <?php foreach ($snows as $etchsnow) { ?>
        <div class="row">
        <div class="col"><?= $etchsnow['Name'] ?></div>
        <div class="col"><?= $etchsnow['Size'] ?></div>
        <div class="col"><?= $etchsnow['color'] ?></div>
</div>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
