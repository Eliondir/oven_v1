<?php include_once 'dist/template/header.php' ?>


<?php
		/*On demande a la variable $pdo de preparer la requête sql et d'affecter ce résultat a la variable $stmt*/
		$stmt=$pdo->prepare("SELECT contenu FROM news;");
		/*On execute la varaible $stmt*/
		$stmt->execute();
		/*On créee un tableau avec le echo "<table>" et on affecte chaque nom de champ que l'on souhaite dans le tableau*/
		echo '<div align="center">';
		echo "<table id='table'>";
		echo "<tr id='tab'>";
		echo "<td id='tab'><B>News</B></td>";
		/*Dans une boucle while on lit chaque ligne grâce au stmt->fetch() et on affecte ce résultat a la variable $row*/
		while ($row=$stmt->fetch())
		{
			/*Puis on va lire le résultat de nos champ dans chaque colonne*/
			echo "<tr>";
			/*Dans la requête sql on a mis un as et on a renommé les champ donc on remet ces champ renommé dans chaque colonne*/
			echo "<td id='tab'>$row[contenu]</td>";
			echo "</tr>";
		}
?>

