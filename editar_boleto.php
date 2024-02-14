<?php
include("config.php");

// Obtén el ID del boleto a editar (debería pasarse desde la página boletos.php)
$id_boleto = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del boleto
$query = "SELECT * FROM tb_boletos WHERE Id_boletos = $id_boleto";
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
    <title>Editar Boleto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="boletos.php"><i class="fa fa-ticket"></i></a>
    </div>

    <h2>EDITAR BOLETO</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del boleto -->
    <form action="actualizar_boletos.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del boleto -->
            <input type="hidden" name="Id_boletos" value="<?php echo $id_boleto; ?>" required>

            <label for="Id_funciones"><b>ID de Función:</b></label>
            <input type="text" placeholder="Ingrese el ID de la función" name="Id_funciones" value="<?php echo $row['Id_funciones']; ?>" required>

            <label for="Id_clientes"><b>ID de Cliente:</b></label>
            <input type="text" placeholder="Ingrese el ID del cliente" name="Id_clientes" value="<?php echo $row['Id_clientes']; ?>" required>

            <label for="Id_categorias"><b>ID de Categoría:</b></label>
            <input type="text" placeholder="Ingrese el ID de la categoría" name="Id_categorias" value="<?php echo $row['Id_categorias']; ?>" required>

            <label for="Cantidad"><b>Cantidad:</b></label>
            <input type="text" placeholder="Ingrese la cantidad de boletos" name="Cantidad" value="<?php echo $row['Cantidad']; ?>" required>

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
    echo "No se encontraron datos para el boleto con ID $id_boleto";
}
?>
