<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Función</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
       
        <a href="funciones.php"><i class="fa fa-smile-o"></i></a>
        </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO DE FUNCIONES</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos de la función -->
    <form action="guardar_funcion.php" method="POST">
        <div class="container">
            <label for="Id_obras"><b>ID de la Obra:</b></label>
            <input type="text" placeholder="Ingrese el ID de la obra" name="Id_obras" required>

            <label for="Id_sala"><b>ID de la Sala:</b></label>
            <input type="text" placeholder="Ingrese el ID de la sala" name="Id_sala" required>

            <label for="Fecha_y_Hora"><b>Fecha y Hora:</b></label>
            <input type="datetime-local" name="Fecha_y_Hora" required>

            <label for="Duracion"><b>Duración (en minutos):</b></label>
            <input type="number" placeholder="Ingrese la duración en minutos" name="Duracion" required>

            <label for="Precio"><b>Precio:</b></label>
            <input type="number" step="0.000001" placeholder="Ingrese el precio de la función" name="Precio" required>


            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Función</button>
        </div>
    </form>
</body>

</html>
