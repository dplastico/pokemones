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
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>