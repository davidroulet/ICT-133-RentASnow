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
        foreach ($liste as $user){
            echo "<tr>";
             echo "<td> $user[Prenom]</td>";
            echo "<td> $user[Nom]</td>";
            echo "<td> $user[id]</td>";
echo "</tr>";
        }
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
