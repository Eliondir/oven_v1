<?php include_once 'dist/template/header.php'; ?>

<?php
		$stmt=$pdo->prepare("INSERT INTO event_membre (id_membre, id, info) VALUES (:id_membre,:id, :info)");
		$stmt->Bindparam(':id_membre',$_SESSION["id"]);
		$stmt->Bindparam(':id',$_POST["id_event"]);
		$stmt->Bindparam(':info',$_POST["info"]);
		$stmt->execute();
?>