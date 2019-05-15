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
              <div class="row justify-content-center">
                  <div class="col-5">
                       <p><span class="mid1 col-6">'.$var1.'</span></p>
                  </div>';
                  echo'<div class="col-5">
                       <p><span class="mid1 col-6">'.$var2.'</span></p>
                  </div>
              </div>';
              echo'<div class="row justify-content-center">
                  <div class="col-5 mt-4">
                      <p><span class="mid1 col-6">'.$var3.'</span></p>
                  </div>';
                  echo'<div class="col-5 mt-4">
                       <p><span class="mid1 col-6">'.$var4.'</span></p>
                  </div>';
                  echo'<div class="col-5 mt-4">
                      <p><span class="mid1 col-6">'.$var5.'</span></p>
                  </div>';
                  echo'<div class="col-5 mt-4">
                    <p><span class="mid1 col-6">'.$var6.'</span></p>
                  </div>';
                  echo'<div class="col-5 mt-4">
                      <p><span class="mid1 col-6">'.$var7.'</span></p>
                  </div>';
                  echo'<div class="col-5 mt-4 mb-5">
                       <p><span class="mid1 col-6">'.$var8.'</span></p>
                  </div>
              </div>
          </form>';


    }
    echo '</div>

                    <p class="txtmed" >Téléchargez la liste complète <a href="data/repertoire-2018.xlsx" class="y txtmed">ICI</a> ! </p>
                </div>';
}
?>
