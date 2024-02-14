<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Categoría</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="categorias.php"><i class="fa fa-tags"></i></a>
    </div>

    <h2>REGISTRAR CATEGORÍA</h2>
    <hr>

    <!-- Creo un formulario para registrar los datos de la categoría -->
    <form action="guardar_categoria.php" method="POST">
        <div class="container">
            <label for="Tipo"><b>Tipo:</b></label>
            <input type="text" placeholder="Ingrese el tipo de categoría" name="Tipo" required>

            <label for="Precio"><b>Precio:</b></label>
            <input type="number" step="1" placeholder="Ingrese el precio de la categoría" name="Precio" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Registrar Categoría</button>
        </div>
    </form>
</body>

</html>
