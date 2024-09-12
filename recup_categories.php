<?php 
include("connect_bdd.php");
    $req=$con->query("SELECT * FROM categories");
    while($rep=$req->fetch()){
        ?>
            <tr style="background-color:white;">
                    <td><?php echo $rep['designation']; ?></td>
                    <td><a href="suppression.php?id_categorie=<?php echo $rep['id']; ?>" style="text-decoration:none;padding:5px;border-radius:5px;background:#B52213;border:none;">Supprimer</a></td>
            </tr>

        <?php
    }

?>