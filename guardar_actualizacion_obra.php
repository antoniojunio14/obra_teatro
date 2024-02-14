<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id_obras = $_POST['Id_obras'];
    $Titulo = $_POST['Titulo'];
    $Genero = $_POST['Genero'];
    $Tiempo_de_obra = $_POST['Tiempo_de_obra'];
    $Id_Actores = $_POST['Id_Actores'];
    $Estado = $_POST['Estado'];

    $sql = "UPDATE tb_obras SET Titulo='$Titulo', Genero='$Genero', Tiempo_de_obra='$Tiempo_de_obra', 
            Id_Actores='$Id_Actores', Estado='$Estado' WHERE Id_obras=$Id_obras";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Obra actualizada con éxito");';
        echo 'window.location="obras.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
