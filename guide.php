<?php include_once 'dist/template/header.php' ?>

<?php
		$guide=$pdo->prepare("SELECT guide.titre AS titre, guide.contenu as contenu, guide.dateP as dateP, membre.pseudo as pseudo, jeux.nom as jeux  FROM guide INNER JOIN membre ON guide.id_membre=membre.id INNER JOIN jeux on guide.id_jeux=jeux.id where guide.id=:id;");
		$guide->Bindparam(':id',$_GET["id"]);
		$guide->execute();
		$guideVal=$guide->fetch();?>
	<div class="container">
<?php
		echo '<header class="page-header"><h1>'.$guideVal["titre"].'</h1></header>';
		echo '<div class="row"><div class="col-sm-offset-1 col-sm-3">'.$guideVal["jeux"].'</div></div>';
		echo '<div class="row"><div class="col-sm-2"><img src="dist/img/gw2.jpg" class="img-responsive"></div><div class="col-sm-10">'.$guideVal["contenu"].'</div></div><br/>';
		echo '<div class="row"><small class="pull-right">Ecrit par <strong>'.$guideVal["pseudo"].'</strong> le <strong>'.$guideVal["dateP"].'</strong></small></div><br/>';
?>  
	</div>