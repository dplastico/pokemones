<?php
include "../include/header.php";

   $file = $_GET['file'];
   if(isset($file))
   {
       include("$file");
   }
   else
   {
       include("index.php");
   }
?> 

<h1>aca va el lfi. soi pokemon.php</h1>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LFI | CTF PKMN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/stylesheet.css">   
    </head>
   <body>
    <div class="container">
        <div class="container-narrow">
            <div class="row">            
                <div class="col">
                    <h3>Explora Pokemon Red</h3>
                    <h4>Mapas</h4>
                        <p><a href="../maps/pewter/city.php">Pewter City</a></p>
                        <p><a href="../maps/cerulean/city.php">Cerulean City</a></p>
                        <p><a href="../maps/vermilion/city.php">Vermilion City</a></p>
                        <p><a href="../maps/saffron/city.php">Saffron City</a></p>
                        <p><a href="../maps/celadon/city.php">Celadon City</a></p>
                        <p><a href="../maps/fuchsia/city.php">Fuchsia City</a></p>
                        <p><a href="../maps/cinnabar/city.php">Cinnabar Island</a></p>
                        <p><a href="../maps/viridian/city.php">Viridian City</a></p>

                        <hr>

                        <h4>Badges</h4>
                        <p><a href="#">Boulder</a></p>

                        <p><a href="#">Cascade</a></p>
                        <p><a href="#">Thunder</a></p>
                        <p><a href="#">Rainbow</a></p>
                        <p><a href="#">Marsh</a></p>
                        <p><a href="#">Soul</a></p>
                        <p><a href="#">Volcano</a></p>
                        <p><a href="#">Earth</a></p>                     
        
                </div>
            </div>
            </div>   
        </div>
    </body> 
</html>
