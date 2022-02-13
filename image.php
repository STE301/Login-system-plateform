<!DOCTYPE html>
<html>
<head>
<title>Photo de profil</title>
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
    <center>
<div class="main">
<h1> Choisir ma photo de profil </h1> <br>
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="file"  name="uploadfile" value=""/> <br> <br> <br>
    <button type="submit" class="bouton" name="upload">S'inscrire</button>   
  </form>
</div>
</center>
</body>
</html>

<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])){
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = $filename ;
          
    $db = mysqli_connect("localhost", "root", "", "espace_etudiant");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO photos (filename) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
      header('location:bienvenue.php');
    }
?>