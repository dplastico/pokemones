<?php
//este PHP conecta a la DB hay que quizas despues eliminar el debug para no dar pistas
session_start();
$host = $_ENV['DB_1_PORT_3306_TCP_ADDR']; 
// $host = "localhost";
$user = "root"; 
$password = "toor";
$dbname = "sqli"; 

$con = mysqli_connect($host, $user, $password,$dbname);
// debug de la conexion
if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }

$checktable = mysqli_query($con, "SELECT 1 from users LIMIT 1");
