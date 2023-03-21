<?php 

// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$db =new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
// Vérification de la connexion à la base de données
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>