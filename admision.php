<?php
include("config.php");

// Verificar si se enviaron los datos del formulario
if (isset($_POST['username']) && isset($_POST['password'])) {
    $nombre = $_POST['username'];
    $clave = $_POST['password'];

    $query = "SELECT * FROM tb_admision WHERE usuario = '$nombre' AND contrasena = '$clave'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location:home.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    echo "Error: Datos del formulario no recibidos";
}
?>
