<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Equipestyle.css">
    <title>TOURNAMENT MAKER</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive" class="scrollbar scrollbar-black bordered-black square">



<div id="home">
    <section class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"><img style="height:50px;width:50px;margin-top:30px;" src="../img/logo.jpg"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Planning
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="planning.html">Mondial</a></li>
                  <li><a class="dropdown-item" href="planning.html">National</a></li>
                  <li><a class="dropdown-item" href="planning.html">Regional</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="main" aria-current="page" href="Equipes.html">Equipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Page2ClassementAP.html">Classement</a>
              </li>
            </ul>
          </div>
          <a style="margin-top:1.6em;" class="butnn" href="formulaire.html" role="button">Connexion</a>
        </div>
      </nav>
    </section>
    </div>
<?php
include_once("connexion/fonction.php");


if(!$bdd)
{
	exit();
}
else
{

	if(!$bdd)
	{
		$message_erreur = $bdd->errorInfo();
		echo "Lecture impossible, code = ".$bdd->errorCode()."  ".$message_erreur[2];
	}
	else
	{
		//Affichage du nombre de equipes
		?>
		<center>
		<font color="blue">
		<B>
		<?php
		echo "Il y a : ".$articles->rowCount()." equipes(s)";
		?>
		</B>
		</font>
		<br />
	  <?php $articles = $bdd->query('SELECT * FROM equipe');?>
      <?php while($a = $articles->fetch()) { ?>
				<?php
				//requête
				$sql="select * from equipes " ;
						
				//execution de la requête
				$resultat=$bdd->query($sql) ;
				
				 //affichage des resultats dans un objet
				?>
					<div class="inline-block">
						<div class="card">
							<a href="<?= $a['ID'] ?>">
							<img height="200" width="30" class="card-img-top" src="<?= $a['LOGO'] ?>" >
							<h1 style="text-align:center;color:#000;"><?= $a['NOM'] ?></h1>
							<p style="margin-left:75px;font-size:25px;color:#000;"><?= $a['DESCRIPTION'] ?></p>
						</div>
					</div>
			    <?php } ?>	
	
		</center>
		<?php

	}
}
$idconnexion = null;
?>














  <!-- Start JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076dO5399.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
  <!-- End JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>