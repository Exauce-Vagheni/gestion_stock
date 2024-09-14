<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION_STOCK-fournisseur</title>
</head>
<body style="margin-top:0px;">
    <style>
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
        .tab a {
        color:white;
        text-decoration: 0;/*pour supprmmerle soulignement des liens*/
        padding: 15px 20px;
        transition: background-color 0.3s;
        background-color: rgb(62, 153, 228);
        border-radius: 5px;
        margin-top: 2px;
        margin-right: 20px;
    }
    .tab tbody tr th {
        background-color: white
        color:white
    }
    .tab{
        width: 80%;
        margin: 25px auto;
        border-collapse: collapse;/*pour supprimmer les espaces entre les bordures*/
        font-size: 16px;
        box-shadow: 0 0 20px rgb(0 , 0 , 0 , 0. 15);
    }
    .tab thead tr {
        background-color:white;
        color: #ffffff;
        top: 5px;
    }
    .tab th, .tab td{
        padding: 12px 15px;
        border-bottom: 1px solid #dddddd;
    }
    .tab tbody tr{
        background-color: #f3f3f3;
        
    }
    .tab tbody tr:hover{
        background-color: rgb(202, 224, 243);;
    }
    .tab .active-row{
        font-weight: bold;/*pour mettre en gras la ligne*/
        color:white
    }
    </style>
    <header >
        <h2>GESTION STOCK</h2>
        <div align="right" id="menu">
            <nav>
            <ul>
                <li><a href="home.php">Produits</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="mes_fournisseurs.php">Fournisseurs</a></li>
                <li><a href="clients.php">Clients</a></li>
            </ul>
        </nav> 
        </div>
       
    </header>
    <div>
        <section style="width:90%;margin:auto;">
            <h1 style="color:#161161;text-align:center;">Mes Fournisseurs</h1>
            <div align="right" style="margin-right:120px;">
             <a href="ajout_fournisseur.php" style="text-decoration:none;text-align:right;color:black;padding:8px;border-radius:5px;background:white;border:1px solid #161161;">Nouveau fournisseur</a>
            </div>
            <table class="tab">
                <tr style="text-align:left;">
                    <th>nom</th>
                    <th>adress </th>
                    <th>num_tel</th>
                    <th>Action</th>
                </tr>
                
                <?php include("recup_fournisseur.php"); ?>

            </thead>
            <tbody>
        
            </tbody>
        </table>
        </section>
    </div>
    
</body>
</html>