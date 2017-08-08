<?php 
	$event=$pdo->prepare("SELECT event.id as id, event.nom as nom , event.dateDebut as dateDebut, event.heureDebut as heureDebut, jeux.nom as jeux from event INNER JOIN jeux ON jeux.id=event.id_jeux order by dateDebut, heureDebut limit 0,3;");
	$event->execute();?>
<div class="row">
	<div class="event">
		<div class="col-md-12"><h3>Event</h3>
			<ul>
			<?php 
			while ($row=$event->fetch())
			{
				echo '<li>'.$row["jeux"].'|'.$row["nom"].'|'.$row["dateDebut"].'|'.$row["heureDebut"].'| <a href="gestionevent.php?id='.$row["id"].'"><i class="material-icons" style="font-size:25px;color:red">person_add</i></a></li>';
			}
				
			?>
			</ul>
			<a href="event.php"><b><i class="material-icons" style="color:#58D3F7">add_circle</i>Ajouter un évenement</b></a>
		</div>
	</div>
</div>
<?php
if(isset($_SESSION["id_grade"]) && $_SESSION["id_grade"]>=2)
{?>
	<div class="row">
		<div class="col-md-12">
			<iframe src="https://discordapp.com/widget?id=220254067383992322&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		</div>
	</div>
<?php } ?>