<?php
include("config.php");

$query = "SELECT tb_funciones.Id_funciones, tb_obras.Titulo, tb_funciones.Fecha_y_Hora, tb_funciones.duracion, tb_funciones.Precio, tb_salas.Nombre
FROM tb_funciones
INNER JOIN tb_obras ON tb_funciones.Id_obras = tb_obras.Id_obras
INNER JOIN tb_salas ON tb_funciones.Id_sala = tb_salas.Id_sala
WHERE tb_funciones.estado = 1";

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Funciones Teatrales</title>
</head>
<body>

<!-- Creamos un menú -->
<div class="icon-bar">
    <a href="registro_funciones.php"><i class="fa fa-registered"></i></a>
    <a href="home.html"><i class="fa fa-home"></i></a>
</div>

<h2>Funciones Teatrales</h2>
<hr>

<div class="container">
    <!-- Creo la tabla para presentar las funciones teatrales de la base de datos -->
    <table>
        <tr>
            <th>ID</th>
            <th> id_Obra</th>
            <th>Fecha y Hora</th>
            <th>Duración</th>
            <th>Precio</th>
            <th>id_Sala</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_funciones'] . "</td>";
            echo "<td>" . $row['Titulo'] . "</td>";
            echo "<td>" . $row['Fecha_y_Hora'] . "</td>";
            echo "<td>" . $row['duracion'] . "</td>";
            echo "<td>" . $row['Precio'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td><a href='editar_funcion.php?id=" . $row['Id_funciones'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_funcion.php?id=" . $row['Id_funciones'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
