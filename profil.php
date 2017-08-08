<?php include_once 'dist/template/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php 
				echo '<img src="'.$_SESSION["image"].'" class="img-rounded img-responsive">';
			?>
		</div>
		<div class="col-md-4">
			<?php
				echo '<div class="col-md-4">'.$_SESSION["pseudo"].'</div>';
				echo '<div class="col-md-4">'.$_SESSION["dateNaissance"].'</div>';
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<?php 
				echo '<div class="col-md-12"><b>Grade : </b>'.$_SESSION["grade"].'</div>';
			?>
		</div>
	</div>
</div>