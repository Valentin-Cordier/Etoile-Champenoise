<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Bar nav</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <!--Barre nav avec images-->
  <div class="main">
    <nav id="nav">
      <div class="img"><img src="images/logo.png" style="width:110px; height:70px; margin-top: 0.2em;"></div>
      <div class="toggle">
        <i class="fas fa-bars menu"></i>
      </div>
      <!--Icone de connexion et de déconnexion-->
      <ul class="ul">
        <li class="li"><a href="../index.php">Accueil</a></li>
        <li class="li"><a href="espace.php">Espace Suivi</a></li>
        <li class="dropdown2">
          <a href="javascript:void(0)" class="dropbtn2">Documents</a>
          <div class="dropdown-content2">
            <a href="reglement.php">Réglement</a>
            <a href="charte.php">Charte réseaux</a>
            <a href="tarif-t.php">Tarifs Traction</a>
            <a href="tarif-d.php"> Tarifs Distibution</a>
          </div>
        <li class="li"><a href="repertoire.php">Répertoire</a></li>
        <li class="li"><a href="carte.php">Carte Interactive</a></li>
        <?php if(isset($_SESSION['admin'])){
        echo'
          <li class="li"><a href="support.php" class="dropbtn">Support Administrateur</a></li>';} ?>
        <li class="li"><a href="../index.php"><i class="fas fa-sign-in-alt"></i></a></li>
        <!--<li><a><i class="fas fa-sign-out-alt"></i></a></li>-->

      </ul>
    </nav>
  </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
  integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
<script>
  $('document').ready(function () {
    $('.menu').click(function () {
      $('.ul').toggleClass('active');
    })
  })
</script>
</html>
