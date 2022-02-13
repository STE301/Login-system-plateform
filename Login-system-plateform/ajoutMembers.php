<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>EnsaT : Infos</title>
    <style>
      body{
            background-color: #66CCCC ;
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
<?php   
if(isset($_POST['cne']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){
    session_start();
    $cne = $_POST['cne'];
    $nom   = $_POST['nom'];
    $prenom   = $_POST['prenom'];
    $pseudo  = $_POST['pseudo'];
    $email   = $_POST['email']; 
    $password   = $_POST['password']; 
   
//paramètres d'accès au serveur base de données MySQL    
  require_once "MySQL.php";
// Create connection and Check connection
if (!$mysqli) {
  echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
}else{
//Connected successfully to MYSQL server
/* requête à executer */
$sql1 = "INSERT INTO comptes VALUES ('','$pseudo','$password');";
$result1 = mysqli_query($mysqli,$sql1);

$sql2 = "INSERT INTO eleves  VALUES ('','$cne','$nom','$prenom','$email');";
$result2 = mysqli_query($mysqli,$sql2);

  $_SESSION['user'] = $_POST['pseudo'];
}
}
?>
<center><div class="main">
<h1> Finaliser mon inscription </h1> <br>
<a  href="image.php"> <button type="submit" value="Upload an Image" class="bouton">Ma photo de profil</button></a>
<br> <br> <br>
<a  href="inscription.php"> <button type="submit" value="Retour" class="bouton">Retour</button> </a>
</div>  
</center>
</body>
</html>

