<?php
include("config.php");
$query = "SELECT  tb_detalle_promociones.Id_detalle_promociones, tb_promociones.Nombre, tb_categorias.tipo, tb_descuento.Porcentaje_de_descuento
FROM tb_detalle_promociones 
INNER JOIN tb_promociones ON tb_detalle_promociones.Id_promocion = tb_promociones.Id_promociones
INNER JOIN tb_categorias ON tb_detalle_promociones.Id_categorias = tb_categorias.id_categorias
INNER JOIN tb_descuento ON tb_detalle_promociones.Id_descuento = tb_descuento.Id_descuento
WHERE tb_detalle_promociones.Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Promociones</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_promocion_detalle.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>
    <h2>Detalle de Promociones</h2>
    <hr>

    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>ID de Promoción</th>
                <th>ID de Categorías</th>
                <th>ID de Descuento</th>
            
                <th>Actualizar</th>
                <th>Eliminar</th>
                
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['Id_detalle_promociones'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['Porcentaje_de_descuento'] . "</td>";
                echo "<td><a href='editar_promocion_detalle.php?id=" . $row['Id_detalle_promociones'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='eliminar_promocion_detalle.php?id=" . $row['Id_detalle_promociones'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>