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
        <th> Btn </th>
        <?php
        foreach ($liste as $user){
            echo "<tr>";
             echo "<td> $user[Prenom]</td>";
            echo "<td> $user[Nom]</td>";
            echo "<td> $user[id]</td>";
            echo "<td> <form action=\"/index.php?action=DelUser\" method=\"post\"> <button name=$user[id] class='btn-danger'>Supp</button> </form></td>";
echo "</tr>";
        }
        ?>
    </table>

</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
