<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila todos los campos del formulario
    $id_usuario = $_POST['id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Contrasena = $_POST['Contrasena'];
    $Nacionalidad = $_POST['Nacionalidad'];
    $Genero = $_POST['Genero'];
    $Rol = $_POST['Rol'];
    $Estado = $_POST['Estado'];

    // Prepara la consulta SQL para actualizar los campos en la base de datos
    $sql = "UPDATE tb_usuarios 
            SET Nombre='$Nombre', Apellido='$Apellido', telefono='$Telefono', direccion='$Direccion', 
                Contrasena='$Contrasena', Nacionalidad='$Nacionalidad', Genero='$Genero', 
                Rol='$Rol', Estado='$Estado' 
            WHERE Id_Usuarios='$id_usuario'";
    
    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Actualizado");';
        echo 'window.location="usuarios.php";'; // Cambiado a "usuarios.php"
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID del usuario a editar (debería pasarse desde la página usuarios.php)
$id_usuario = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del usuario
$query = "SELECT * FROM tb_usuarios WHERE Id_Usuarios = $id_usuario";
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
    <title>Editar Datos</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuarios.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>EDITAR USUARIO</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="editar.php" method="POST">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $id_usuario; ?>" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese su nombre" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>

            <label for="Apellido"><b>Apellido:</b></label>
            <input type="text" placeholder="Ingrese su apellido" name="Apellido" value="<?php echo $row['Apellido']; ?>" required>

            <label for="Direccion"><b>Dirección:</b></label>
            <input type="text" placeholder="Ingrese su dirección" name="Direccion" value="<?php echo $row['direccion']; ?>" required>

            <label for="Telefono"><b>Teléfono:</b></label>
            <input type="text" placeholder="Ingrese su teléfono" name="Telefono" value="<?php echo $row['telefono']; ?>" required>

            <label for="Contrasena"><b>Contraseña:</b></label>
            <input type="password" placeholder="Ingrese su contraseña" name="Contrasena" value="<?php echo $row['Contrasena']; ?>" required>

            <label for="Nacionalidad"><b>Nacionalidad:</b></label>
            <select name="Nacionalidad" required>
                <option value="Argentina" <?php if ($row['Nacionalidad'] == 'Argentina') echo 'selected'; ?>>Argentina</option>
                <option value="Brasil" <?php if ($row['Nacionalidad'] == 'Brasil') echo 'selected'; ?>>Brasil</option>
                <option value="Colombia" <?php if ($row['Nacionalidad'] == 'Colombia') echo 'selected'; ?>>Colombia</option>
                <option value="Ecuatoriana" <?php if ($row['Nacionalidad'] == 'Ecuatoriana') echo 'selected'; ?>>Ecuatoriana</option>
            </select>

            <label for="Genero"><b>Género:</b></label>
            <select name="Genero" required>
                <option value="M" <?php if ($row['Genero'] == 'M') echo 'selected'; ?>>M</option>
                <option value="F" <?php if ($row['Genero'] == 'F') echo 'selected'; ?>>F</option>
            </select>

            <label for="Rol"><b>Rol:</b></label>
            <select name="Rol" required>
                <option value="Usuario" <?php if ($row['Rol'] == 'Usuario') echo 'selected'; ?>>Usuario</option>
                <option value="Administrador" <?php if ($row['Rol'] == 'Administrador') echo 'selected'; ?>>Administrador</option>
                <option value="Actor" <?php if ($row['Rol'] == 'Actor') echo 'selected'; ?>>Actor</option>
                <option value="Productor" <?php if ($row['Rol'] == 'Productor') echo 'selected'; ?>>Productor</option>
                
            </select>

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
    echo "No se encontraron datos para el usuario con ID $id_usuario";
}
?>
