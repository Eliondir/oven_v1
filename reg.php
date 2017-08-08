<?php include_once 'dist/template/header.php'; ?>

<?php
if (isset($_SESSION["id"])) { ?>
	
	<br/>
	
    <div class="container"> 
   <br/>
          <div class="alert alert-dismissable alert-success"> 
                 <p>Vous êtes Enregistré</p> 
 
                 <p><button id="confirmer" type="button" class="btn btn-primary">Confirmer</button></p> 
 
           </div> 
 
            <script> 
                  $('#confirmer').click(function(){ 
                        $('.alert').alert('close'); 
                  }); 
            </script> 
    </div>           
    </div>
	<button class="btn btn-warning" type="submit"><a href="deco.php">deconnection</a></button>
<?php 
}
else
{
		$pass=md5($_POST["password"]);
		$stmt=$pdo->prepare("INSERT INTO membre(pseudo, mdp, email, dateNaissance) VALUES (:pseudo, :mdp,:email,:dateNaissance)");
		$stmt->Bindparam(':pseudo',$_POST["pseudo"]);
		$stmt->Bindparam(':mdp',$pass);
		$stmt->Bindparam(':email',$_POST["email"]);
		$stmt->Bindparam(':dateNaissance',$_POST["naissance"]);
		/*On execute la variable $stmt*/
		$stmt->execute();
		
		$view=$pdo->prepare("SELECT id FROM membre WHERE pseudo=:pseudo");
		$view->Bindparam(':pseudo',$_POST["pseudo"]);
		$view->execute();
		$row=$view->fetch();
		$_SESSION['id'] = $row["id"];?>
		<!--<script type='text/javascript'>
			document.location.replace('reg.php');
		</script>-->
		<?php
		
		
}	
?>