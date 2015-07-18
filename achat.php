<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page d'achat</title>
</head>

<body>
	<p>Bonjour ! Voici les produits actuellement disponibles :</p>
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
?>
    <p>
    <strong>Objet à vendre</strong> : <?php echo $donnees['nom']; ?><br />
    Prix : <?php echo $donnees['prix']; ?> euros.<br />
    Quantité restante :  <?php echo $donnees['quantite']; ?>.<br />
    <form action="panier.php" method="post">
    <input type="hidden" name="prenom" value="<?php echo $_POST['prenom']; ?>"/>
    <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>"/>
    <input type="hidden" name="adresse" value="<?php echo $_POST['adresse']; ?>"/>
    <input type="hidden" name="num" value="<?php echo $_POST['num']; ?>"/>
    <input type="hidden" name="objet" value="<?php echo $donnees['nom']; ?>"/>
    <input type="submit" name="envoi" value="Acheter" />
    </form>
   </p>
<?php
}

$reponse->closeCursor();

?>
</p>

<!-- Page footer -->
		<footer class="footer">
			<p>
				Votre adresse ip est : <?php print_r($_SERVER['REMOTE_ADDR']) ?> . Je pourrais vous retrouvez si vous tentez de pirater ce site. <br>
				<a href="formulaire.php">Cliquez ici</a> pour revenir à la page du formulaire. <br>
			</p>
		</footer>
	
</body>
</html>