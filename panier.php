<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page de panier</title>
</head>

<body>
	<p>Bonjour !</p>
		Prénom :<?php echo strip_tags(htmlentities($_POST['prenom'])); ?>. <br>
		Nom :<?php echo strip_tags(htmlentities($_POST['nom'])); ?>.<br>
		Adresse :<?php echo strip_tags(htmlentities($_POST['adresse'])); ?>.<br>
		Numéro de téléphone :<?php echo strip_tags(htmlentities($_POST['num'])); ?>.<br>
		Changement d'infos ? <a href="formulaire.php">cliquez ici</a> pour revenir à la page du formulaire.
<p>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=miniprojet;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM articles');

while ($donnees = $reponse->fetch())
{
if($_POST['objet']==$donnees['nom'])
{
?>
    <p>
    <strong>Vous voulez acheter</strong> : <?php echo $donnees['nom']; ?><br />
    Prix : <?php echo $donnees['prix']; ?> euros.<br />
    <form action="facture.php" method="post">
    <input type="hidden" name="prenom" value="<?php echo $_POST['prenom']; ?>"/>
    <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>"/>
    <input type="hidden" name="adresse" value="<?php echo $_POST['adresse']; ?>"/>
    <input type="hidden" name="num" value="<?php echo $_POST['num']; ?>"/>
    <input type="hidden" name="objet" value="<?php echo $donnees['nom']; ?>"/>
    <input type="hidden" name="prix" value="<?php echo $donnees['prix']; ?>"/>
    <input type="submit" name="envoi" value="Payer" />
    </form>
   </p>

<?php
}
}

$reponse->closeCursor();

?>
</p>

<!-- Page footer -->
		<footer class="footer">
			<p>
				Votre adresse ip est : <?php print_r($_SERVER['REMOTE_ADDR']) ?> . Je pourrais vous retrouvez si vous tentez de pirater ce site.
			</p>
		</footer>
	
</body>
</html>