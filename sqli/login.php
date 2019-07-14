<?php
ob_start();
include "config.php";
include "../include/header.php";

$flag = "flag = test";


if (isset($_POST['but_submit'])) {
    $uname    = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    
    if ($uname != "" && $password != "") {
        
        //$sql_query = "select count(*) as cntUser from members where username='".$uname."' and password='".$password."'";
        $sql_query = "select username, password from members where username='$uname' and password='$password'limit 0,1";
        $result    = mysqli_query($con, $sql_query);
        $row       = mysqli_fetch_array($result);
        
        //$count = $row['cntUser'];
        
        if ($row > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
            // echo "welcome. ", mysqli_error($con);
        } else {
            echo "<div class='warning-msg'>Usuario y password inválidos</div>";
        }
    }
    
    else if ($uname == "" || $password == "") {
        echo "<div class='warning-msg'>No puedes dejar campos vacíos</div>";
    } else {
        echo "<div class='warning-msg'>Debes indicar usuario y password. </div>", mysqli_error($con);
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>SQL injection | CTF PKMN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/stylesheet.css">   
    </head>
   <body>
<div class="container">
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