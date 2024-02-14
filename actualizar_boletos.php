<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_boleto = $_POST['Id_boletos'];
    $id_funcion = $_POST['Id_funciones'];
    $id_cliente = $_POST['Id_clientes'];
    $id_categoria = $_POST['Id_categorias'];
    $cantidad = $_POST['Cantidad'];
    $estado = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_boletos 
            SET Id_funciones='$id_funcion', Id_clientes='$id_cliente', Id_categorias='$id_categoria', 
                Cantidad='$cantidad', estado='$estado' 
            WHERE Id_boletos='$id_boleto'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="boletos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
