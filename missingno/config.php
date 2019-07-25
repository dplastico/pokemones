<?php
$NICKNAME="misty";
$PASSWD="psyduck"; 


ob_start();

//este PHP conecta a la DB hay que quizas despues eliminar el debug para no dar pistas
session_start();
// la configuracion de la base de datos llega a traves de variables de entorno introducidas por docker
$host = $_ENV['DB0_PORT_3306_TCP_ADDR']; 
$user = $_ENV['DB0_ENV_MYSQL_USER']; 
$password = $_ENV['DB0_ENV_MYSQL_ROOT_PASSWORD'];
$dbname = $_ENV['DB0_ENV_MYSQL_DATABASE']; 

$con = mysqli_connect($host, $user, $password,$dbname);
// debug de la conexion
if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }

// revisa que la tabla users exista. si no es el caso, la crea
$checktable = mysqli_query($con, "SELECT 1 from users LIMIT 1");

if($checktable == FALSE) 
{
  error_log("tabla no ha sido creada. creando...");
    $createtable = mysqli_query($con, "CREATE TABLE IF NOT EXISTS users (
    NICKNAME varchar(16) NOT NULL,
    PASSWD varchar(16) NOT NULL)");

    // die (mysqli_error($con));
    // $createtable;
} else 
{
    // mysqli_error($con);
}

// revisa que el usuario y password del ejercicio hayan sido creados, si no es el caso, los crea.
$sql_query = "select count(*) as cntUser from users where nickname='".$NICKNAME."' and passwd='".$PASSWD."'";
$result    = mysqli_query($con, $sql_query);
$row       = mysqli_fetch_array($result);

$count = $row['cntUser'];
if($count==0) {
  error_log("usuario no ha sido creado. creando...");
  $sql_query = "INSERT INTO users (nickname,passwd) VALUES ('$NICKNAME','$PASSWD')";
  error_log($sql_query);
  $result    = mysqli_query($con, $sql_query);
  error_log($result);

}

?>