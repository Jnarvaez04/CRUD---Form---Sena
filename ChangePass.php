<?php

//  echo '<pre>';
//  print_r($_POST);
//  echo '</pre>';
//  die();


$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];
$Urlogin = "http://localhost:8080/SenaPHP/IndexLogin.html";




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

echo "Connected successfully ";


$sql = "UPDATE formulario_sena SET Contraseña = '$Contraseña' WHERE Usuario = '$Usuario'";
if (mysqli_query($conn, $sql)) {
    echo "<p>Contraseña actualizada. Click<a href='http://localhost:8080/SenaPHP/IndexLogin.html'>aqui</a> Para iniciar sesión</p>";
    header('Location:' .$Urlogin); 
} 


else  {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>