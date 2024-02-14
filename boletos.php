<?php
include("config.php");

$query = "SELECT 
            tb_boletos.id_boletos, 
            tb_funciones.Fecha_y_Hora, 
            tb_usuarios.Nombre AS nombre_cliente,
            tb_categorias.tipo AS tipo_categoria,
            tb_boletos.cantidad
          FROM tb_boletos
          INNER JOIN tb_funciones ON tb_boletos.id_funciones = tb_funciones.id_funciones
          INNER JOIN tb_clientes ON tb_boletos.id_Clientes = tb_clientes.id_Clientes
          INNER JOIN tb_usuarios ON tb_clientes.id_usuarios = tb_usuarios.id_Usuarios
          INNER JOIN tb_categorias ON tb_boletos.id_categorias = tb_categorias.id_categorias
          WHERE tb_boletos.estado = 1";

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Boletos</title>
</head>
<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="registrar_boleto.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>
    <h2>Boletos</h2>
    <hr>

    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora de Función</th>
                <th> id_Cliente</th>
                <th>id_Categoría</th>
                <th>Cantidad</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_boletos'] . "</td>";
                echo "<td>" . $row['Fecha_y_Hora'] . "</td>";
                echo "<td>" . $row['nombre_cliente'] . "</td>";
                echo "<td>" . $row['tipo_categoria'] . "</td>";
                echo "<td>" . $row['cantidad'] . "</td>";
                echo "<td><a href='editar_boleto.php?id=" . $row['id_boletos'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='eliminar_boleto.php?id=" . $row['id_boletos'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

