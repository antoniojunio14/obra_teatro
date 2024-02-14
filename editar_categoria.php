<?php
include("config.php");

// Obtén el ID de la categoría a editar (debería pasarse desde la página categorias.php)
$id_categoria = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la categoría
$query = "SELECT * FROM tb_categorias WHERE id_categorias = $id_categoria";
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
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="categorias.php"><i class="fa fa-tags"></i></a>
    </div>

    <h2>EDITAR CATEGORÍA</h2>
    <hr>

    <!-- Creo un formulario para editar los datos de la categoría -->
    <form action="actualizar_categoria.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la categoría -->
            <input type="hidden" name="Id_categorias" value="<?php echo $id_categoria; ?>" required>

            <label for="Tipo"><b>Tipo:</b></label>
            <input type="text" placeholder="Ingrese el tipo de categoría" name="Tipo" value="<?php echo $row['tipo']; ?>" required>

            <label for="Precio"><b>Precio:</b></label>
            <input type="number" step="1" placeholder="Ingrese el precio de la categoría" name="Precio" value="<?php echo $row['Precio']; ?>" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1" <?php if ($row['estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para la categoría con ID $id_categoria";
}
?>
