<?php
include("config.php");

// Obtén el ID del asiento a editar (debería pasarse desde la página asientos.php)
$id_asiento = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del asiento
$query = "SELECT * FROM tb_asientos WHERE Id_Asientos = $id_asiento";
$result = mysqli_query($mysqli, $query);

// Verifica si se encontraron datos
if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Asiento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="asientos.php"><i class="fa fa-chair"></i></a>
    </div>

    <h2>EDITAR ASIENTO</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del asiento -->
    <form action="actualizar_asiento.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del asiento -->
            <input type="hidden" name="Id_Asientos" value="<?php echo $id_asiento; ?>" required>

            <label for="Id_Salas"><b>ID de la Sala:</b></label>
            <input type="text" placeholder="Ingrese el ID de la sala" name="Id_Salas" value="<?php echo $row['Id_Salas']; ?>" required>

            <label for="Numero_de_asientos"><b>Número de Asientos:</b></label>
            <input type="number" placeholder="Ingrese el número de asientos" name="Numero_de_asientos" value="<?php echo $row['Numero_de_asientos']; ?>" required>

            <label for="Fila"><b>Fila:</b></label>
            <input type="text" placeholder="Ingrese la fila" name="Fila" value="<?php echo $row['Fila']; ?>" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1" <?php if ($row['Estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['Estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para el asiento con ID $id_asiento";
}
?>
