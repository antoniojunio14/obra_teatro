<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_funciones'])) {
    $id_funcion = $_POST['Id_funciones'];

    $Id_obras = $_POST['Id_obras'];
    $Fecha_y_Hora = $_POST['Fecha_y_Hora'];
    $Duracion = $_POST['duracion'];
    $Precio = $_POST['Precio'];
    $Id_sala = $_POST['Id_sala'];
    $Estado = $_POST['estado'];

    $sql = "UPDATE tb_funciones 
            SET Id_obras='$Id_obras', Fecha_y_Hora='$Fecha_y_Hora', duracion='$Duracion', 
                Precio='$Precio', Id_sala='$Id_sala', estado='$Estado' 
            WHERE Id_funciones='$id_funcion'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado");';
        echo 'window.location="funciones.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID de la función a editar (debería pasarse desde la página funciones.php)
$id_funcion = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la función
$query = "SELECT * FROM tb_funciones WHERE Id_funciones = $id_funcion";
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
    <title>Actualizar Función</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="funciones.php"><i class="fa fa-smile-o"></i></a>
    </div>

    <h2>ACTUALIZAR FUNCIÓN</h2>
    <hr>

    <!-- Creo un formulario para actualizar los datos -->
    <form action="editar_funcion.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la función -->
            <input type="hidden" name="Id_funciones" value="<?php echo $id_funcion; ?>" required>

            <label for="Id_obras"><b>ID de Obras:</b></label>
            <input type="text" placeholder="Ingrese el ID de Obras" name="Id_obras" value="<?php echo $row['Id_obras']; ?>" required>

            <label for="Id_sala"><b>ID de Sala:</b></label>
            <input type="text" placeholder="Ingrese el ID de Sala" name="Id_sala" value="<?php echo $row['Id_sala']; ?>" required>

            <label for="Precio"><b>Precio:</b></label>
            <input type="text" placeholder="Ingrese el Precio" name="Precio" value="<?php echo $row['Precio']; ?>" required>

            <label for="Fecha_y_Hora"><b>Fecha y Hora:</b></label>
            <input type="datetime-local" name="Fecha_y_Hora" value="<?php echo $row['Fecha_y_Hora']; ?>" required>

            <label for="duracion"><b>Duración:</b></label>
            <input type="time" name="duracion" value="<?php echo $row['duracion']; ?>" required>

          


            <label for="estado"><b>Estado:</b></label>
            <select name="estado" required>
                <option value="1" <?php if ($row['estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar </button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para la función con ID $id_funcion";
}
?>
