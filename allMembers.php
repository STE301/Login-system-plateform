<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Liste des étudiants </title>
    <style>
        table {
    border-collapse: collapse;
    width: 80%;
    border: solid black 3px;
    margin-left: 10%;
    margin-right: 10%;
    background-color: beige;
}
th, td {
    text-align: left;
    padding: 8px;
    border: solid black 3px;
}
/*tr:nth-child(even){
    background-color: 
}*/
h1{
    text-align:center;
    color: black;
    margin-top: 5%;
}
.tete{
    background-color: #3399FF;
    font-size: 20px;

}
body{
    background-color: beige;
}
button{
    font-size: 18px;
}
    </style>
</head>
<body>
<?php
    require "MySQL.php";

$sql1 = "SELECT * FROM eleves ;";
$res1 = mysqli_query($mysqli,$sql1);

$sql2 = "SELECT * FROM photos ;";
$res2 = mysqli_query($mysqli,$sql2);

?>

<h1>Liste des étudiants</h1>
<br>
        <table>
            <tr class="tete">
                <td>CNE</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
                <td>Photo d'identité</td>
            </tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$res1->fetch_assoc()){
                $data = mysqli_fetch_array($res2);
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['CNE'];?></td>
                <td><?php echo $rows['nom'];?></td>
                <td><?php echo $rows['prenom'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><center><img src="<?php echo $data['filename']; ?>"height="200" width="200"> </center></td>
            </tr>
            <?php
                }
             ?>
        </table> 
        <br>
        <br>
        <center><a href="inscription.php"> <button>Ajouter un nouveau membre</button></a></center> <br> <br>
        <center><a href="bienvenue.php" ><button>Retour</button> </a></center> <br> <br> <br>
</body>
</html>