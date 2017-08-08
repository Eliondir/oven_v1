<?php include_once 'dist/template/header.php'; ?>

<?php
		$event=$pdo->prepare("SELECT event.nom as nom, event.contenu as contenu, event.dateDebut as dateDebut, event.dateFin as dateFin , event.heureDebut as heureDebut, event.heureFin as heureFin, event.id_membre as id_createur, membre.pseudo as pseudo, jeux.nom as jeux FROM event INNER JOIN membre ON event.id_membre=membre.id INNER JOIN jeux on event.id_jeux=jeux.id where event.id=:id;");
		$event->Bindparam(':id',$_GET["id"]);
		$event->execute();
		$eventVal=$event->fetch();?>
	<div class="container">
<?php
		echo '<header class="page-header"><h1>'.$eventVal["nom"].'</h1></header>';
		echo '<div class="row"><div class="col-sm-offset-1 col-sm-3">'.$eventVal["jeux"].'</div></div>';
		echo '<div class="row"><div class="col-sm-offset-1 col-sm-4 pull-right"> du <strong>'.$eventVal["dateDebut"].'</strong> à <strong>'.$eventVal["heureDebut"].'</strong> au <strong>'.$eventVal["dateFin"].'</strong> à <strong>'.$eventVal["heureFin"].'</strong>.</div></div>';
		echo '<div class="row"><div class="col-sm-2"><img src="dist/img/gw2.jpg" class="img-responsive"></div><div class="col-sm-10">'.$eventVal["contenu"].'</div></div><br/>';
		echo '<div class="row"><small class="pull-right">Proposé par <strong>'.$eventVal["pseudo"].'</strong></small></div><br/>';
?>  
	<?php
		$membre=$pdo->prepare("SELECT membre.pseudo as pseudo, event_membre.id_membre as id_membre, event_membre.info as info , event_membre.heureInscri as heureInscri, event_membre.presence as presence FROM event_membre INNER JOIN membre ON event_membre.id_membre=membre.id where event_membre.id=:id;");
		$membre->Bindparam(':id',$_GET["id"]);
		$membre->execute();?>
		<div class="row">
			<section class="col-md-6 table-responsive">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>Pseudo</th>
							<th>Heure Inscription </th>
							<th>Info</th>
							<th>Présence</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if(isset($_SESSION["id"]) && $_SESSION["id"]==$eventVal["id_createur"])
						{
							echo '<form id="present" action="presence.php" method="POST">';
						}
						while($membreVal=$membre->fetch())
						{
							if($membreVal["presence"]==1)
							{
								$color='green';
							}
							else
							{
								$color='red';
							}
						echo '<tr>';
						echo '<td>'.$membreVal["pseudo"].'</td>';
						echo '<td>'.$membreVal["heureInscri"].'</td>';
						echo '<td>'.$membreVal["info"].'</td>';
						echo '<td>';
						if(isset($_SESSION["id"]) && $_SESSION["id"]==$eventVal["id_createur"])
						{
							echo '<div class="checkbox"><label><input type="checkbox" value="'.$membreVal["id_membre"].'" name="presence[]" id="presence">Présent/Absent</label> </div>';
						}
						echo '<i class="material-icons" style="color:'.$color.'">person</i></td>';
						echo '</tr>';
						}
						?>
					</tbody>
				</table>
				<?php
				if(isset($_SESSION["id"]) && $_SESSION["id"]==$eventVal["id_createur"])
				{
					echo '<input type="hidden" id="id_event" name="id_event" value="'.$_GET["id"].'">';
					echo '<button id="valider" type="submit" class="btn btn-primary btn-lg">Valider</button>';
					echo '</form>';
				}
				?>
			</section>
			<section class="col-md-6">
				<input type="hidden" id="id_event" name="id_event" value="<?php echo $_GET["id"];?>">
			<?php 
			$verif=$pdo->prepare("SELECT COUNT(*) as total FROM event_membre where (id=:event_id) AND (id_membre=:id_membre)");
			$verif->Bindparam(':event_id',$_GET["id"]);
			$verif->Bindparam(':id_membre',$_SESSION["id"]);
			$verif->execute();
			$verifVal=$verif->fetch();
			
			$note=$pdo->prepare("SELECT note FROM event where id=:event_id");
			$note->Bindparam(':event_id',$_GET["id"]);
			$note->execute();
			$noteVal=$note->fetch();
			if(isset($_SESSION["id"]) && $_SESSION["id"]==$eventVal["id_createur"])
			{
				if($noteVal["note"]==NULL) 
				{?>			
				<form action="noteevent.php" id="noteevent" method="POST" class="well">
					<div class="form-group col-md-12">
						<label for="note">Compte rendu de l'événement :</label>
						<textarea class="form-control" type="textarea" id="note" name="note" rows="5"> </textarea>
					</div>
					<button id="postnote" type="submit" class="btn btn-primary btn-lg">Enregistrer la note</button>		
				</form>
				<?php
				}
				else
				{?>
					<header class="page-header"><h4>Compte rendu :</h4></header>
					<div class="row">
				<?php	echo '<div class="col-md-12">'.$noteVal["note"].'</div>';
					echo '</div>';
				}
			}
			elseif($verifVal["total"]>=1)
			{ ?>
				 <button id="desinscription" type="button" class="btn btn-primary btn-lg">Se désinscrire de l'événement</button>
			<?php }
			else { ?>
				<form action="inscrievent.php" id="inscrievent" method="POST" class="well">
					<div class="form-group col-md-12">
						<label for="info">Information supplémentaire pour votre inscription (optionnelle) :</label>
						<textarea class="form-control" type="textarea" id="info" name="info" rows="5"> </textarea>
					</div>
					<button id="inscription" type="submit" class="btn btn-primary btn-lg">S'inscrire à l'événement</button>		
				</form>
			
			<?php } ?>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div id="result">
			
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	$('#inscrievent').on("submit",function(e) {
		e.preventDefault();
		id_event	= $("#id_event").val();
		info		= $("#info").val();
        $.ajax({
						url: 'inscrievent.php',
						type: 'POST',
						data: 'id_event=' + id_event + '&info=' + info,
						success: function(data)
						{
							alert("Vous êtes inscrit à l'événement");
							location.reload();
						},
						error : function(resultat, statut, erreur)
						{
							$("#error").html(resultat + "<br/>" + statut + "<br/>" + erreur);
						}
					});
    });
	$('#desinscription').click(function() {
		id_event	= $("#id_event").val();
        $.ajax({
						url: 'desinscrievent.php',
						type: 'POST',
						data: 'id_event=' + id_event,
						success: function(data)
						{
							alert("Vous vous êtes retiré de l'événement");
							location.reload();
						},
						error : function(resultat, statut, erreur)
						{
							$("#error").html(resultat + "<br/>" + statut + "<br/>" + erreur);
						}
					});
    });
	$('#noteevent').on("submit",function(e) {
		e.preventDefault();
		id_event	= $("#id_event").val();
		note		= $("#note").val();
        $.ajax({
						url: 'noteevent.php',
						type: 'POST',
						data: 'id_event=' + id_event + '&note=' + note,
						success: function(data)
						{
							alert("La note a bien été publiée");
							location.reload();
						},
						error : function(resultat, statut, erreur)
						{
							$("#error").html(resultat + "<br/>" + statut + "<br/>" + erreur);
						}
					});
    });
	</script>