<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page d'achat</title>
</head>
<body>
	<p>Bonjour !</p>
	<?php
	if (isset($_POST['prenom']) AND $_POST['nom'] AND $_POST['adresse'] AND $_POST['num']) 
	{
		?>
		<p>Prénom : <?php echo strip_tags(htmlentities($_POST['prenom'])); ?> !</p> 
		<p>Nom : <?php echo strip_tags(htmlentities($_POST['nom'])); ?> !</p>
		<p>Adresse : <?php echo strip_tags(htmlentities($_POST['adresse'])); ?> !</p>
		<p>Numéro de téléphone : <?php echo strip_tags(htmlentities($_POST['num'])); ?> !</p>
		<p>Changement d'infos ? <a href="formulaire.php">clique ici</a> pour revenir à la page du formulaire.</p>
		<?php
	}else 
	{
		echo '<p>Veuillez remplir tous les champs sur la page du <a href="formulaire.php">formulaire</a>.</p>';
	}
	?>
		<!-- Page footer -->
		<footer class="footer">
			<p>
				Votre adresse ip est : <?php print_r($_SERVER['REMOTE_ADDR']) ?> . Je pourrais vous retrouvez si vous tentez de pirater ce site.
			</p>
		</footer>
	
</body>
</html>