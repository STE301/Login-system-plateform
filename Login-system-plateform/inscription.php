<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="ajoutMembers.php" method="post" enctype="multipart/form-data">
				<h2>Formulaire d'inscription</h2>
				<div class="form-row">
					<label for="full-name">CNE</label>
					<input type="text" name="cne" id="cne" class="input-text" placeholder="Votre CNE" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Nom</label>
					<input type="text" name="nom" id="nom" class="input-text" placeholder="Votre Nom" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Prénom</label>
					<input type="text" name="prenom" id="prenom" class="input-text" placeholder="Votre Prénom" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Nom d'utilisateur / Pseudo</label>
					<input type="text" name="pseudo" id="pseudo" class="input-text" placeholder="Votre Nom d'utilisateur" required>
					<i class="fas fa-user"></i>
				</div>
				<!--<div class="form-row">
					<label for="full-name">Photo de profil</label>
					<input type="hidden" name="MAX_File_SIZE" value="1024000">
					<input type="file" name="photo" id="photo" class="input-text" placeholder="Votre Photo de profil" required>
					<i class="fas fa-user"></i>
				</div>-->
				<div class="form-row">
					<label for="your-email">Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Votre Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Votre Mot de passe" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Suivant">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>