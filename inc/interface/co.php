<?php


$host_name = 'localhost';
$database = 'mbs';
<<<<<<< HEAD
$user_name = 'root';
$password = '';
=======
$user_name = 'martin';
$password = 'DFG34cvb78';
>>>>>>> test

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}

$dbh->exec("SET CHARACTER SET utf8");
?>
