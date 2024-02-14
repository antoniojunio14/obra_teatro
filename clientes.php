<?php
include("config.php");
$query = "SELECT  tb_clientes.Id_Clientes, tb_Reservas.Fecha_de_reserva, tb_usuarios.Nombre, tb_clientes.tipo
FROM tb_clientes 
INNER JOIN tb_reservas ON tb_clientes.Id_Reservas = tb_reservas.Id_Reservas
INNER JOIN tb_usuarios ON tb_clientes.Id_usuarios = tb_usuarios.id_Usuarios
WHERE tb_clientes.Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Clientes</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registrar_cliente.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>
    <h2>Clientes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>ID de Reservas</th>
            <th>ID de Usuarios</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_Clientes'] . "</td>";
            echo "<td>" . $row['Fecha_de_reserva'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['tipo'] . "</td>";
            
            echo "<td><a href='actualizar_cliente.php?id=" . $row['Id_Clientes'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_cliente.php?id=" . $row['Id_Clientes'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
