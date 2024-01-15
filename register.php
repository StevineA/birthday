<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2304482";

$database ="e2304482";

$password ="Luz781ce";

$connection = new mysqli($host,$user,$password,$database);

if ($connection-> connect_error){

  echo("error");
}
else{

  echo("no error");
 
 }
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $nom = $_POST['nom'];
  $nombre = $_POST['nombre'];

  $sql = "INSERT INTO birthday_guests (nom,nombre) VALUES ('$nom', '$nombre')";
  $connection ->query($sql);
}
//$query = "INSERT INTO `birthday_guests`(`nom`, `nombre`) VALUES ('Stev',25)";
//echo($query);
$connection ->close();

?>