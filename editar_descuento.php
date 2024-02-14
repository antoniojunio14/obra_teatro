<?php
include("config.php");

// Obtén el ID del descuento a editar (debería pasarse desde la página descuentos.php)
$id_descuento = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica si el ID del descuento fue proporcionado
if (!$id_descuento) {
    echo "ID de descuento no proporcionado";
    exit;
}

// Realiza la consulta para obtener los datos actuales del descuento
$query = "SELECT * FROM tb_descuento WHERE Id_descuento = $id_descuento";
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
    <title>Editar Descuento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="descuentos.php"><i class="fa fa-tags"></i></a>
    </div>

    <h2>EDITAR DESCUENTO</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del descuento -->
    <form action="actualizar_descuento.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del descuento -->
            <input type="hidden" name="Id_descuento" value="<?php echo $id_descuento; ?>" required>

            <label for="Id_boletos"><b>ID de Boletos:</b></label>
            <input type="text" placeholder="Ingrese el ID de Boletos" name="Id_boletos" value="<?php echo $row['Id_boletos']; ?>" required>

            <label for="Porcentaje_de_descuento"><b>Porcentaje de Descuento:</b></label>
            <input type="text" placeholder="Ingrese el porcentaje de descuento" name="Porcentaje_de_descuento" value="<?php echo $row['Porcentaje_de_descuento']; ?>" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre del descuento" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>

            <label for="Estado_descuento"><b>Estado:</b></label>
            <select name="Estado_descuento" required>
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
    echo "No se encontraron datos para el descuento con ID $id_descuento";
}
?>
