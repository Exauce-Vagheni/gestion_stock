<?php 
include("connect_bdd.php");
if(isset($_POST['identifiant']) AND isset($_POST['password'])){
    $req=$con->prepare("SELECT * FROM admin WHERE identifiant=? AND password=?");
    $req->execute(array($_POST['identifiant'],$_POST['password']));

    if($rep=$req->fetchAll()){
        session_start();
        $_SESSION['admin']=$rep[0]['identifiant'];
        header("location:home.php");
    }else{
        echo "<script>alert('Mot de passe ou identifiant incorrects')</script>";
    }
}



?>