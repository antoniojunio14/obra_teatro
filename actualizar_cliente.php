<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Clientes'])) {
    $id_cliente = $_POST['Id_Clientes'];
    $id_reservas = $_POST['Id_Reservas'];
    $id_usuarios = $_POST['Id_usuarios'];
    $estado = $_POST['Estado'];
    $tipo = $_POST['Tipo']; 

    $sql = "UPDATE tb_clientes 
            SET Id_Reservas='$id_reservas', Id_usuarios='$id_usuarios', Estado='$estado', tipo='$tipo'
            WHERE id_Clientes='$id_cliente'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Cliente actualizado exitosamente");';
        echo 'window.location="clientes.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

$id_cliente = $_GET['id'];

$query = "SELECT * FROM tb_clientes WHERE id_Clientes = $id_cliente";
$result = mysqli_query($mysqli, $query);

if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Actualizar Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="clientes.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>ACTUALIZAR CLIENTE</h2>
    <hr>
    <form action="actualizar_cliente.php" method="POST">
        <div class="container">
          
            <input type="hidden" name="Id_Clientes" value="<?php echo $id_cliente; ?>" required>

            <label for="Id_Reservas"><b>ID de Reservas:</b></label>
            <input type="text" placeholder="Ingrese el ID de Reservas" name="Id_Reservas" value="<?php echo $row['Id_Reservas']; ?>" required>

            <label for="Id_usuarios"><b>ID de Usuarios:</b></label>
            <input type="text" placeholder="Ingrese el ID de Usuarios" name="Id_usuarios" value="<?php echo $row['Id_usuarios']; ?>" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1" <?php if ($row['Estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['Estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <label for="Tipo"><b>Tipo:</b></label>
            <select name="Tipo" required>
                <option value="regular" <?php if ($row['tipo'] == 'regular') echo 'selected'; ?>>Regular</option>
                <option value="turista" <?php if ($row['tipo'] == 'turista') echo 'selected'; ?>>Turista</option>
            </select>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para el cliente con ID $id_cliente";
}
?>

