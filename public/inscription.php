<?php

include "lib/connexion.php";

// table utilisateurs
if( isset($_POST['inscrire']) ) {

	$query = $dbh->prepare('INSERT INTO utilisateurs(civilite, nom, prenom, telephone, email, login, password) VALUES (:civilite,:nom, :prenom, :telephone, :email, :login, :password)');
	$query->bindValue('civilite', $_POST['civilite'], PDO::PARAM_INT);
	$query->bindValue('nom', $_POST['nom'], PDO::PARAM_STR);
	$query->bindValue('prenom', $_POST['prenom'], PDO::PARAM_STR);
	$query->bindValue('telephone', $_POST['telephone'], PDO::PARAM_STR);
	$query->bindValue('email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
	$query->bindValue('password', $_POST['password'], PDO::PARAM_STR);

	$query->execute();
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>

<form method="POST" action="">
<select name="civilite" id="">
	<option value="0"></option>                  
	<option value="1">M.</option>                  
	<option value="2">Mme</option>                  
	<option value="3">Mlle</option>                  
</select><br>
<input type="text" name="nom" placeholder="Nom"><br>
<input type="text" name="prenom" placeholder="Prenom"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="telephone" placeholder="telephone"><br>
<input type="text" name="login" placeholder="Login"><br>
<input type="password" name="password" placeholder="Password">
<input type="submit" name="inscrire" value="S'inscrire">

</form>

</body>
</html>