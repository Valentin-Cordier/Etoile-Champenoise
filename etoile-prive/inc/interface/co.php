<?php


$host_name = 'localhost';
$database="mbs";
$user_name = 'yrenaux';
$password = 'toor';


$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}

$dbh->exec("SET CHARACTER SET utf8");
?>
