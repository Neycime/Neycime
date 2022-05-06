<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Liste des contacts</title>
</head>
<body>
    <h1>Liste des contacts</h1>
    <?php
        include 'connexion.php';

        $sql = "SELECT *FROM contact";
        //Prépare la requete
        $select = $co->prepare($sql);
        //Execute la requete
        $select->execute();

		// On converti le résultat de la requete en un tableau PHP
		$contacts = $select->fetchAll();

		// On parcours le tableau PHP de données
		foreach ($contacts as $contact) {
			?>
			<div>
				<h2>
					<?= $contact['prenom']; ?> 
					<?= $contact['nom']; ?> 
				</h2>
				<p>Email : <?= $contact['email']; ?></p>
				<p><?= $contact['message']; ?></p>
				<p><a href="edition.php?id=<?= $contact['id']; ?>">Editer</a></p>
				<hr>
			</div>
			<?php
		}
	?>
</body>
</html>