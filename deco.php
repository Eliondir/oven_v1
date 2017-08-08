<?php
	include_once 'dist/template/header.php';
	session_destroy();
?>
<div class="container">
	<div class="alert alert-danger"> 
		<p>Vous êtes deconnecté</p> 
	</div>
</div>

<script type='text/javascript'>
setTimeout(redir, 3000);
function redir() {
	document.location.replace('connexion.php');
}
</script>

 