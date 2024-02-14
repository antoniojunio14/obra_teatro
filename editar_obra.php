<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila todos los campos del formulario
    $id_obra = $_POST['id'];
    $titulo = $_POST['Titulo'];
    $genero = $_POST['Genero'];
    $tiempo_de_obra = $_POST['Tiempo_de_obra'];
    $estado = $_POST['Estado'];

    // Prepara la consulta SQL para actualizar los campos en la base de datos
    $sql = "UPDATE tb_obras 
            SET Titulo='$titulo', Genero='$genero', Tiempo_de_obra='$tiempo_de_obra', Estado='$estado' 
            WHERE Id_obras='$id_obra'";
    
    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Obra actualizada");';
        echo 'window.location="obras.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID de la obra a editar (debería pasarse desde la página obras.php)
$id_obra = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la obra
$query = "SELECT * FROM tb_obras WHERE Id_obras = $id_obra";
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
    <title>Editar Obra</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="obras.php"><i class="fa fa-book"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>EDITAR OBRA</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="editar_obra.php" method="POST">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $id_obra; ?>" required>

            <label for="Titulo"><b>Título:</b></label>
            <input type="text" placeholder="Ingrese el Título" name="Titulo" value="<?php echo $row['Titulo']; ?>" required>

            <label for="Genero"><b>Género:</b></label>
            <input type="text" placeholder="Ingrese el Género" name="Genero" value="<?php echo $row['Genero']; ?>" required>

            <label for="Tiempo_de_obra"><b>Tiempo de Obra:</b></label>
            <input type="time" name="Tiempo_de_obra" value="<?php echo $row['Tiempo_de_obra']; ?>" required>

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
    echo "No se encontraron datos para la obra con ID $id_obra";
}
?>
