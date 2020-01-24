<?php
//David Roulet
// 23 01 2020
// ICT-133
ob_start();
$title = "RentASnow - AllUser";
?>
<div>
    <table class="table">
        <thead>
        <th>Prenom </th>
        <th>Nom</th>
        <th>id</th>
        <?php
        foreach ($liste as $user){  ?>
            <tr>
             <td>  <?= $user["Prenom"] ?></td>
            <td>  <?= $user["Nom"]  ?></td>
           <td>  <?= $user["id"]  ?></td>
</tr>
        <?php   }
        ?>
    </table>
    <form action="/index.php?action=ChangeUser" method="post">
    <button class="btn btn-danger" name="Change">Change</button>
</form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
