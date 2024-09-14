<?php 
$user="root";
$password="";
$bdd="gestion_stock";
$con= new PDO ("mysql:host=localhost;dbname=$bdd",$user,$password);
if (isset($_POST['ajouter'])){
    $nom=$_POST['nom'];
    $adress=$_POST['adress'];
    $num_tel=$_POST['num_tel'];
    $req=$con->prepare("INSERT INTO fournisseurs nom_fournisseur, adresse_fournisseur, num_tel_fournisseur VALUES ?,?,?");
    echo"MERCI"
}


?>