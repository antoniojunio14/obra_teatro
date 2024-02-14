<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Insertar los datos en la base de datos usando sentencias preparadas
    $query = "INSERT INTO tb_admision (usuario, contrasena) VALUES (?, ?)";
    
    $stmt = mysqli_prepare($mysqli, $query);
    
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, 'ss', $usuario, $contrasena);
    
    // Ejecutar la consulta
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Registro exitoso, redirige al usuario a la página de inicio de sesión con un mensaje
        header("Location: login.html?registro=exitoso");
        exit();
    } else {
        echo "Error al registrar. Por favor, inténtalo de nuevo.";
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
}
?>
