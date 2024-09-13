<?php 
include("connect_bdd.php");
if(isset($_POST['designation']) AND isset($_POST['categorie'])){
    $req=$con->prepare("INSERT INTO produits(designation,id_categorie) VALUES(?,?)");
    $req->execute(array($_POST['designation'],$_POST['categorie']));
    header("location:home.php");
}


?>