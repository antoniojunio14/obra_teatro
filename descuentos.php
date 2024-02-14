<?php
include("config.php");
$query = "SELECT * FROM tb_descuento WHERE Estado = 1";
$query = "SELECT tb_descuento.Id_descuento, tb_boletos.Cantidad,tb_descuento.Nombre, tb_descuento.Porcentaje_de_descuento
FROM tb_descuento  
INNER JOIN tb_boletos ON tb_descuento.Id_boletos = tb_boletos.Id_boletos
WHERE tb_descuento.Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuentos</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Creamos un menú -->
<div class="icon-bar">
    <a href="registrar_descuento.php"><i class="fa fa-registered"></i></a>
    <a href="home.html"><i class="fa fa-home"></i></a>
</div>

<h2>Descuentos</h2>
<hr>

<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>ID de Boletos</th>
            <th>Porcentaje de Descuento</th>
            <th>Nombre</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_descuento'] . "</td>";
            echo "<td>" . $row['Cantidad'] . "</td>";
            echo "<td>" . $row['Porcentaje_de_descuento'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td><a href='editar_descuento.php?id=" . $row['Id_descuento'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_descuento.php?id=" . $row['Id_descuento'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
