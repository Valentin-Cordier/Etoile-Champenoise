<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etoile Champenoise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>
 <?php
 include 'inc/interface/co.php';
 include 'header.php';
 $current_id=$_GET['id'];
 $req=$dbh->query("SELECT * FROM traction WHERE id_traction = '$current_id'");
 $prix=$req->fetch();
 ?>
    <h1 style="margin-top:15%;">MODIFIER LE TARIF :</h1>
    <h2><strong><?= $prix['DESTINATION']?> </strong> (<?=$prix['DPT']?>)<h2>
    <form class="mt-5  col-8 offset-2" method="post">
    <div class="form-group">
        <label for="texte">Prix traction à la tonne : </label>
        <input id="texte" value="<?=$prix['TONNE']?>" name="login" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="texte">Prix traction à la palette </label>
        <input id="texte" value="<?=$prix['PALETTE']?>" name="mdp" class="form-control" required>
    </div> 
    
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-lg">Modifier</button>
</form>
<?php
$var1= $_POST['login'];
$var2= $_POST['mdp'];
if(isset($_POST['submit'])){
$dbh->query("UPDATE `traction` SET `TONNE` = '$var1', `PALETTE` = '$var2' WHERE `traction`.`id_traction`= $current_id");
header('location:tarif-t.php');
}
?>
</body>
</html>