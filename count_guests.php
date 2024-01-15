
<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2304482";

$database ="e2304482";

$password ="Luz781ce";

$connection = new mysqli($host,$user,$password,$database);

 $selectDataquery = "SELECT * FROM `birthday_guests`" ;
 $result =  $connection ->query($selectDataquery);

 if ( $result->num_rows > 0){
    $totalguests = 0;

     while($row = $result->fetch_assoc()) {    
       echo "nom".$row["nom"]. "- nombre".$row["nombre"]. "<br>";
       $totalguests += $row["nombre"] ;
     }
    echo " <p>le nombre d'invités est". $totalguests."</p><br>" ;
 } else{
    echo "0 results";
 }
 $connection->close();
 ?>