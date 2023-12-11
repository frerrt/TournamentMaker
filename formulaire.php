<!doctype html>
<html>
	<head>
  		<meta http-equiv="cache-control" content="no-cache" />
  		<meta http-equiv="pragma" content="no-cache" />
		<title>TOURNAMENT MAKER</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style_connexion.css">
	</head>
	<body class="bg-dark">


	<div class="sign-up-form">
		<img style="background-color:blue;" src="../img/user-icon.png">
		<h1>Log In</h1>		
		<form method="POST" action='verif.php'>
				<div class="form-group">
					<label>Identifiant</label>
					<input type="text" class="form-control" name="login"  placeholder="Identifiant">
					</div>

				<div class="form-group">
					<label>Mot de passe</label>
					<input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
				</div>

				<button name="connexion" type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>	
	</div>

	<footer >
		<p style="text-align: center; color: white;" class="text-white-50">
			&copy; Copyright 2021 Tournament Maker
		</p>
	</footer>
</body>
</html>
