<?php include_once 'dist/template/header.php'; ?>
<div class="container">
<div class="row">
			<div class="col-xs-12">
				<div id="errore">
				</div>
			</div>
		</div>
<form action="check.php" id="register" method="get" class="col-lg-offset-3 col-lg-6 well">
  <legend>Création de compte</legend>
  
	
	
    <div id="surnom" class="form-group">
      <label for="pseudo">Pseudo : </label>
      <input id="pseudo" type="text" class="form-control" name="pseudo" maxlength="32" required>
    </div>
	
    
	
    <button class="btn btn-primary" type="submit">S'inscrire</button>
</form>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="test.js"></script>