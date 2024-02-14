<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id_promocion = $_POST['Id_promocion'];
    $Id_categorias = $_POST['Id_categorias'];
    $Id_descuento = $_POST['Id_descuento'];

    $sql = "INSERT INTO tb_detalle_promociones (Id_promocion, Id_categorias, Id_descuento) 
            VALUES ('$Id_promocion', '$Id_categorias', '$Id_descuento')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Detalle de Promoción registrado con éxito");';
        echo 'window.location="detalle_promociones.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
