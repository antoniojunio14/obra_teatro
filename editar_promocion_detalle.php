<?php
include("config.php");

// Obtén el ID del detalle de promoción a editar (debería pasarse desde la página que lista los detalles de promociones)
$id_detalle_promocion = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del detalle de promoción
$query = "SELECT * FROM tb_detalle_promociones WHERE Id_detalle_promociones = $id_detalle_promocion";
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
    <title>Editar Detalle de Promoción</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="detalle_promociones.php"><i class="fa fa-gift"></i></a>
    </div>

    <h2>EDITAR DETALLE DE PROMOCIÓN</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del detalle de promoción -->
    <form action="actualizar_promocion_detalle.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del detalle de promoción -->
            <input type="hidden" name="Id_detalle_promociones" value="<?php echo $id_detalle_promocion; ?>" required>

            <label for="Id_promocion"><b>ID de Promoción:</b></label>
            <input type="text" placeholder="Ingrese el ID de la promoción" name="Id_promocion" value="<?php echo $row['Id_promocion']; ?>" required>

            <label for="Id_categorias"><b>ID de Categoría:</b></label>
            <input type="text" placeholder="Ingrese el ID de la categoría" name="Id_categorias" value="<?php echo $row['Id_categorias']; ?>" required>

            <label for="Id_descuento"><b>ID de Descuento:</b></label>
            <input type="text" placeholder="Ingrese el ID de descuento" name="Id_descuento" value="<?php echo $row['Id_descuento']; ?>" required>

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
    echo "No se encontraron datos para el detalle de promoción con ID $id_detalle_promocion";
}
?>
