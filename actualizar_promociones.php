<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_promociones'])) {
    $id_promocion = $_POST['Id_promociones'];
    $nombre = $_POST['Nombre'];
    $fecha_inicio = $_POST['Fecha_inicio'];
    $fecha_fin = $_POST['Fecha_fin'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_promociones 
            SET Nombre='$nombre', Fecha_inicio='$fecha_inicio', Fecha_fin='$fecha_fin', Estado='$estado'
            WHERE Id_promociones='$id_promocion'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Promoción actualizada exitosamente");';
        echo 'window.location="promociones.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID de la promoción a editar (debería pasarse desde la página promociones.php)
$id_promocion = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la promoción
$query = "SELECT * FROM tb_promociones WHERE Id_promociones = $id_promocion";
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
    <title>Actualizar Promoción</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="promociones.php"><i class="fa fa-gift"></i></a>
    </div>

    <h2>ACTUALIZAR PROMOCIÓN</h2>
    <hr>

    <!-- Creo un formulario para actualizar los datos de la promoción -->
    <form action="actualizar_promociones.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la promoción -->
            <input type="hidden" name="Id_promociones" value="<?php echo $id_promocion; ?>" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el Nombre" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>

            <label for="Fecha_inicio"><b>Fecha de Inicio:</b></label>
            <input type="date" name="Fecha_inicio" value="<?php echo $row['Fecha_inicio']; ?>" required>

            <label for="Fecha_fin"><b>Fecha de Fin:</b></label>
            <input type="date" name="Fecha_fin" value="<?php echo $row['Fecha_fin']; ?>" required>

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
    echo "No se encontraron datos para la promoción con ID $id_promocion";
}
?>
