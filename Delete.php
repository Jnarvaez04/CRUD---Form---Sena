<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Usuario = $_POST["Usuario"];
$Urlogin = "http://localhost:8080/SenaPHP/IndexAdmin.php";




$servername = "localhost";
$database = "base datos formulario";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


$sqleliminar = "DELETE FROM formulario_sena WHERE Usuario = '".$Usuario."'";

if (mysqli_query ($conn, $sqleliminar))
{
      echo "Registro eliminado";
      header('Location:' .$Urlogin); 
}
else
{
      echo "Error " .$sql.  "<br>" .mysqli_error($conn);
}


