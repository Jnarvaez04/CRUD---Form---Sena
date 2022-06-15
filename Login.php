<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];
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


$query = mysqli_query($conn,"SELECT * FROM formulario_sena WHERE Usuario ='".$Usuario."' and Contraseña = '".$Contraseña."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)

{
    echo "Bienvenido: " .$Usuario;
    header('Location:' .$Urlogin); 
} 

else if  ($nr == 0)

{
    //header("Location: index.html");
    echo "Usuario o contraseña incorrectos";
    echo "<p>Si aun no estas registrado favor dar click<a href='http://localhost:8080/SenaPHP/IndexRegistro.html'>aqui</a></p>";
}

