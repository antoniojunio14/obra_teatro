<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Reserva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="reservas.php"><i class="fa fa-calendar"></i></a>
    </div>

    <h2>REGISTRAR RESERVA</h2>
    <hr>

    <!-- Creo un formulario para registrar los datos de la reserva -->
    <form action="guardar_reservas.php" method="POST">
        <div class="container">
            <label for="Id_funciones"><b>ID de Función:</b></label>
            <input type="text" placeholder="Ingrese el ID de la función" name="Id_funciones" required>

            <label for="Fecha_de_reserva"><b>Fecha de Reserva:</b></label>
            <input type="datetime-local" name="Fecha_de_reserva" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Reserva</button>
        </div>
    </form>
</body>

</html>
