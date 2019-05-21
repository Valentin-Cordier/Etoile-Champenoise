<?php
if (isset($_POST['token']) && $_POST['token'] == "repres"){
$id = $_POST['name'];
    $req = $dbh->prepare('SELECT * FROM user WHERE IDuser = "'.$id.'" ');
    $req->execute();
    while ($donnees = $req->fetch()) {
        $var1 = $donnees['nom'];
        $var2 = $donnees['Adresse1'];
        $var3 = $donnees['Adresse2'];
        $var4 = $donnees['zip'];
        $var5 = $donnees['ville'];
        $var6 = $donnees['tel'];
        $var7 = $donnees['fax'];
        $var8 = $donnees['email'];
        if ($var2 == '') {
            $var2 = "Non renseigné";
        }
        if ($var3 == '') {
            $var3 = "Aucun";
        }
        if ($var4 == 00000) {
            $var4 = "Non renseigné";
        }
        if ($var5 == '') {
            $var5 = "Non renseigné";
        }
        if ($var6 == '') {
            $var6 = "Non renseigné";
        }
        if ($var7 == '') {
            $var7 = "Non renseigné";
        }
        if ($var8 == '') {
            $var8 = "Non renseigné";
        }
        echo'<form>
             <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                       <li id="li"><p>Nom Entreprise: '.$var1.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                       <li id="li"><p>Adresse Postale: '.$var2.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      <li id="li"><p>Complément d adresse: '.$var3.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                       <li id="li"><p>Code Postale: '.$var4.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      <li id="li"><p>Ville: '.$var5.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <li id="li"><p>Téléphone: '.$var6.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      <li id="li"><p>Fax: '.$var7.'</p></li>
                  </div>';
                  echo'<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                       <li id="li"><p>Email: '.$var8.'</p></li>
                  </div>
              </div>
             </div>
          </form>';


    }
    echo '</div>';
}
?>
