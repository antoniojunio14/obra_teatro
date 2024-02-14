<?php
include("config.php");
// Hago el query con el select
$query = "SELECT * FROM tb_usuarios WHERE Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Usuarios</title>
</head>

<body>
   
<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="registro.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <h2>Usuarios</h2>
    <hr>

    <div class="container">
        <!-- Creo la tabla para presentar las áreas de la base de datos -->
        <?php
       echo "<table>";
       echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Teléfono</th><th>Contraseña</th><th>Nacionalidad</th><th>Género</th><th>Rol</th>
       <th>Actualizar</th><th>Eliminar</th> </tr>";
       while ($row = mysqli_fetch_array($result)) {
           echo "<tr>";
           echo "<td>" . $row['Id_Usuarios'] . "</td>";
           echo "<td>" . $row['Nombre'] . "</td>";
           echo "<td>" . $row['Apellido'] . "</td>";
           echo "<td>" . $row['direccion'] . "</td>";
           echo "<td>" . $row['telefono'] . "</td>";
           echo "<td>" . $row['Contrasena'] . "</td>";
           echo "<td>" . $row['Nacionalidad'] . "</td>";
           echo "<td>" . $row['Genero'] . "</td>";
           echo "<td>" . $row['Rol'] . "</td>";
           echo "<td><a href='editar.php?id=" . $row['Id_Usuarios'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar.php?id=" . $row['Id_Usuarios'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>