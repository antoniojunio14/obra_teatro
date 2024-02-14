<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Titulo = $_POST['Titulo'];
    $Genero = $_POST['Genero'];
    $Tiempo_de_obra = $_POST['Tiempo_de_obra'];
    $Estado = $_POST['Estado'];

    $sql = "INSERT INTO tb_obras (Titulo, Genero, Tiempo_de_obra,  Estado) 
            VALUES ('$Titulo', '$Genero', '$Tiempo_de_obra', '$Estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Obra registrada con éxito");';
        echo 'window.location="obras.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
