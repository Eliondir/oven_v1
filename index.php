<!DOCTYPE html>
<?php include_once 'dist/template/header.php' ?>
<html>
  <head>
	<style type="text/css">
	.col-lg-2 { line-height: 100px; }
    .col-lg-5 { line-height: 200px; }
    .col-lg-12 { line-height: 80px; }
	[class*="col-"], footer {
  background-color: white;
  border: 2px solid black;
  border-radius: 6px;
  line-height: 40px;
  text-align: center;
	}
  </style>
  </head>
  <body background="dist/img/gw240.jpg" style="background-size: 100%;">

		<div class="container">
  <div class="row">
    <div class="col-md-12">Bienvenue sur le site des ovens
    <div class="row">
      <div class="col-md-8">Second niveau avec 8 colonnes
      </div>
      <div class="col-md-4">
	  <?php include_once 'sidebar.php' ?>
	  </div>
    </div>
  </div>
</div>
  </body>
</html>