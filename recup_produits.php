<?php 
include("connect_bdd.php");
    $req=$con->query("SELECT *,produits.designation as produit, categories.designation as categorie FROM produits INNER JOIN categories ON produits.id_categorie=categories.id");
    while($rep=$req->fetch()){
        ?>
            <tr style="background-color:white;">
                    <td><?php echo $rep['produit'] ?></td>
                    <td><?php echo $rep['categorie'] ?> </td>
                    <td><a href="suppression.php" style="text-decoration:none;padding:5px;border-radius:5px;background:#B52213;border:none;">Supprimer</a><a href="" style="text-decoration:none;padding:5px;border-radius:5px;background:#161161;border:none;">Consulter</a></td>
            </tr>
        <?php
        
    }

?>