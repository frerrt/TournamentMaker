<?php
function connexionPDO($parametre)
{
	include_once($parametre);
	$bdd = "mysql:host=".HOST.";dbname=".BASE.";charset=utf8";
	try
	{
		$idconnexion = new PDO($bdd, USER, PASS);
		return $idconnexion;
	}
	catch(PDOException $exception)
	{
		echo "Echec de la connexion ".$exception->getMessage();
		return FALSE;
	}
}
?>