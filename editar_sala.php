<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Sala</title>
</head>

<body>
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="salas.php"><i class="fa fa-sitemap"></i></a>
    </div>
    <h2>EDITAR SALA</h2>
    <hr>
    <?php
    include("config.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM tb_salas WHERE Id_sala = $id";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="actualizar_sala.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['Id_sala']; ?>">
        <div class="container">
            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" value="<?php echo $row['Nombre']; ?>" name="Nombre" required>

            <label for="Tipo"><b>Tipo:</b></label>
            <input type="text" value="<?php echo $row['Tipo']; ?>" name="Tipo" required>

            <label for="Capacidad"><b>Capacidad:</b></label>
            <input type="number" value="<?php echo $row['Capacidad']; ?>" name="Capacidad" required>

          

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1" <?php if ($row['Estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['Estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar Sala</button>
        </div>
    </form>
</body>

</html>
