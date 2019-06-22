<?php
//este PHP conecta a la DB hay que quizas despues eliminar el debug para no dar pistas
session_start();
$host = "localhost"; 
$user = "root"; 
$password = "toor";
$dbname = "bruteforce"; 
$con = mysqli_connect($host, $user, $password,$dbname);
// debug de la conexion
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}