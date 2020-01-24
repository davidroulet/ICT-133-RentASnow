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
        foreach ($liste as $user){  ?>
            <tr>
             <td> <?=$user["Prenom"]?></td>
           <td> <?=$user["Nom"]?></td>
           <td> <?=$user["id"]?></td>
                <?php if ($user["Nom"]=="admin"){ // Enleve le bouton supp Pour l'user admin
            }else {
                echo "<td> <form action=\"/index.php?action=DelUser\" method=\"post\"> <button name=$user[id] class='btn-danger'>Supp</button> </form></td>";
            }?>
            </tr>
        <?php    }
        ?>
    </table>

</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
