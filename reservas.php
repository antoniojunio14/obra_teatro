<?php
include("config.php"); 
$query = "SELECT 
tb_reservas.Id_Reservas, 
tb_reservas.Fecha_de_reserva, 
tb_obras.Titulo AS Titulo
FROM 
tb_reservas
INNER JOIN 
tb_funciones ON tb_reservas.Id_Funciones = tb_funciones.Id_Funciones
INNER JOIN 
tb_obras ON tb_funciones.Id_Obras = tb_obras.Id_Obras
WHERE 
tb_reservas.Estado = 1;
";




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
    <title>Reservas</title>
</head>
<body>

<!-- Creamos un menú -->
<div class="icon-bar">
    <a href="registrar_reservas.php"><i class="fa fa-registered"></i></a>
    <a href="home.html"><i class="fa fa-home"></i></a>
</div>

<h2>Reservas</h2>
<hr>

<div class="container">
    <!-- Creo la tabla para presentar las reservas de la base de datos -->
    <table>
        <tr>
            <th>ID</th>
            <th>ID de Funciones</th>
            <th>Fecha</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_Reservas'] . "</td>";
            echo "<td>" . $row['Titulo'] . "</td>";
            echo "<td>" . $row['Fecha_de_reserva'] . "</td>";
            echo "<td><a href='editar_reservas.php?id=" . $row['Id_Reservas'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_reservas.php?id=" . $row['Id_Reservas'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
