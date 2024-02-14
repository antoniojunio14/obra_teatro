<?php
include("config.php");

// Obtén el ID del cliente a editar (debería pasarse desde la página clientes.php)
$id_cliente = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del cliente
$query = "SELECT * FROM tb_clientes WHERE id_Clientes = $id_cliente";
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
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="clientes.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>EDITAR CLIENTE</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del cliente -->
    <form action="actualizar_cliente.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del cliente -->
            <input type="hidden" name="Id_Clientes" value="<?php echo $id_cliente; ?>" required>

            <label for="Id_Reservas"><b>ID de Reservas:</b></label>
            <input type="text" placeholder="Ingrese el ID de Reservas" name="Id_Reservas" value="<?php echo $row['Id_Reservas']; ?>" required>

            <label for="Id_usuarios"><b>ID de Usuarios:</b></label>
            <input type="text" placeholder="Ingrese el ID de Usuarios" name="Id_usuarios" value="<?php echo $row['Id_usuarios']; ?>" required>

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
    echo "No se encontraron datos para el cliente con ID $id_cliente";
}
?>
