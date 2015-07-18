<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page de facture</title>
</head>

<body>
	<p>Facture :</p>
		Prénom :<?php echo strip_tags(htmlentities($_POST['prenom'])); ?>. <br>
		Nom :<?php echo strip_tags(htmlentities($_POST['nom'])); ?>.<br>
		Adresse :<?php echo strip_tags(htmlentities($_POST['adresse'])); ?>.<br>
		Numéro de téléphone :<?php echo strip_tags(htmlentities($_POST['num'])); ?>.<br>
		Changement d'infos ? <a href="formulaire.php">cliquez ici</a> pour revenir à la page du formulaire.
<p>		
Vous avez acheté <?php echo $_POST['objet'] ?> au prix de <?php echo $_POST['prix'] ?> €. Merci pour votre achat et à la prochaine.
</p>

<!-- Page footer -->
		<footer class="footer">
			<p>
				Votre adresse ip est : <?php print_r($_SERVER['REMOTE_ADDR']) ?> . Je pourrais vous retrouvez si vous tentez de pirater ce site.
			</p>
		</footer>
	
</body>
</html>