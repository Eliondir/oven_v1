<?php include_once 'dist/template/header.php' ?>

<?php
		$guide=$pdo->prepare("SELECT * FROM jeux;");
		$guide->execute();
if (isset($_SESSION["id"]))
{?>
<div class="container">
	
	<form action="eventaction.php" id="createevent" method="POST" class="well">
		
		<div class="row">
			
			<div class="form-group col-md-6">
				<label for="titre">Titre de l'événement :</label>
				<input class="form-control" type="text" id="titre" name="titre" required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="jeux">Jeux :</label>
				<select class="form-control" id="jeux" name="jeux" required>
					<?php
						while ($row=$guide->fetch())
						{
							echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
						}?>
				</select>
			</div>
		</div>
		<div class="row">
			
			<div class="form-group col-md-3">
				<label for="dateDebut">Date début :</label>
				<input class="form-control" type="date" min="<?php echo date("Y-m-d");?>" name="dateDebut" id="dateDebut" required>
			</div>
			
			<div class="form-group col-md-3">
				<label for="heureDebut">Heure début :</label>
				<input class="form-control" type="time" name="heureDebut" id="heureDebut" required>
			</div>
			
			<div class="form-group col-md-3">
				<label for="dateFin">Date fin :</label>
				<input class="form-control" type="date" min="<?php echo date("Y-m-d");?>" name="dateFin" id="dateFin" required>
			</div>
			
			<div class="form-group col-md-3">
				<label for="heureFin">Heure fin :</label>
				<input class="form-control" type="time" name="heureFin" id="heureFin" required>
			</div>
			
		</div>
		
		<div class="row">
			
			<div class="form-group col-md-12">
				<label for="contenu">Contenu :</label>
				<textarea class="form-control" type="textarea" id="contenu" name="contenu" rows="50" required> </textarea>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success pull-right" type="submit">Poster l'événement</button>
			</div>
		</div>
	
	</form>
	
</div>
<?php 
} 
else
{
?>
	<div class="container">
		<div class="row">
          <div class="alert alert-success"> 
                 <p>Vous n'êtes pas connecté, merci de vous connecter afin d'accéder au contenu de cette page! </p> 
 
                 <p><a href="connexion.php" class="btn btn-primary btn-lg" role="button" title="voir guide">Connexion</a></p>
 
           </div>
		 </div>
	</div>
<?php 
}
?>