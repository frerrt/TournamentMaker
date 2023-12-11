<?php
//appel du fichier contenant les infos de la connexion

require "config.php";

//fonction de la connexion

	try
	{
		 $bdd= new PDO('mysql:host=localhost;dbname=tm','root','');
	}
    catch (PDOException $e)
	{
		echo "probleme de connecion à la BDD <br>".$e->getMessage();
	}
	return $bdd;


?>

