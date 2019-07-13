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
                    <h4>1. BRUTEFORCE</h4>
                    <p>Puedes entrar a la DB sin las credenciales?</p>
                    <p>Hazlo y consigue el primer flag.</p>

                    <button onclick="window.location.href='bruteforce/home.php'" class="button1">Ir al desafío</button>                  
                </div>
                  <div class="challenge-each" id="ch02">
                    <h4> 2. XSS</h4>
                    <p>Consigue un flag haciendo un cross site scripting.</p>

                    <button onclick="window.location.href='xss/home.php'" class="button1">Ir al desafío</button>                  

                  </div>
                  <div class="challenge-each" id="ch03">
                    <h4>3. LOCAL FILE INCLUSION</h4>
                    <p>Puedes entrar a la DB sin las credenciales?</p>

                    <button onclick="window.location.href='lfi/pokemon.php'" class="button1">Ir al desafío</button>                  

                  </div>
                  <div class="challenge-each" id="ch04">
                    <h4>4. SQL INJECTION</h4>
                    <p>Consigue el proximo flag bypasseando este login.</p>

                    <button onclick="window.location.href='sqli/login.php'" class="button1">Ir al desafío</button>                  

                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>