<?php 
$user="root";
$password="";
$bdd="gestion_stock";
$con= new PDO ("mysql:host=localhost;dbname=$bdd",$user,$password);
    $req=$con->query("SELECT * FROM fournisseurs");
    while($rep=$req->fetch()){
        ?>
            <tr style="background-color:white;">
                    <td><?php echo $rep['nom'] ?></td>
                    <td><?php echo $rep['adress'] ?> </td>
                    <td><?php echo $rep['num_tel'] ?> </td>
                    <td><a href="suppression.php" style="text-decoration:none;padding:5px;border-radius:5px;background:#B52213;border:none;">Supprimer</a><a href="" style="text-decoration:none;padding:5px;border-radius:5px;background:#161161;border:none;">Consulter</a></td>
            </tr>
            
        <?php
        
    }

?>