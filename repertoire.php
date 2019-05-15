<?php session_start();
include 'inc/interface/verif_co.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Répertoire Partenaire Etoile Champenoise</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/repertoire.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <?php include('header.php');
    require_once 'inc/interface/co.php';?>
    <img class="img-fluid-1 mx-auto my-auto" style="height: 55vh; width:100%; object-fit:cover;"
    src="./images/business.jpg" alt="Responsive-Image Répertoire">
    <div class="container-fluid text-center mt-3">
        <hr class="col-6" style="background-color: #0477BF; margin-top:6em;">
        <h1>Répertoire des Partenaires</h1>
        <hr class="col-6" style="background-color: #0477BF;">
    </div>
    <div id="rer" class="container-fluid col-12 text-center mt-3">




      <div class="fillframe">

          <form method="POST" action="#" class="col-12 text-center offset-3 mt-5">

              <select class="select" name="name">
                <option selected>Sélection de votre partenaire</option>
                <?php
                $req = $dbh->prepare('SELECT * FROM user ORDER BY nom ');
                $req->execute();
              while ($donnees = $req->fetch()){
                $var1 = $donnees['IDuser'];
                $var2 = $donnees['nom'];
                if ($var1 == $id){
                    echo '<option value="'.$var1.'">'.$var2.'</option>';
                } else {
                  echo '<option value="'.$var1.'">'.$var2.'</option>';
                }

                }
                ?>


      <div id="rer" class="intframe">
        <div class="fillframe">
          <form method="POST" action="#" class="formframe">
            <input type="hidden" name="token" value="repres">
            <input class="btn btn-primary btn-lg mb-5" type="submit" value="Recherche">

          </form>
        </div>
      </div>
    </div>
  </div>
          <div class="resframe2">



    </div>
    <?php require_once 'inc/interface/repertoire.php';?>
    <p class="txtmed" >Téléchargez la liste complète <a href="data/repertoire-2018.xlsx" class="y txtmed">ICI</a> ! </p>
</div>
        </div>
      </div>
    </div>

   <?php include('footer.php');?>
</body>

</html>
