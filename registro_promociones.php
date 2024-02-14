<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Promoción</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="promociones.php"><i class="fa fa-gift"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO DE PROMOCIONES</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_promociones.php" method="POST">
        <div class="container">
            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el Nombre" name="Nombre" required>

            <label for="Fecha_inicio"><b>Fecha de Inicio:</b></label>
            <input type="date" name="Fecha_inicio" required>

            <label for="Fecha_fin"><b>Fecha de Fin:</b></label>
            <input type="date" name="Fecha_fin" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>
