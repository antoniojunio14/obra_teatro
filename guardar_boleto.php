<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_funcion = $_POST['Id_funciones'];
    $id_cliente = $_POST['Id_clientes'];
    $id_categoria = $_POST['Id_categorias'];
    $cantidad = $_POST['Cantidad'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_boletos (Id_funciones, Id_clientes, Id_categorias, Cantidad, estado)
            VALUES ('$id_funcion', '$id_cliente', '$id_categoria', '$cantidad', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Boleto registrado con éxito");';
        echo 'window.location="boletos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
