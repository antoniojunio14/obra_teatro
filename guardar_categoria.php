<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $tipo = $_POST['Tipo'];
    $precio = $_POST['Precio'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_categorias (tipo, Precio, estado)
            VALUES ('$tipo', '$precio', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Categoría registrada con éxito");';
        echo 'window.location="categorias.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
