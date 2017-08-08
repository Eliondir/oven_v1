<?php include_once 'dist/template/header.php'; ?>

<?php
		$stmt=$pdo->prepare("UPDATE event SET note=:note WHERE id=:id_event");
		$stmt->Bindparam(':id_event',$_POST["id_event"]);
		$stmt->Bindparam(':note',nl2br($_POST["note"]));
		$stmt->execute();
?>