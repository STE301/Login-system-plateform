<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAT Plateforme</title>
    <style>
        body{
            background-color: #3399FF ;
        }
        .main{
            border: solid 1px black;
            width: 40%;
            margin-left: 25%;
            margin-right: 30%;
            margin-top: 10%;
            padding: 5%;
            background-color:beige; 
        }
        .bouton{
            font-size: 20px;
        }

    </style>
</head>
<body>
    <div class="main">
    <h1 align='center'>Bienvenue sur la plateforme de l'ENSAT !</h1> <br/> <br>
    <center><a href="allMembers.php"> <button class="bouton">Voir la liste des étudiants</button></a></center> <br> <br>
    <form action="deconnexion.php" method="post">
    <center><input type="submit" class="bouton" name="deconex" value="Déconnexion"></center>
    </form>
    </div>
</body>
</html>