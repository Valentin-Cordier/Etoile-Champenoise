<?php session_start();
include 'inc/interface/verif_co.php'?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <?php include('header.php');
	?>
    <div class="espace"></div>
    <div class="espace"></div>
    <div class="espace"></div>

    <div class="container-fluid">
        <div class="row titreG">

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="1"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="1">
        <img class="logo" src="images/logo.png">
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12" id="1"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12" id="1">
        <p class="annee"> 2019 </p></div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="1">
                <h2> Tarif traction HT applicable au 01/02/2018 </h2>
                <div class="espace"></div>
                <center>
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">

                        <table class="table table-sm">
                            <thead class="table-info">
                                <tr>
                                    <th class="table-danger">Département</th>
                                    <th>Destination</th>
                                    <th>Kilomètres</th>
                                    <th>Prix traction à la toanne</th>
                                    <th>Prix traction à la palette</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
    							include 'inc/interface/co.php';
								$req = $dbh->query('SELECT * FROM `traction`');
								while ($donnees = $req->fetch()){
							?>
                           
                                <tr>
                                    <td><?php echo $donnees['DPT']; ?></td>

                                    <td><?php echo $donnees['DESTINATION']; ?></td>

                                    <td><?php echo $donnees['KMS']; ?></td>

                                    <td><?php echo $donnees['TONNE']; ?></td>


                                    <td><?php echo $donnees['PALETTE']; ?></td>
                                </tr>


                                <?php }
        							$req->closeCursor(); // Termine le traitement de la requête
       							 ?>
                            </tbody>
                        </table>
                    </div>
                </Center>
            </div>
        </div>
    </div>

    <div class="espace"></div>
    <div class="espace"></div>

    <?php include('footer.php');?>


									<!----------------------------- SCRIPT ----------------------->
                                    <link rel="stylesheet" type="text/css" media="screen" href="css/support.css">
									<script src="js/main.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
									</script>
									<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
									<script src="java/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8">
									</script>
