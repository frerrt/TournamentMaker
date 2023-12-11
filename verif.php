<?php
session_start() ;	

	// Récupération des données saisies dans le formulaire d’identification
$connexion = $_POST["connexion"];
$login=$_POST["login"] ;

$mdp=$_POST["mdp"] ;

// Connexion au serveur de BDD
include_once("connexion/fonction.php");



// Requête de recherche du mot de passe de l’admin à partir de l’identifiant saisi
$sql="select * from admin where LOGIN='$login' and PASSWD='$mdp'" ;

// Execution de la requête
$resultat=$bdd->query($sql) ;
$rep = $resultat->fetch(PDO::FETCH_BOTH) ;
$nb_lignes= $resultat->rowCount() ;
					
if ($nb_lignes==0) 
// La requête ne renvoie aucun résultat, l'identifiant est inconnu et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
		{
        echo "Erreur d'identifiant ou de mot de passe ou essai d'intrusion cette evenement sera signalé";
		//header("Location: echecRecherche.php");
		}
		else
// La requête renvoie au plus un résultat (l’admin recherché)
		{
        echo "il y a 1 admin qui s'est connecter";
		$_SESSION["admin"]= $rep[0] ;
		$_SESSION["autorisation"]="OK" ;
		$_SESSION["connexion"] = "OK";
		
		header("Location: acceuilAdministrateur.php");
		
		
		}
	
	
	
	
?>