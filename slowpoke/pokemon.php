<?php
include "../include/header.php";

   $file = $_GET['file'];

   if(isset($file))
   {
       include("$file");
   }
?> 

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CTF PKMN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/stylesheet.css">   
      
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>

        <script>
        JQuery(document).ready(function(){
            jQuery(".expand-content-link").click(function() {
                jQuery(this).next(".hidden-content").toggle();
                return false;
            });
        });
        
        </script>


    </head>
   <body>
    <div class="container">
        <div class="container-narrow">
            <div class="row">            
                <div class="col">
                    <h3>Explora Pokemon Red</h3>
                    <h4>Mapas</h4>

                   

                        <p><a class="expand-content-link" href="<?php echo "?file=" . "maps/pewter/city.php" ?>">Pewter City</a></p>
                        
                        <div class="hidden-content">
                            <img src="../slowpoke/maps/pewter/pokemon_rby_pewtercity.png">
                        </div>
                        <hr>
                        <?php include "../slowpoke/maps/pewter/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/cerulean/city.php" ?>">Cerulean City</a></p>
                        <?php include "../slowpoke/maps/cerulean/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/vermilion/city.php"?>">Vermilion City</a></p>
                        <?php include "../slowpoke/maps/vermilion/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/saffron/city.php"?>">Saffron City</a></p>
                        <?php include "../slowpoke/maps/saffron/city.php" ?>
                        <p><a href="<?php echo "?file=" . "maps/fuchsia/city.php"?>">Fuchsia City</a></p>
                        <?php include "../slowpoke/maps/fuchsia/city.php" ?>
                        <p><a href="<?php echo "?file=" ."maps/cinnabar/city.php"?>">Cinnabar Island</a></p>
                        <?php include "../slowpoke/maps/cinnabar/city.php" ?>
                        <p><a href="<?php echo "?file=" ."maps/viridian/city.php"?>">Viridian City</a></p>  
                        <?php include "../slowpoke/maps/viridian/city.php" ?>
        
                </div>
            </div>
            </div>   
        </div>
    </body> 
</html>
