

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Asiento</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="asientos.php"><i class="fa fa-chair"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <h2>REGISTRO DE ASIENTOS</h2>
    <hr>

    <!-- Creo un formulario para ingresar los datos del asiento -->
    <form action="guardar_asiento.php" method="POST">
        <div class="container">
            <label for="Id_Salas"><b>ID de la Sala:</b></label>
            <input type="text" placeholder="Ingrese el ID de la sala" name="Id_Salas" required>

            <label for="Numero_de_asientos"><b>Número de Asientos:</b></label>
            <input type="number" placeholder="Ingrese el número de asientos" name="Numero_de_asientos" required>

            <label for="Fila"><b>Fila:</b></label>
            <input type="text" placeholder="Ingrese la fila" name="Fila" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Asiento</button>
        </div>
    </form>
</body>

</html>
