<?php session_start();
if(!isset($_SESSION['admin'])){
	header('location:loggin.php');}?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/support.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<?php include('header.php');?>
    <?php
        include 'inc/interface/co.php';
        $current_id= $_GET['id'];
        $req=$dbh->query("SELECT * FROM login WHERE IDlogin='$current_id'");
        $compte= $req->fetch();
    ?>
    <h1 class="mt-5 pt-5">MODIFIER LE COMPTE :</h1>
    <form class="mt-5  col-8 offset-2" method="post">
    <div class="form-group">
        <label for="texte">Nom de compte : </label>
        <input id="texte" value="<?=$compte['login']?>" name="login" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="texte">Mot de passe: </label>
        <input id="texte" name="mdp" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="select">Type de compte : </label>
        <select id="select" name="type" class="form-control" required>
            <option value="1" <?php if($compte['type']==1){echo'selected';}?>>Utilisateur</option>
            <option value="2" <?php if($compte['type']==2){echo'selected';}?>>Administrateur</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-lg">Modifier</button>
</form>
<?php
$var1= $_POST['login'];
$var2= $_POST['mdp'];
if(isset($_POST['submit'])){
$dbh->query("UPDATE `login` SET `login` = '$var1', `mdp` = '$var2' WHERE `login`.`IDlogin`= $current_id");
header('location:support.php');
}
?>
</body>
</html>