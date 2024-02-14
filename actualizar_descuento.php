<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_descuento = $_POST['Id_descuento'];
    $id_boletos = $_POST['Id_boletos'];
    $porcentaje_descuento = $_POST['Porcentaje_de_descuento'];
    $nombre = $_POST['Nombre'];
    $estado_descuento = $_POST['Estado_descuento'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_descuento 
            SET Id_boletos='$id_boletos', Porcentaje_de_descuento='$porcentaje_descuento', 
                Nombre='$nombre', Estado='$estado_descuento' 
            WHERE Id_descuento='$id_descuento'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Descuento actualizado exitosamente");';
        echo 'window.location="descuentos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
