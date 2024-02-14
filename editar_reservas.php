<?php
include("config.php");

// Obtén el ID de la reserva a editar (debería pasarse desde la página reservas.php)
$id_reserva = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la reserva
$query = "SELECT * FROM tb_reservas WHERE Id_Reservas = $id_reserva";
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
    <title>Editar Reserva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="reservas.php"><i class="fa fa-calendar"></i></a>
    </div>

    <h2>EDITAR RESERVA</h2>
    <hr>

    <!-- Creo un formulario para editar los datos de la reserva -->
    <form action="actualizar_reservas.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la reserva -->
            <input type="hidden" name="Id_Reservas" value="<?php echo $id_reserva; ?>" required>

            <label for="Id_funciones"><b>ID de Función:</b></label>
            <input type="text" placeholder="Ingrese el ID de la función" name="Id_funciones" value="<?php echo $row['Id_funciones']; ?>" required>

            <label for="Fecha_de_reserva"><b>Fecha de Reserva:</b></label>
            <input type="datetime-local" name="Fecha_de_reserva" value="<?php echo date('Y-m-d\TH:i', strtotime($row['Fecha_de_reserva'])); ?>" required>

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
    echo "No se encontraron datos para la reserva con ID $id_reserva";
}
?>
