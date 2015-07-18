<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Formulaire client</title>
</head>
<body>

	<p>
		Bonjour, infos please !<br />
	</p>
	<form action="achat.php" method="post">
		<p>
			Prénom :
		</p>
		<p>
			<input type="text" name="prenom"/>
		</p>
		<p>
			Nom :
		</p>
		<p>
			<input type="text" name="nom"/>
		</p>
		<p>
			Adresse :
		</p>
		<p>
			<input type="text" name="adresse"/>
		</p>
		<p>
			Numéro de téléphone:
		</p>
		<p>
			<input type="text" name="num"/>
		</p>
		<p>
			<input type="submit" name="envoi" value="Valider" />
		</p>
	</form>
</body>
</html>