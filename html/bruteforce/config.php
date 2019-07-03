<?php
//este PHP conecta a la DB hay que quizas despues eliminar el debug para no dar pistas
session_start();
$host = $_ENV['DB_PORT_3306_TCP_ADDR']; 
$user = $_ENV['DB_ENV_MYSQL_USER']; 
$password = $_ENV['DB_ENV_MYSQL_ROOT_PASSWORD'];
$dbname = "bruteforce"; 

$con = mysqli_connect($host, $user, $password,$dbname);
// debug de la conexion
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>