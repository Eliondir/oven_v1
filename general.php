<?php include_once 'dist/template/header.php'; ?>

<img src="http://pm1.narvii.com/5725/ec98aec2ce4c18970b0c167b28f8c4909348201e_hq.jpg" alt="Votre photo de profil" width="200" height="200" class="img-rounded"/>
<br/>
<?php
		/*On demande a la variable $pdo de preparer la requête sql et d'affecter ce résultat a la variable $stmt*/
		$stmt=$pdo->prepare("SELECT * FROM membre;");
		/*On execute la variable $stmt*/
		$stmt->execute();
		$row=$stmt->fetch();
		echo "$row[pseudo]<br/>";
		echo "$row[dateNaissance]";
	?>
	