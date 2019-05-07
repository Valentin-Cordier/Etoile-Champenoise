<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/support.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<?php include('header.php');?>
	<?php include "inc/co.php"?>
	<!----------------------- ONGLET DE NAVIGATION ----------------------->
	<div class="espace"></div>
	<div class="espace"></div>

	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<a href="#1">
					<p class="onglet"> Gestion de compte </p>
				</a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<a href="#2">
					<p class="onglet"> Gestion des messages pré-définis </p>
				</a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<a href="#3">
					<p class="onglet"> Gestion des messages </p>
				</a>
			</div>
		</div>
	</div>


	<!----------------------- GESTION DE COMPTE ----------------------->


	<div class="container-fluid">
		<div class="row titreG">
			<!----------------------- COLONNE DE GAUCHE ----------------------->
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="1">
				<h2> INTERFACE DE GESTION DE COMPTES </h2>
				<h4> Création d'un nouveau compte </h4>
				<center>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 titreG" id="1">
						<form>
							<div class="form-group">
								<label for="texte">Nom de compte : </label>
								<input id="texte" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="texte">Mot de passe: </label>
								<input id="texte" class="form-control">
							</div>
							<div class="form-group">
								<label for="select">Type de compte : </label>
								<select id="select" class="form-control">
									<option>Utilisateur</option>
									<option>Administrateur</option>
								</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
					</div>
				</center>
			</div>

			<!------------------------- TABLEAU DE DROITE---------------------->

			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" id="1">
				<h2> Comptes actifs </h2>
				<div class="espace"></div>
				<center>
					<div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">

						<table class="table table-sm">
							<thead class="table-info">
								<tr>
									<th class="table-danger">Nom du compte</th>
									<th>Type de compte</th>
									<th>Compte bloqué</th>
									<th>Un truc</th>
									<th>Deux trucs</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Administrateur</td>
									<td></td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td>Admin</td>
									<td></td>
								</tr>
								<tr>
									<td>DefUser</td>
									<td></td>
								</tr>
								<tr>
									<td>Test3</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</Center>
			</div>
		</div> <!-- FERMETURE DU ROW ligne 49 -->
	</div> <!-- FERMETURE DU CONTAINER ligne 48 -->
	<div class="espace"></div>
	<div class="espace"></div>

	<!------------------------- Parallaxe ---------------------->
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/mbsP.png" alt="Competences"></div>


	<!----------------------- GESTION DES MESSAGES PRE-DEFINIS ----------------------->

	<div class="container-fluid">
		<div class="row titreG">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="2">
				<h2> INTERFACE DE GESTION DES MESSAGES-PREDEFINIS </h2>
				<h4> Nouveau message </h4>
			</div>
		</div>
	</div>
	<div class="espace"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<form>
					<div class="form-group">
						<label for="textarea">Votre message : </label>
						<textarea id="textarea" class="form-control"></textarea>
					</div>
				</form>
				<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>
			</div>
		</div>
	</div>
	<!--------- BOUTON GESTION DES MESSAGES PRE DEFINIS ---------->
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>
		</div>
	</div>
	<div class="espace"></div>
	<div class="espace"></div>

	<!-------------------------- Début PAGE parallaxe ---------------------->
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/mbsP.png" alt="Competences"></div>

	<!----------------------- GESTION DES MESSAGES----------------------->
	<div class="espace"></div>
	<div class="container-fluid">
		<div class="row titreG">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="3">
				<h2> INTERFACE DE GESTION DES MESSAGES </h2>
				<h4> Nouveau message </h4>
			</div>
		</div>
	</div>
	<div class="espace"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<form>
					<div class="form-group">
						<label for="textarea">Votre message : </label>
						<textarea id="textarea" class="form-control"></textarea>
					</div>
				</form>
				<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<form action="/action_page.php">
					Date:
					<input type="date" name="date">

				</form>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>

		</div>
	</div>
	<div class="espace"></div>
	<!--------- BOUTON GESTION DES MESSAGES ---------->
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>
		</div>
	</div>
	<div class="espace"></div>
	<div class="espace"></div>
	<div class="container-fluid">
		<div class="row titreG">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<p>&#8600 Retour en haut de page &#8601</p>
				<a href="#"><span class="diamond">back to top</span></a>
			</div>
		</div>

		<?php include('footer.php');?>


		<!----------------------------- SCRIPT ----------------------->
		<script src="js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
		<script src="java/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
