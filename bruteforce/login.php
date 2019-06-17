<!DOCTYPE HTML>
<html>
<head>
<title>Ingresa!Pokemon!</title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
</head>
<body id="body-color">
<div id="Sign-In">
<fieldset style="width:30%"><legend>Ingresa a tu cuenta pokemon!</legend>
<form method="POST" action="login.php">
Username <br><input type="text" name="user" size="40"><br>
Password <br><input type="password" name="pass" size="40"><br>
<input id="button" type="submit" name="submit" value="Log-In">
</form>
</fieldset>
</div>
</body>
</html> 


<?php
//Iniciando sesion
session_start();
 
//chequea si el usuario esta logeado ya
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables y  inicializa en 0
$username = $password = "";
$username_err = $password_err = "";
 
// Procesando la data
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "ingresa tu usuario";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Ingresa tu  password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validando
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // variables a parametros
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // parametros
            $param_username = $username;
            
            // chantandole
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Chequea primero si el user existe, despues el password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password esta bien?
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect
                            header("location: welcome.php");
                        } else{
                            // error
                            $password_err = "mensaje de error de password";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "mensaje de error de username";
                }
            } else{
                echo "Oops!.";
            }
        }
        
        // cerrando a la db
        mysqli_stmt_close($stmt);
    }
    
    // chao
    mysqli_close($link);
}
?>



