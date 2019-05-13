<?php


$host_name = 'localhost';
$database = 'db752756822';
$user_name = 'Jules';
$password = 'fefe8cb08';

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}

$dbh->exec("SET CHARACTER SET utf8");
?>
