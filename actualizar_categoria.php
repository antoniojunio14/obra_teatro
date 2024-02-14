<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_categoria = $_POST['Id_categorias'];
    $tipo = $_POST['Tipo'];
    $precio = $_POST['Precio'];
    $estado = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_categorias 
            SET tipo='$tipo', Precio='$precio', estado='$estado' 
            WHERE id_categorias='$id_categoria'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Categoría actualizada con éxito");';
        echo 'window.location="categorias.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
