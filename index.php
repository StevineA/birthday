<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="entete">

        <h1> STEVINE CHANELLE</h1>
        <div id="deco">
         <p> Mesdames, Messieurs </p>
         <p> Je vous convie ce samedi 12 février à la fete de mon anniversaire organisée à partir de 18h. </p>
         <p> Pour cette occasion, une fete a été orgenisée et votre présence est vivement souhaitée.</p>
       </div>

        <section>
            <u><b><p id="theme"> THEME DE LA SOIREE </p></b></u>
            <ul> <p><li> Noir & Blanc <button onclick="displayExplanations()"> En savoir plus </button> </li> </p>  </ul>
            <p id="info"> Le theme de cette soirée est Noir & Blanc ; car ce sont de belles couleurs. </p>
        </section>
    </header>

    <footer>
      <p> Lieu de réception: <a href="https://www.sallesdesfetes.fr/"> Salle des fetes  </a> </p>
    </footer>
 <script src="script.js"></script>

 
<form method="post" action="register.php">
    <div id="madiv">
    <label for="nom"> nom </label>

  <input type="text" id="nom" name="nom"/><br>
  <label for="nombre"> nombre</label>
  <input type="number" id="nombre" name="nombre"/><br>

      <input type="submit" name="submit" value="send">
  
      </div>
  </form>
   <?php include "register.php";?>
  <p> Total Guests:<?php include "count_guests.php";?></p>
</body>
</html>