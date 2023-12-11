

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
		<link href="css/planning.css" rel="stylesheet">
		<title>TOURNAMENT MAKER</title>
	</head>
	<body  data-spy="scroll" data-target="#navbarResponsive" class="scrollbar scrollbar-black bordered-black square bg-dark">
		<section class="header">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="../index.html"><img  style="height:50px;width:50px;" src="../img/logo.jpg"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown" id="main">
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
								<a class="nav-link active" aria-current="page" href="Equipes.html">Equipes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="Page2ClassementAP.html">Classement</a>
							</li>
						</ul>
					</div>
					<a class="butnn" href="formulaire.html" role="button">Connexion</a>
				</div>
			</nav>
		</section>
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<div class="text-center">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<h6>Tournoi Mondial</h6>
						</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
				<div class="container">
				<div class="heading">
				<h1 class="heading fw-bold">Tournoi Mondial</h1>
				<div class="heading-underline"></div>
				</div>
				<img src="../img/arbre.png">
				</div> 
				</div>
				</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<h6>Tournoi National</h6>
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<h1 class="heading fw-bold">Tournoi National</h1>
							<img src="../img/arbre.png">
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<h6>Tournoi Regional</h6>
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<h1 class="heading fw-bold">Tournoi Regional</h1>
							<img src="../img/arbre.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<footer style="left: 0;bottom: 0;width: 100%;text-align: center; color: white;" class="modal-footer bg-dark ">
		<p>
			&copy; Copyright 2021 Tournament Maker
		</p>
	</footer>
	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
		-->
</html>