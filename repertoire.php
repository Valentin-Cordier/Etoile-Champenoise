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
    <?php include('header.php');?>
    <img class="img-fluid-1 mx-auto my-auto" style="height: 55vh; width:100%; object-fit:cover;"
    src="./images/business.jpg" alt="Responsive-Image Répertoire">
    <div class="container-fluid text-center mt-3">
        <hr class="col-6" style="background-color: #0477BF; margin-top:6em;">
        <h1>Répertoire des Partenaires</h1>
        <hr class="col-6" style="background-color: #0477BF;">
    </div>
    <div class="container-fluid">
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
        <div class="container-fluid text-center mt-5 mx-auto">
            <div class="row mx-auto">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"> </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <button type="submit" class="btn btn-primary btn-lg">Rechercher</button>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
    &nbsp;
    <form>
        <div class="row justify-content-center">
            <div class="col-5">
                <input type="text" id="nom" class="form-control" placeholder="Nom Entreprise">
            </div>
            <div class="col-5">
                <input type="text" id="zip" class="form-control" placeholder="Adresse Postale">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 mt-4">
                <input type="text" id="complement-adresse" class="form-control" placeholder="Complément d'adresse">
            </div>
            <div class="col-5 mt-4">
                <input type="text" id="code-postale" class="form-control" placeholder="Code Postale">
            </div>
            <div class="col-5 mt-4">
                <input type="text" id="ville" class="form-control" placeholder="Ville">
            </div>
            <div class="col-5 mt-4">
                <input type="text" id="telephone" class="form-control" placeholder="Téléphone">
            </div>
            <div class="col-5 mt-4">
                <input type="text" id="fax" class="form-control" placeholder="Fax">
            </div>
            <div class="col-5 mt-4">
                <input type="text" id="email" class="form-control" placeholder="Email">
            </div>
        </div>
    </form>
   <?php include('footer.php');?>
</body>

</html>
