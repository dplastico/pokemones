<?php
include "../include/header.php";

   $subdomain = $_GET['subdomain'];
   $uncrested = $_GET['uncrested'];
   $prochoos = $_GET['prochoos'];
   $keepership = $_GET['keepership'];
   $birdienumnum = $_GET['birdienumnum'];
   $nonfluid = $_GET['nonfluid'];
   $mussiest = $_GET['mussiest'];
   $smokechaser = $_GET['smokechaser'];

//    if(isset($file))
//    {
//        include("$file");
//    }
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

                    <div class="div-maps-show-show-i-like-turtles">
                    
                    <p><a href="<?php echo "?subdomain=" . "maps/pewter/city.php" ?>">Pewter City</a></p>
                    <?php
                        if(isset($subdomain))
                        {
                            include("$subdomain");
                        }
                   ?>                    


                    <p><a href="<?php echo "?uncrested=" . "maps/cerulean/city.php" ?>">Cerulean City</a></p>
                    <?php
                        if(isset($uncrested))
                        {
                            include("$uncrested");
                        }
                   ?>
                   
                    <p><a href="<?php echo "?prochoos=" . "maps/vermilion/city.php"?>">Vermilion City</a></p>
                        <?php
                    if(isset($prochoos))
                    {
                        include("$prochoos");
                    }
                   ?>                        
                   
                   <p><a href="<?php echo "?keepership=" . "maps/saffron/city.php"?>">Saffron City</a></p>
                   
                   <?php
                    if(isset($keepership))
                    {
                        include("$keepership");
                    }
                   ?>
                   
                        <p><a href="<?php echo "?birdienumnum=" . "maps/fuchsia/city.php"?>">Fuchsia City</a></p>

                        <?php
                    if(isset($birdienumnum))
                    {
                        include("$birdienumnum");
                    }
                   ?>
                        <p><a href="<?php echo "?nonfluid=" ."maps/cinnabar/city.php"?>">Cinnabar Island</a></p>

                        <?php
                    if(isset($nonfluid))
                    {
                        include("$nonfluid");
                    }
                   ?>
                        <p><a href="<?php echo "?mussiest=" ."maps/viridian/city.php"?>">Viridian City</a></p>  

                    <?php
                        if(isset($mussiest))
                        {
                            include("$mussiest");
                        }
                    ?>        
                    
                    
                    </div>

                    
                </div>
            </div>
            </div>   
        </div>
    </body> 
</html>
