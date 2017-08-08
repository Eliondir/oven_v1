

<div class="row">
			<div class="col-xs-12">
				<div id="errore">
				</div>
			</div>
		</div>
<form action="reg.php" id="register" method="post" class="well">
  <legend>Création de compte</legend>
  
	<div id="mail" class="form-group">
      <label for="email">Email : </label>
      <input id="email" type="email" class="form-control" name="email" required>
    </div>
	
    <div id="surnom" class="form-group">
      <label for="pseudo">Pseudo : </label>
      <input id="pseudo" type="text" class="form-control" name="pseudo" maxlength="32" required>
    </div>
	
    <div id="pass1" class="form-group">
      <label for="mdp1">Mot de passe : </label>
      <input id="mdp1" type="password" class="form-control" name="mdp1" required>
    </div>
	
	<div id="pass2" class="form-group" >
      <label for="mdp2">Confirmer mot de passe : </label>
      <input id="mdp2" type="password" class="form-control" name="mdp2" required>
    </div>
	
	<div class="form-group">
      <label for="naissance">Date de Naissance</label>
      <input id="naissance" type="date" class="form-control" name="naissance" required>
    </div>
    <button class="btn btn-primary" type="submit">S'inscrire</button>
	
</form>
	<div class="row">
		<div class="col-xs-12">
			<div id="result">
			</div>
		</div>
	</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="verifreg.js"></script>
</body>
</html>