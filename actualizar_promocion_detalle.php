<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_detalle_promociones = $_POST['Id_detalle_promociones'];
    $id_promocion = $_POST['Id_detalle_promociones'];
    $id_categorias = $_POST['Id_categorias'];
    $id_descuento = $_POST['Id_descuento'];
    $estado = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_detalle_promociones 
            SET Id_detalle_promociones='$id_promocion', Id_categorias='$id_categorias', 
                Id_descuento='$id_descuento', Estado='$estado' 
            WHERE Id_detalle_promociones='$id_detalle_promociones'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="detalle_promociones.php";';  // Cambia "tu_pagina.php" por la página a la que deseas redirigir
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
