<?php

    $conexion=mysqli_connect('localhost','root','','base datos formulario');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla&display=swap" rel="stylesheet">
    <style>
        img {
            margin: 10px;
            width: 40px;
        }

        
    </style>
    <title>Admin</title>
</head>
<body style="font-family: 'Anek Bangla', sans-serif;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="./IMG/SENA.png" alt="SENA">
          <a class="navbar-brand" href="#">Menú de Administrador</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost:8080/SenaPHP/IndexAdmin.php#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/SenaPHP/IndexDelete.html">Eliminar Usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/SenaPHP/IndexLogin.html">Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Table -->

     <center> <h1>Listado de Usuarios</h1></center>

      <div class="container_1" style="display: flex; margin: 70px">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Ficha</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
    </tr>

        <?php
          $sql = "SELECT * from formulario_sena";
          $result=mysqli_query($conexion,$sql);


          while($mostrar=mysqli_fetch_array($result)){

        ?>

  </thead>
  <tbody>
    <tr>
      <td><?php echo $mostrar['Ficha'] ?></td>
      <td><?php echo $mostrar['Nombre'] ?></td>
      <td><?php echo $mostrar['Nombres'] ?></td>
      <td><?php echo $mostrar['Apellidos'] ?></td>
      <td><?php echo $mostrar['Dirección'] ?></td>
      <td><?php echo $mostrar['Correo'] ?></td>
      <td><?php echo $mostrar['Telefono'] ?></td>
      <td><?php echo $mostrar['Usuario'] ?></td>
      <td><?php echo $mostrar['Contraseña'] ?></td>
    </tr>
   
  </tbody>

  <?php
  }
  ?>
</table>
      </div>
    
    
</body>
</html>



