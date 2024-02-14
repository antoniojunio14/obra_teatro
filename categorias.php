<?php
include("config.php");
$query = "SELECT * FROM tb_categorias WHERE estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Categorías</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registrar_categoria.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>
    <h2>Categorias</h2>
    <hr>

    <div class="container">
        <!-- Creo la tabla para presentar las áreas de la base de datos -->
        <table>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_categorias'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['Precio'] . "</td>";
                echo "<td><a href='editar_categoria.php?id=" . $row['id_categorias'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='eliminar_categoria.php?id=" . $row['id_categorias'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
