<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion stock-se connecter</title>
</head>
<style>
body{
    font-family:arial;
}
.formulaire{
    margin-top:120px;
    padding:100px;
    width:28%;
    margin:auto;
}
form input{
    font-size:18px;
    width:98%;
    margin-bottom:10px;
    height:30px;
}
h1{
    font-weight:normal;
    text-align:center;
}
form label{
    color:#161161;
    font-weight:bold;
}
.btn-connect{
    background-color:#161161;
    color:white;
    border:none;
    margin-bottom:5px;
    width:100%;
    height:35px;
    cursor:pointer;
}
.btn-inscrire{
    border:1px solid;
    border-color:#161161;
    margin-bottom:5px;
    background:white;
    width:100%;
    height:35px;
    cursor:pointer;
}

</style>
<body>
    <div class="formulaire">
        <h2>STOCK MANAGER-Se connecter</h2>
        <form action="" method="post">
            <?php  
                include("verification_connexion.php");
            
            ?>
        <label for="">Identifiant</label><br>
        <input type="text" name="identifiant"><br>
        <label for="">Mot de passe</label><br>
        <input type="text" name="password"><br>
        <div align="center">
        <input class="btn-connect" type="submit" value="Se connecter" /><br>
        <input class="btn-inscrire" type="submit" value="Créer un compte"/>
        </div>
        
    </form>
    </div>
    
</body>
</html>