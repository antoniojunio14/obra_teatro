<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_boletos = $_POST['Id_boletos'];
    $porcentaje_descuento = $_POST['Porcentaje_de_descuento'];
    $nombre = $_POST['Nombre'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_descuento (Id_boletos, Porcentaje_de_descuento, Nombre)
            VALUES ('$id_boletos', '$porcentaje_descuento', '$nombre')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Descuento guardado exitosamente");';
        echo 'window.location="descuentos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
