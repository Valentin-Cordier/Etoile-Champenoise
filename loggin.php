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
    <link rel="stylesheet" href="css/loggin.css">
</head>

<body>
    
    <form action="login.php" method="post" class="form-signin ">
        <div id="logo" class="mb-5 mx-auto text-center">
    <img class="mt-5" src="images/logo.png" width="200px" alt="logo étoile champenoise">
        </div>
        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Connectez vous !</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="email" id="inputUserName" class="form-control" placeholder="Votre email" required
            autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe"
            required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Se connecter</button>
        <p class="mt-5 mb-3 text-light text-center">&copy; Etoile Champenoise 2019</p>
    </form>
<body>