<?php include_once 'dist/template/header.php'; ?>

<?php
		$stmt=$pdo->prepare("DELETE FROM `event_membre` WHERE id_membre=:id_membre AND id=:id;");
		$stmt->Bindparam(':id_membre',$_SESSION["id"]);
		$stmt->Bindparam(':id',$_POST["id_event"]);
		$stmt->execute();
?>