<?php
include "../include/header.php";

   $file = $_GET['file'];

   if(isset($file))
   {
       include("$file");
   }
?> 

<h1>LFI</h1>

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
                        <p><a href="<?php echo "?file=" . "maps/pewter/city.php" ?>">Pewter City</a></p>
                        <?php include "../lfi/maps/pewter/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/cerulean/city.php" ?>">Cerulean City</a></p>
                        <?php include "../lfi/maps/cerulean/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/vermilion/city.php"?>">Vermilion City</a></p>
                        <?php include "../lfi/maps/vermilion/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/saffron/city.php"?>">Saffron City</a></p>
                        <?php include "../lfi/maps/saffron/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/fuchsia/city.php"?>">Fuchsia City</a></p>
                        <?php include "../lfi/maps/fuchsia/city.php" ?>
                        <p><a href="<?php echo "?file=" ."maps/cinnabar/city.php"?>">Cinnabar Island</a></p>
                        <?php include "../lfi/maps/cinnabar/city.php" ?>
                        <p><a href="<?php echo "?file=" ."maps/viridian/city.php"?>">Viridian City</a></p>  
                        <?php include "../lfi/maps/viridian/city.php" ?>
        
                </div>
            </div>
            </div>   
        </div>
    </body> 
</html>
