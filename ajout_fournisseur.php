<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout categorie-GESTION STOCK</title>
</head>
<style>
body{
    font-family:arial;
}
 body{
            font-family:arial;
        }
        header{
            background-color:#161161;
        }
        h2,#menu{
            display:inline-block;
            color:white;
            margin-left:5px;
        }
        nav ul li{
            display:inline-block;
            font-size:17px;
            margin-right:5px;
        }
        nav a{
            text-decoration:none;
            color:white;
        }
        nav a:visited{
            color:white;
        }
        nav a:hover{
            color:white;
            font-size: 19px;
            background:white;
            color:#161161;
            padding:5px;
            border-radius:5px;
        }
.formulaire{
    padding:50px;
    width:32%;
    margin:auto;
}
form input,select{
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
<header >
<h2>GESTION STOCK</h2>
        <div align="right" id="menu">
            <nav>
            <ul>
                <li><a href="home.php">Produits</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="fournisseurs.php">Fournisseurs</a></li>
                <li><a href="clients.php">Clients</a></li>
            </ul>
        </nav> 
        </div>
       
    </header>
    <div class="formulaire">
    <h2 style="color:black;">Ajouter un nouveau fournisseur</h2>
        <form action="" method="post">
            
        <label for="">nom</label><br>
        <input type="text" name="nom"><br>
        <label for="">adress</label><br>
        <input type="text" name="adress"><br>
        <label for="">num_tel</label><br>
        <input type="text" name="num_tel"><br>
        <div align="center">
        <input class="btn-connect" type="submit" value="ajouter"/><br>
        </div>
        
    </form>
    </div>
    
</body>
</html>