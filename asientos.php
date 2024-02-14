<?php
include("config.php");
$query = "SELECT  tb_asientos.Id_Asientos, tb_salas.Nombre, tb_asientos.Numero_de_asientos,tb_asientos.Fila
FROM tb_asientos
INNER JOIN tb_salas ON tb_asientos.Id_Salas = tb_salas.Id_sala
WHERE tb_asientos.Estado = 1";
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
    <title>Asientos</title>
</head>
<body>
    <div class="icon-bar">
        <a href="registro_asiento.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
        </div>
    <h2>Asientos</h2>
    <hr>

    <div class="container">
    <table>
  
        <tr>
            <th>ID_Asientos</th>
            <th>ID de Salas</th>
            <th>Número de Asientos</th>
            <th>Fila</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id_Asientos'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Numero_de_asientos'] . "</td>";
            echo "<td>" . $row['Fila'] . "</td>";
            echo "<td><a href='actualizar_asiento.php?id=" . $row['Id_Asientos'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_asiento.php?id=" . $row['Id_Asientos'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
