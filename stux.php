<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="custom.css">
</head>
<div class="container">
	
	<form action="action.php" id="register" method="post">
		
		<div class="row">
			<div class="col-xs-12">
				<div id="errore">
				
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<div class="form-group col-md-6">
				<label for="nom">Nom :</label>
				<input class="form-control" type="text" id="nom" name="nom" required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="prenom">Prenom :</label>
				<input class="form-control" type="text" id="prenom" name="prenom" required>
			</div>
		</div>
		
		<div class="row">
			
			<div class="form-group col-md-6">
				<label for="password_1">Mot de passe :</label>
				<input class="form-control" type="password" id="password_1" name="password_1" required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="password_2">Retaper le mot de passe :</label>
				<input class="form-control" type="password" id="password_2" name="password_2" required>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success pull-right" type="submit">Envoyer le formulaire</button>
			</div>
		</div>
	
	</form>
	
	
	<div class="row">
		<div class="col-xs-12">
			<div id="result">
			
			</div>
		</div>
	</div>
	
	
</div>
<script
	src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
	crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="verifreg.js"></script>
</body>
</html>