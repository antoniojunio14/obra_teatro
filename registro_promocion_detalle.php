<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Detalle de Promociones</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="detalle_promociones.php"><i class="fa fa-percent"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO DE DETALLE DE PROMOCIONES</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_promocion_detalle.php" method="POST">
        <div class="container">
            <label for="Id_promocion"><b>ID de Promoción:</b></label>
            <input type="text" placeholder="Ingrese el ID de Promoción" name="Id_promocion" required>

            <label for="Id_categorias"><b>ID de Categoría:</b></label>
            <input type="text" placeholder="Ingrese el ID de Categoría" name="Id_categorias" required>

            <label for="Id_descuento"><b>ID de Descuento:</b></label>
            <input type="text" placeholder="Ingrese el ID de Descuento" name="Id_descuento" required>

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
