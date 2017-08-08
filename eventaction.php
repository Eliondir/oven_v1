<?php include_once 'dist/template/header.php'; ?>

<?php
		$stmt=$pdo->prepare("INSERT INTO event (nom, contenu, dateDebut, heureDebut, dateFin, heureFin, id_jeux, id_membre) VALUES (:nom, :contenu, :dateDebut, :heureDebut, :dateFin, :heureFin, :id_jeux, :id_membre)");
		$stmt->Bindparam(':nom',$_POST["titre"]);
		$stmt->Bindparam(':dateDebut',$_POST["dateDebut"]);
		$stmt->Bindparam(':heureDebut',$_POST["heureDebut"]);
		$stmt->Bindparam(':dateFin',$_POST["dateFin"]);
		$stmt->Bindparam(':heureFin',$_POST["heureFin"]);
		$stmt->Bindparam(':contenu',nl2br($_POST["contenu"]));
		$stmt->Bindparam(':id_jeux',$_POST["jeux"]);
		$stmt->Bindparam(':id_membre',$_SESSION["id"]);
		$stmt->execute();
		$stmt=$pdo->prepare("select max(id) as id from event");	
		$stmt->execute();
		$row=$stmt->fetch();
?>
<div class="container"> 
   <br/>
		<div class="row">
          <div class="alert alert-success"> 
                 <p>Votre événement est en ligne </p> 
 
                 <?php echo '<p><a href="gestionevent.php?id='.$row["id"].'" class="btn btn-primary btn-lg" role="button" title="voir event">Voir votre événement</a></p>';?>
 
           </div> 
		   
 
</div>         