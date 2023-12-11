<?php

//constantes de connexion
define("HOTE", 'localhost') ;
define("BDD", 'tm') ;
define("UTILISATEUR", 'root') ;
define("MDP", '') ;

//fonction de connexion

function connect()
{
	try
	{
		$bdd= new PDO('mysql:host='.HOTE.';dbname='.BDD , UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8')) ;
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
		return $bdd ;
	}
	catch(PDOException $e)
	{
		echo "problème de connexion à la BDD <br>". $e->getMessage() ;
	}

	
}


?>
