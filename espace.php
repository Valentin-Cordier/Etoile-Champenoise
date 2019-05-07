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
  <?php include "inc/co.php"?>

  <img src="images/mbsP.png" class="img-fluid" style="margin-top: 5em; height: 50vh; width:100%; object-fit:cover;" alt="Responsive image de livraison">
    <div class="container-fluid col-12 text-center mt-3">
        <hr class="col-6" style="background-color: #0477BF;">
        <h1>Suivis de votre livraison</h1>
        <hr class="col-6" style="background-color: #0477BF;">
    </div>
    <div class="container-fluid col-12">
        <select class="custom-select col-6 text-center offset-3 mt-5">
           <?php     $req = $dbh->prepare('SELECT * FROM user WHERE IDuser != 40 AND zip != 00000 ORDER BY zip ');
                        $req->execute();
                    while ($donnees = $req->fetch()){
                        $var1 = $donnees['IDuser'];
                        $var2 = $donnees['nom'];
                        $var3 = $donnees['zip'];
                        $dep =  substr ( $var3 , 0 , 2);
                            if ($var1 == $id){
                                echo '<option value="'.$var1.'" selected>'.$var2.'('.$dep.')</option>';
                            } else {
                                echo '<option value="'.$var1.'">'.$var2.'('.$dep.')</option>';
                            }
                        }
                        ?>
        </select>
    </div>
    <div class="container-fluid text-center mt-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"> </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <button type="submit" class="btn btn-primary btn-lg mb-5">Rechercher</button>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
              <?php $req = $dbh->prepare('SELECT * FROM user WHERE IDuser = "'.$id.'" ');
                    $req->execute();
                while ($donnees = $req->fetch()){
                    $var1 = $donnees['link'];
                    $var2 = $donnees['nom'];
                    echo '<br><p class="mid">(Cliquez ci-dessous si la redirection automatique ne fonctionne pas)</p><br>';
                    echo '<p class="mid"><a class="ralink" href="'.$var1.'" target="_blank">Lien tracking '.$var2.'</a><p><br>';
                    echo '<script language="javascript">
                    window.open("'.$var1.'", "_blank");
             </script>';
                        }
                         ?>
            </div>
        </div>
    </div>
  <?php include('footer.php');?>
</body>
</html>
