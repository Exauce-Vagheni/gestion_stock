<?php 
include("connect_bdd.php");
if(isset($_POST['designation'])){
    $req=$con->prepare("INSERT INTO categories(designation) VALUES(?)");
    $req->execute(array($_POST['designation']));
    header("location:categories.php");
    
}

?>