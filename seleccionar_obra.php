<?php
include("config.php");

// Obtén la lista de obras activas
$query_obras = "SELECT * FROM tb_obras WHERE Estado = 1";
$result_obras = mysqli_query($mysqli, $query_obras);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Seleccionar Obra</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="seleccionar_obra.php"><i class="fa fa-book"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>SELECCIONAR OBRA</h2>
    <hr>
    <!-- Formulario para seleccionar una obra -->
    <form action="registrar_funcion.php" method="POST">
        <div class="container">
            <label for="Id_obras"><b>Seleccione una Obra:</b></label>
            <select name="Id_obras" required>
                <?php
                while ($row = mysqli_fetch_array($result_obras)) {
                    echo "<option value='" . $row['Id_obras'] . "'>" . $row['Titulo'] . "</option>";
                }
                ?>
            </select>

            <button type="submit">Continuar</button>
        </div>
    </form>
</body>

</html>
