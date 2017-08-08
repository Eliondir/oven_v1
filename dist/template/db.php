<?php
	/*try va essayer de se connecter a la base bdformation*/
		try
		{
			/*Permet d'affecter l'hôte (localhost) et la base (bdformation) dans une variable $hostname*/
			$hostname='mysql:host=localhost;dbname=oven';
			/*Sélectionne l'utilisateur sur la base bdformation*/
			$utilisateur='root';
			/*Le mot de passe pour la base*/
			$motdepasse='';
			/*Permet de se connecter a la base bdformation avec le compte root et le mdp et on l'affecte a la variable $pdo*/
			$pdo=new PDO($hostname, $utilisateur, $motdepasse);
			$pdo->exec("SET CHARACTER SET utf8");
	
		}
		/*Si on arrive pas a se connecter a la base on passe a catch et on affecte a la variable $e l'exception*/
		catch (exception $e)
		{
			/*Ce message ne s'affiche que si on arrive pas a se conneter a la base ainsi que un code erreur qu'on demande a la variable $e grâce au getmessage()*/
			echo 'connection a la base impossible',$e->getMessage();
			/*On demande au code de s'arrêter*/
			die();
		}
?>
