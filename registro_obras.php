<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Obra</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="obras.php"><i class="fa fa-book"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO DE OBRAS</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_obra.php" method="POST">
        <div class="container">
            <label for="Titulo"><b>Título:</b></label>
            <input type="text" placeholder="Ingrese el Título" name="Titulo" required>

            <label for="Genero"><b>Género:</b></label>
            <input type="text" placeholder="Ingrese el Género" name="Genero" required>

            <label for="Tiempo_de_obra"><b>Tiempo de Obra:</b></label>
            <input type="time" name="Tiempo_de_obra" required>

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
