<?php
include "config.php";
// esto chequea si el usario esta logeado, use uname capaz estandarizar el post a username? da lo mismo si
if(!isset($_SESSION['uname'])){
    header('Location: login.php'); //hay que revisar este header para que apunte a un index... capaz crear un index?
}
// este es pa logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
    <!doctype html>
    <html>

    <head>
        <title>CTF PKMN / bruteforce</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>

    <body>

        <div class="container">
            <div class="container-narrow">
                <div class="row">
                    <div class="col">
                        <h1>Inicia sesión o sale si estas loggeado (hay q arreglar esop)</h1>
                        <form method='post' action="">
                            <input class="button1" type="submit" value="Logout" name="but_logout">
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

    </html>