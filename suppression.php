<?php 
include("connect_bdd.php");
if(isset($_GET["id_categorie"])){
    $req=$con->prepare("DELETE FROM categories WHERE id=?");
    $req->execute(array($_GET['id_categorie']));
    header("location:categories.php");
}
?>