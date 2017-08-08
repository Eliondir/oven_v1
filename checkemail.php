<?php include_once 'dist/template/db.php'; ?>
<?php
header("Content-Type: text/plain");

	
	$stmt=$pdo->prepare("SELECT COUNT(*) as nb FROM membre WHERE email=:email");
	$stmt->Bindparam(':email',$_GET["email"]);
	/*On execute la variable $stmt*/
	$stmt->execute();
	$row=$stmt->fetch();
		if($row["nb"] > 0) {
			echo '1';
		} else {
			echo '0';
		} 
?>