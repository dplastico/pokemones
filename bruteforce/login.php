<?php
ob_start();
include "config.php";
include "../include/header.php";

if (isset($_POST['but_submit'])) {
    $uname    = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);
    
    if ($uname != "" && $password != "") {
        
        $sql_query = "select count(*) as cntUser from users where nickname='" . $uname . "' and passwd='" . $password . "'";
        $result    = mysqli_query($con, $sql_query);
        $row       = mysqli_fetch_array($result);
        
        $count = $row['cntUser'];
        
        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
            echo "welcome. ", mysqli_error($con);
            // die();
        } else {
            echo "Usuario y password inválidos ", mysqli_error($con);
        }
    }
    
} else if ($uname == "" || $password == "") {
    echo "No puedes dejar campos vacíos";
} else {
    echo "Debes indicar usuario y password.", mysqli_error($con);
}


?> 
 <!-- //creo que falta ponerle el estilo y eso ahi no se -->
 <!DOCTYPE html>
<html lang="en">
   <head>
      <title>CTF PKMN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/stylesheet.css">
   </head>
   <body>
<div class="container">
    <!-- <//?php include("../include/header.php"); ?>   -->

    <div class="container-narrow">
    <div class="row">

    </div>
    <div class="col">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input class="button1" type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
    </div>    
</div>    
</div>
</body>
</html>