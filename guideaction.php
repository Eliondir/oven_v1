<?php
 include_once 'dist/template/header.php'; ?>

<?php
		$stmt=$pdo->prepare("INSERT INTO guide (titre, contenu, id_jeux, id_membre) VALUES (:titre,:contenu,:id_jeux,:id_membre)");
		$stmt->Bindparam(':titre',$_POST["titre"]);
		$stmt->Bindparam(':contenu',nl2br($_POST["contenu"]));
		$stmt->Bindparam(':id_jeux',$_POST["jeux"]);
		$stmt->Bindparam(':id_membre',$_SESSION["id"]);
		$stmt->execute();
		$stmt=$pdo->prepare("select max(id) as id from guide");	
		$stmt->execute();
		$row=$stmt->fetch();
?>

<div class="container"> 
   <br/>
		<div class="row">
          <div class="alert alert-success"> 
                 <p>Votre guide est en ligne </p> 
 
                 <?php echo '<p><a href="guide.php?id='.$row["id"].'" class="btn btn-primary btn-lg" role="button" title="voir guide">Voir votre guide</a></p>';?>
 
           </div> 
		   
 
</div>           
