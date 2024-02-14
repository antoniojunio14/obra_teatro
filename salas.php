<?php
include("config.php");
$query = "SELECT * FROM tb_salas WHERE Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Creamos un menú -->
<div class="icon-bar">
    <a href="registro_sala.php"><i class="fa fa-registered"></i></a>
    <a href="home.html"><i class="fa fa-home"></i></a>
</div>

<h2>Salas</h2>
<hr>

<div class="container">
    <!-- Creo la tabla para presentar las salas de la base de datos -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Capacidad</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_sala'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Capacidad'] . "</td>";
            echo "<td>" . $row['Tipo'] . "</td>";
            echo "<td><a href='editar_sala.php?id=" . $row['Id_sala'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_sala.php?id=" . $row['Id_sala'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
