<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Espace suivi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
  <script src="main.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <?php include('header.php');?>

  <img src="images/mbsP.png" class="img-fluid" style="margin-top: 5em; height: 50vh; width:100%; object-fit:cover;" alt="Responsive image de livraison">
    <div class="container-fluid col-12 text-center mt-3">
        <hr class="col-6" style="background-color: #0477BF;">
        <h1>Suivis de votre livraison</h1>
        <hr class="col-6" style="background-color: #0477BF;">
    </div>
    <div class="container-fluid col-12">
        <select class="custom-select col-6 text-center offset-3 mt-5">
            <option selected>Sélection de votre partenaire</option>
            <option value="1">Sellier(02)</option>
            <option value="2">MBS 08 (08)</option>
            <option value="3">TCP (10)</option>
            <option value="4">GTRA 89 (13)</option>
            <option value="5">GTRA 59 (13)</option>
            <option value="6">GTRA 01(13)</option>
            <option value="7">GTRA 95 (13)</option>
            <option value="8">Cogepress (16)</option>
            <option value="9">VARILLON (27)</option>
            <option value="10">MESSAGERIE TOULOUSAINE (31)</option>
            <option value="11">BENITO (33)</option>
            <option value="12">OENOTRANS (51)</option>
            <option value="13">GONDRAND (52)</option>
            <option value="14">IMANY (52)</option>
            <option value="15">HEPPNER 57 (57)</option>
            <option value="16">HEPPNER 59 (59)</option>
            <option value="17">MERY TRANSPORTS (60)</option>
            <option value="18">HEPPNER 67 (67)</option>
            <option value="19">HEPPNER 68 (68)</option>
            <option value="20">LAMBERT ET VALETTE (69)</option>
            <option value="21">TRANSSERVICE (76)</option>
            <option value="22">XP (77)</option>
            <option value="23">CST PROFRET (80)</option>
            <option value="24">TMV (88)</option>
            <option value="25">TRSP DE L'YONNE (89)</option>
            <option value="26">UPSILON (89)</option>
            <option value="27">GTLS75 (94)</option>
            <option value="28">TDL (95)</option>
            <option value="29">CLL (95)</option>
            <option value="30">HEPPNER 95 (95)</option>
        </select>
    </div>
    <div class="container-fluid text-center mt-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"> </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <button type="submit" class="btn btn-primary btn-lg mb-5">Rechercher</button>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"></div>
        </div>
    </div>

  <?php include('footer.php');?>
</body>
</html>
