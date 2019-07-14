<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CTF PKMN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/stylesheet.css">
   </head>
   <body>
      <div class="container">
         <div id="div-header" class="row">
            <img src="img/pkmn-logo-big.png">
         </div>
         <div class=" container-narrow">
            <div class="row">
               <div class=" col">
                  <h1>P K M N *  C T F ! </h1>
                  <br>
                  <h3>Bienvenido al desafio! Consigue todos los flag y conviertete en maestro pokemon.</h3>
               </div>
            </div>
            <div class="row">
               <div class="challenge-container">
                  <div class="challenge-each" id="ch01">
                    <h4>DESAFÍO BULBASAUR</h4>
                    <p>Qué esconde Bulbasaur en su capullo?</p>

                    <button onclick="window.location.href='bruteforce/home.php'" class="button1">Ir al desafío</button>                  
                </div>
                  <div class="challenge-each" id="ch02">
                    <h4>DESAFÍO MEWTWO</h4>
                    <p>Mewtwo Twomew</p>

                    <button onclick="window.location.href='xss/home.php'" class="button1">Ir al desafío</button>                  

                  </div>
                  <div class="challenge-each" id="ch03">
                    <h4>DESAFÍO EEVEE</h4>
                    <p>eeVee</p>

                    <button onclick="window.location.href='lfi/pokemon.php'" class="button1">Ir al desafío</button>                  

                  </div>
                  <div class="challenge-each" id="ch04">
                    <h4>DESAFÍO PIKACHU</h4>
                    <p>Pika pika pikachuuu</p>

                    <button onclick="window.location.href='sqli/login.php'" class="button1">Ir al desafío</button>                  

                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>