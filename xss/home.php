<?php
include "config.php";
// include "header.php";

// if(isset($_POST['but_submit'])){
//     $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
//     $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    
//     if ($uname != "" && $password != ""){

//         $sql_query = "select count(*) as cntUser from users where nickname='".$uname."' and passwd='".$password."'";
//         $result = mysqli_query($con,$sql_query);
//         $row = mysqli_fetch_array($result);

//         $count = $row['cntUser'];

//         if($count > 0){
//             $_SESSION['uname'] = $uname;
//             header('Location: home.php');
//             echo "welcome. ", mysqli_error($con);

//         }else{
//             echo "Invalid username and password. ", mysqli_error($con);
//         }        
//     } else {
//         echo "U must specify user and password. ", mysqli_error($con);
//     }
// }
?>
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
    <!-- <//?php include("../include/header.php"); ?>   -->

    <div class="container-narrow">
    <div class="row">

    </div>
    <div class="col">
    <form method="post" action="">
        <div id="div_login">
            <h1>Déjanos un mensaje</h1>
            <div>
                <input type="text" class="textbox" id="txt_email" name="txt-email" placeholder="email" />
            </div>
            <div>
                <input type="text" class="textbox" id="txt_subject" name="txt_subject" placeholder="asunto"/>
            </div>
            <div>
                <textarea type="text" id="txt_message" placeholder="escribe tu mensaje aquí..."></textarea>
            </div>
            
            <div>
                <input class="button1" type="submit" value="Enviar mensaje" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
    </div>    
</div>    
</div>
</body>
</html>