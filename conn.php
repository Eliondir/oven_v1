<?php include_once 'dist/template/header.php'; ?>

<?php
if (isset($_SESSION["id"])) { ?>
	
	<br/>
	
    <div class="container"> 
   <br/>
          <div class="alert alert-dismissable alert-success"> 
                 <p>Vous êtes connecté</p> 
 
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
		$pass=md5($_POST["mdp"]);
		$stmt=$pdo->prepare("SELECT * FROM membre where pseudo=:pseudo;");
		$stmt->Bindparam(':pseudo',$_POST["pseudo"]);
		/*On execute la variable $stmt*/
		$stmt->execute();
		$row=$stmt->fetch();
		if (md5($_POST["mdp"]) == $row["mdp"])
		{
			
			$_SESSION['id'] = $row["id"];?>
			<script type='text/javascript'>
					document.location.replace('conn.php');
			</script><?php
		}
		else
		{?>
			<div class="container">
				<div class="alert alert-dismissable alert-danger"> 
					<p>Erreur, veuillez reesayer en cliquant <a href="connexion.php">ici</a></p> 
				</div>
			</div><?php
		}
		
}	
?>
