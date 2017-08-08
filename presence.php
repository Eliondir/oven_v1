<?php include_once 'dist/template/header.php'; ?>

<?php
	$event=$_POST["id_event"];
	foreach ($_POST["presence"] as &$value) {
		echo $value;
		$presence=$pdo->prepare("UPDATE `event_membre` SET presence = 1 WHERE id_membre=:id_membre AND id=:id_event");
		$presence->Bindparam(':id_membre',$value);
		$presence->Bindparam(':id_event',$event);
		$presence->execute();
	}
	header('Location: gestionevent.php?id='.$event); 

?>