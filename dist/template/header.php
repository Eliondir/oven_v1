<!DOCTYPE html>
<?php
session_start() ;
include_once 'db.php';
if (isset($_SESSION["id"]) && !isset($_SESSION["pseudo"])) {
	$info = $pdo->prepare("SELECT membre.pseudo AS pseudo, membre.email AS email ,membre.image AS image, membre.dateNaissance AS dateNaissance, grade.nom AS grade, membre_grade.id_grade AS id_grade
	FROM membre
	INNER JOIN membre_grade ON membre.id=membre_grade.id 
	INNER JOIN grade ON membre_grade.id_grade=grade.id
	WHERE membre.id=:id;");	
	$info->Bindparam(':id',$_SESSION["id"]);
	$info->execute();
	$val=$info->fetch();
	$_SESSION["pseudo"]=$val["pseudo"];
	$_SESSION["email"]=$val["email"];
	$_SESSION["grade"]=$val["grade"];
	$_SESSION["image"]=$val["image"];
	$_SESSION["dateNaissance"]=$val["dateNaissance"];
	$_SESSION["id_grade"]=$val["id_grade"];
}	
?>
<html>
  <head>
	<title> Oven </title>
	<meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
	<title> Oven </title>
	.col-lg-2 { line-height: 100px; }
    .col-lg-5 { line-height: 200px; }
    .col-lg-12 { line-height: 80px; }
  </style>
  <link rel="icon" href="dist/img/oven.ico" />
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
    <a class="navbar-brand" href="index.php">Ombrevent</a>
  </div>
   <ul class="nav navbar-nav">
    <li class="active"> <a href="#">Accueil</a> </li>
    <li> <a href="#">Nous</a> </li>
	<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Les guides <span class="caret"></span></a>
          <ul class="dropdown-menu">
		  <?php $stmt=$pdo->prepare("SELECT id, titre FROM guide;");
		/*On execute la varaible $stmt*/
		$stmt->execute();
		while ($row=$stmt->fetch())
		{
			echo '<li><a href="guide.php?id='.$row["id"].'">'.$row["titre"].'</a></li>';
		}
		if (isset($_SESSION["id"]))
		{
		  echo '<li><a href="guidecreate.php">Créer un guide</a></li>';
		}
		?>
          </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <?php 
		if(isset($_SESSION["id"])){
			echo '<li><a href="deco.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>';
			echo '<li><p class="navbar-text"> Bonjour '.$_SESSION["pseudo"].'&nbsp;</p></li>';
		}
        else{
			echo '<li><a href="register.php" data-toggle="modal" data-target="#infos"><span class="glyphicon glyphicon-user"></span> Créer un compte</a></li>';
			echo '<li><a href="connexion.php" data-toggle="modal" data-target="#infos"><span class="glyphicon glyphicon-log-in"></span> Se connecter &nbsp; &nbsp;</a></li>';?>
			<div class="modal fade" id="infos">
        <div class="modal-dialog">  
          <div class="modal-content"></div>  
        </div> 
      </div>
      </div>
	  <?php
		}
      ?>
    </ul>
	</div>
</nav>
<script>
$("body").on("hidden.bs.modal", ".modal", function () {
          $(this).removeData("bs.modal");
      });
</script>


	
