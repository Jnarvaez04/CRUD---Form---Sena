<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Ficha = $_POST["Ficha"];
$Nombre = $_POST["Nombre"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Direccion = $_POST["Direccion"];
$Correo = $_POST["Correo"];
$Telefono = $_POST["Telefono"];
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
 
echo "Usted se ha registrado correctamente.";
 
$sql = "INSERT INTO formulario_sena (Ficha, Nombre, 
Nombres, Apellidos, Dirección, Correo, Telefono, Usuario, Contraseña) VALUES ('$Ficha','$Nombre','$Nombres','$Apellidos','$Direccion','$Correo','$Telefono','$Usuario','$Contraseña')";
if (mysqli_query($conn, $sql)) {
      echo "<p>Para ingresar al sistema favor dar click <a href='http://localhost:8080/SenaPHP/IndexLogin.html'>aqui</a></p>";
      header('Location:' .$Urlogin); 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

