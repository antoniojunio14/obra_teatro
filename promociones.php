<?php
include("config.php");

// Consulta para obtener datos de difuntos
$query = "SELECT * FROM tb_difuntos";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>DIFUNTOS</title>
</head>

<body>

    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_difunto.php"><i class="fa fa-registered"></i></a>
        <a href="menu.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>DIFUNTOS</h2>
    <hr>
    <div class="container">
        <!-- Creo la tabla para presentar los difuntos de la base de datos -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Fecha Nacimiento</th>
                <th>Fecha Defunción</th>
                <th>Causa Defunción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_difunto'] . "</td>";
                echo "<td>" . $row['nombre_difunto'] . "</td>";
                echo "<td>" . $row['apellidos_difunto'] . "</td>";
                echo "<td>" . $row['sexo_difunto'] . "</td>";
                echo "<td>" . $row['fecha_nacimiento_difunto'] . "</td>";
                echo "<td>" . $row['fecha_defuncion'] . "</td>";
                echo "<td>" . $row['causa_defuncion'] . "</td>";
                echo "<td><a href='editar_difunto.php?id=" . $row['id_difunto'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='eliminar_difunto.php?id=" . $row['id_difunto'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
