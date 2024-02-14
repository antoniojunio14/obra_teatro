<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_sala = $_POST['Id_Salas'];
    $numero_de_asientos = $_POST['Numero_de_asientos'];
    $fila = $_POST['Fila'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_asientos (Id_Salas, Numero_de_asientos, Fila, Estado)
            VALUES ('$id_sala', '$numero_de_asientos', '$fila', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="asientos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
