<?php session_start();
include 'inc/interface/verif_co.php';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
  <script src="main.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
  <?php include('header.php');?>

  <div id="jumbotron" class="mt-5">
  <h1 class="w-100 text-center mt-5 pt-5 text-light" id="tit">Bienvenue <span><?php if(isset($_SESSION['admin'])){echo $_SESSION['admin'];}else{echo$_SESSION['user'];}; ?></span> !</h1>
 
</div>
 <img src='images/mbsP.png' width="100%">
  </div>
  <div class="main-carousel  col-12" data-flickity='{ "cellAlign": "left", "contain": true }'>
      <?php
      include "inc/interface/co.php"; 
			$super=$dbh->query('SELECT * FROM message WHERE id_message >1');
			$sup=$super->fetchAll();
			foreach($sup as $su){
			echo ("<div class='carousel-cell w-100 text-center'>
					<div class='card mx-auto w-100 card'>
						<div class='card-body'>
							<h5 class='card-title'>".$su['titre']."</h5>
							<h6 class='card-subtitle mb-2 text-muted'>".$su['date']."</h6>
              <p class='card-text'>".$su['contenu']."</p>");
              if(isset($_SESSION['admin'])){
                echo "<div class='row d-flex justify-content-center'>
								<button href='modif_mess.php?id=".$su[id_message]."' class='btn btn-primary mr-3'>Modifier</button>
								<a href='inc/intedelete_mess.php?id=".$su[id_message]."' class='btn btn-danger'>Supprimer</a>
							</div>";
              }
							echo"
						</div>
					</div>
				</div>";
			}
			?>
      </div>

  <?php include('footer.php');?>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
  integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>


</html>