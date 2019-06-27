<?php
ob_start();

//este PHP conecta a la DB hay que quizas despues eliminar el debug para no dar pistas
session_start();
$host = $_ENV['DB_PORT_3306_TCP_ADDR']; 
// $host = "localhost";
$user = "root"; 
$password = "toor";
$dbname = "bruteforce"; 

$con = mysqli_connect($host, $user, $password,$dbname);
// debug de la conexion
if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }

$checktable = mysqli_query($con, "SELECT 1 from users LIMIT 1");


if($checktable == FALSE) 
{

    $createtable = mysqli_query($con, "CREATE TABLE IF NOT EXISTS users (
    NICKNAME varchar(16) NOT NULL,
    PASSWD varchar(16) NOT NULL)");

    die (mysqli_error($con));
    // $createtable;
} else 
{
    // mysqli_error($con);
}
?>